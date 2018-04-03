<?php
include('../config/db_config.php');
$s_id = $_POST['s_id'];
$response=array();
$error = 0;

$query = "delete from school_registered where s_id = $s_id";
if($conn->query($query))
{
    $query = "delete from school_events where s_id = $s_id";
    if(!$conn->query($query))
    {
        $response['status']="error";
        $response['message']=$conn->error;
        $response['title']="Something went wrong!";
        $error = 1;
    }
}
else
{
    $response['status']="error";
    $response['message']=$conn->error;
    $response['title']="Something went wrong!";
    $error = 1;
}

if(!$error)
{
    $response['status']="success";
    $response['message']="School deleted successfully";
    $response['title']="Done";
}

echo json_encode($response);
?>
