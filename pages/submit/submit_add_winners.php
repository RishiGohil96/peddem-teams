<?php
include('../config/db_config.php');
$age = $_POST['age'];
$category = $_POST['category'];
$event_id = $_POST['event_id'];
$winner_toggle = $_POST['winner_toggle'];
if($winner_toggle == "true")
{
    $first = $_POST['first'];
    $second = $_POST['second'];
    $third = $_POST['third'];
    $first_details = $_POST['first_details'];
    $second_details = $_POST['second_details'];
    $third_details = $_POST['third_details'];
}

$op_toggle = $_POST['op_toggle'];
if($op_toggle == "true")
{
    $op_1 = $_POST['op_1'];
    $op_2 = $_POST['op_2'];
    $op_3 = $_POST['op_3'];
    $op_4 = $_POST['op_4'];
    $op_1_name = $_POST['op_1_name'];
    $op_2_name = $_POST['op_2_name'];
    $op_3_name = $_POST['op_3_name'];
    $op_4_name = $_POST['op_4_name'];
}


$response = array();
$response['message']='';
$error_count = 0;

if($winner_toggle == "true")
{
    $query = "select position.id from position, school_registered
    where position.event_id = $event_id
    AND position.pos_1 = school_registered.s_id
    AND school_registered.age = '$age'
    AND school_registered.category = '$category'";

    if($result = $conn->query($query))
    {
        if(mysqli_num_rows($result))
        {
            while($row=mysqli_fetch_assoc($result))
            {
                $position_id = $row['id'];
            }
            $query = "update position set pos_1 = ?, pos_2 = ?, pos_3 = ?, pos_1_details = ?, pos_2_details = ?, pos_3_details = ? where id = ?";
            if($stmt = $conn->prepare($query))
            {
                $stmt->bind_param("iiisssi",$first, $second, $third, $first_details, $second_details, $third_details, $position_id);
                if($stmt->execute())
                {
                    $response['status'] = "success";
                    $response['title'] = "Updated!";
                    $response['message'] = "The event winners have been updated successfully.";
                    $response['position_id'] = $position_id;

                }
                else
                {
                    $response['status'] = "error";
                    $response['title'] = "Something went wrong!";
                    $response['message'] = $conn->error;
                    $response['error'][$error_count] = "1";
                    $error_count++;
                }
            }
            else
            {
                $response['status'] = "error";
                $response['title'] = "Something went wrong!";
                $response['message'] = $conn->error;
                $response['error'][$error_count] = "2";
                $error_count++;
            }
        }
        else
        {
            $query = "insert into position (event_id, pos_1, pos_2, pos_3, pos_1_details, pos_2_details, pos_3_details) values (?,?,?,?,?,?,?)";
            if($stmt = $conn->prepare($query))
            {
                $stmt->bind_param("iiiisss",$event_id, $first, $second, $third, $first_details, $second_details, $third_details);
                if($stmt->execute())
                {
                    $response['status'] = "success";
                    $response['title'] = "Done";
                    $response['message'] = "The event winners have been entered successfully.";
                    $position_id_new = $stmt->insert_id;
                    $response['position_id'] =$position_id_new;
                    $stmt->close();
                }
                else
                {
                    $response['status'] = "error";
                    $response['title'] = "Something went wrong!";
                    $response['message'] = $conn->error;
                    $response['error'][$error_count] = "3";
                    $error_count++;
                }
            }
            else
            {
                $response['status'] = "error";
                $response['title'] = "Something went wrong!";
                $response['message'] = $conn->error;
                $response['error'][$error_count] = "4";
                $error_count++;
            }
        }
    }
}


if($op_toggle == "true")
{
    $query = "select op.op_id from outstanding_persons op, school_registered
        where op.op_s_id_1 = school_registered.s_id
        and school_registered.category = '$category'
        and school_registered.age = '$age'
        and op.event_id = $event_id";
    if($result = $conn->query($query))
    {
        if(mysqli_num_rows($result))
        {
            //------------ update op
            while($row = mysqli_fetch_assoc($result))
            {
                $op_id = $row['op_id'];
            }
            $query = "UPDATE outstanding_persons set
            op_s_id_1 = ?, op_name_1 = ?,
            op_s_id_2 = ?, op_name_2 = ?,
            op_s_id_3 = ?, op_name_3 = ?,
            op_s_id_4 = ?, op_name_4 = ?
            WHERE op_id = ?";
            if($stmt = $conn->prepare($query))
            {
                $stmt->bind_param("isisisisi", $op_1, $op_1_name, $op_2, $op_2_name, $op_3, $op_3_name, $op_4, $op_4_name, $op_id);
                if($stmt->execute())
                {
                    $response['status'] = "success";
                    $response['title'] = "Done";
                    $response['message'] .= " Outstanding Persons list updated successfully.";
                }
                else
                {
                    $response['status'] = "error";
                    $response['title'] = 'Something went wrong';
                    $response['message'] .= " Oustanding Persons updating error 2.1 : ".$conn->error;
                }
            }
            else
            {
                $response['status'] = "error";
                $response['title'] = 'Something went wrong';
                $response['message'] .= " Oustanding Persons updating error 2.2 : ".$conn->error;
            }
        }
        else
        {
            //----------------- insert op
            $query = "insert into outstanding_persons values(?,?,?,?,?,?,?,?,?,?)";
            if($stmt = $conn->prepare($query))
            {
                $temp_id =0;

                $stmt->bind_param("iiisisisis", $temp_id, $event_id, $op_1, $op_1_name, $op_2, $op_2_name, $op_3, $op_3_name, $op_4, $op_4_name);
                if($stmt->execute())
                {
                    $response['status'] ='success';
                    $response['title'] = 'Done';
                    $response['message'] .= " Outstanding Persons entered successfully.";
                }
                else
                {
                    $response['status'] = "error";
                    $response['title'] = 'Something went wrong';
                    $response['message'] .= " Oustanding Persons entry error 2.3 : ".$conn->error;
                }
            }
            else
            {
                $response['status'] = "error";
                $response['title'] = 'Something went wrong';
                $response['message'] .= " Oustanding Persons entry error 2.4 : ".$conn->error;
            }
        }
    }
    else
    {
        $response['status'] = "error";
        $response['title'] = "Something went wrong";
        $response['message'] .= " Oustanding Persons error 2.5 : ".$conn->error;
    }
}


echo json_encode($response);
?>
