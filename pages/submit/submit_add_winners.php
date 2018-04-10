<?php
include('../config/db_config.php');
$age = $_POST['age'];
$category = $_POST['category'];
$first = $_POST['first'];
$second = $_POST['second'];
$third = $_POST['third'];
$first_details = $_POST['first_details'];
$second_details = $_POST['second_details'];
$third_details = $_POST['third_details'];
$event_id = $_POST['event_id'];
$response = array();

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
            }
            else
            {
                $response['status'] = "error";
                $response['title'] = "Something went wrong!";
                $response['message'] = $conn->error;
            }
        }
        else
        {
            $response['status'] = "error";
            $response['title'] = "Something went wrong!";
            $response['message'] = $conn->error;
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
            }
            else
            {
                $response['status'] = "error";
                $response['title'] = "Something went wrong!";
                $response['message'] = $conn->error;
            }
        }
        else
        {
            $response['status'] = "error";
            $response['title'] = "Something went wrong!";
            $response['message'] = $conn->error;
        }
    }
}

echo json_encode($response);
?>
