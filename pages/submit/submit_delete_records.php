<?php
include('../config/db_config.php');
$response = array();
$error = 0;

$query = "truncate outstanding_persons";
if(! $conn->query($query))
{
    $error = 1;
    $response['status'] = "error";
    $response['title'] = "Something went wrong";
    $response['message'] = "Error: ".$conn->error;
}

$query = "truncate position";
if(! $conn->query($query))
{
    $error = 1;
    $response['status'] = "error";
    $response['title'] = "Something went wrong";
    $response['message'] = "Error: ".$conn->error;
}

$query = "truncate school_events";
if(! $conn->query($query))
{
    $error = 1;
    $response['status'] = "error";
    $response['title'] = "Something went wrong";
    $response['message'] = "Error: ".$conn->error;
}

$query = "truncate school_participated";
if(! $conn->query($query))
{
    $error = 1;
    $response['status'] = "error";
    $response['title'] = "Something went wrong";
    $response['message'] = "Error: ".$conn->error;
}

$query = "truncate school_registered";
if(! $conn->query($query))
{
    $error = 1;
    $response['status'] = "error";
    $response['title'] = "Something went wrong";
    $response['message'] = "Error: ".$conn->error;
}

$query = "truncate school_registered_common";
if(! $conn->query($query))
{
    $error = 1;
    $response['status'] = "error";
    $response['title'] = "Something went wrong";
    $response['message'] = "Error: ".$conn->error;
}

if(!$error)
{
    $response['status'] = "success";
    $response['title'] = "Done!";
    $response['message'] = "All records cleared.";
}

echo json_encode($response);
?>
