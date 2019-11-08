<?php
include('../config/db_config.php');
$events = $_POST['event_id'];
$participants = $_POST['participants'];
$s_id = $_POST['s_id'];
$response = array();
$query = "UPDATE `school_events` SET `participants` = ? WHERE `school_events`.`id` = ?";
$error = false;
if($stmt = $conn->prepare($query))
{
    for($i=0; $i < sizeof($events); $i++)
    {
        $stmt->bind_param("ii", $participants[$i], $events[$i]);
        if(! $stmt->execute())
        {
            $error = true;
            $error_text = $conn->error;
        }
    }
    if($error)
    {
        $response['type']= "error";
        $response['message']= $error_text;
    }
    else
    {
        $response['type']= "success";
        $response['message']= "No. of participants updated successfully!";
    }
}
else
{
    $response['type']= "error";
    $response['message']= $conn->error;
}

if(! $error)
{
    $query = "UPDATE school_registered set school_registered.participants = (SELECT sum(participants) from school_events                where s_id = $s_id) where school_registered.s_id =$s_id";
    if(! $conn->query($query))
    {
        $response['type']= "error";
        $response['message']= $conn->error;
    }
}

echo json_encode($response);
?>
