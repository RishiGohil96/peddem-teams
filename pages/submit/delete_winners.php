<?php
include('../config/db_config.php');
$id=$_POST['id'];
$response=array();

$query = "delete from position where id= $id";
if($conn->query($query))
{
    $response['status'] = "success";
    $response['title'] = "Done!";
    $response['message'] = "The winners were removed successfully.";
}
else
{
    $response['status'] = "error";
    $response['title'] = "Something went wrong!";
    $response['message'] = "Error : ".$conn->error;
}

echo json_encode($response);
?>
