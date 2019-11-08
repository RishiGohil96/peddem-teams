<?php
include('../config/db_config.php');

$schools = array();
$response=array();
$flag = 0;
$schools[0]['school'] = "Corner Stone";
$schools[0]['place'] = "Karaswada";

// check if schools are already inserted
$query = "select name from school_list where name = ? AND place = ?";
if($stmt = $conn->prepare($query))
{
    $stmt->bind_param("ss", $schools[0]['school'], $schools[0]['place']);
    if($stmt->execute())
    {
        $stmt->store_result();  //----------------------------------- IMPORTANT
        if($stmt->num_rows)
        {
            $flag = 1;
            $response['status'] = "info";
            $response['message'] = "Schools are already added!";
        }

    }
}
else
{
    $flag = 1;
    $response['status'] = "error";
    $response['message'] = $conn->error;
}

// add the schools if not already added
if($flag == 0)
{
    $query = "insert into school_list(name, place) values(?, ?)";
    if($stmt = $conn->prepare($query))
    {
       foreach($schools as $school)
        {
            $stmt->bind_param("ss",$school['school'], $school['place']);
            if($stmt->execute())
            {}
            else
            {
                $flag=1;
                $response['status'] = "error";
                $response['message'] = $conn->error;
            }
        }
    }
    else
    {
        $flag=1;
        $response['status'] = "error";
        $response['message'] = $conn->error;
    }
}

if($flag == 0)
{
    $response['status'] = "success";
    $response['message'] = "schools added successfully!";
}

echo json_encode($response);
?>
