<?php
include('../config/db_config.php');
$schools = $_POST['schools'];
$response = array();
$error = 0;
if($conn->query("truncate school_participated"))
{
    $query = "insert into school_participated(s_id) values (?)";
    if($stmt = $conn->prepare($query))
    {
        foreach($schools as $school)
        {
            $stmt->bind_param("i",$school);
            $stmt->execute();
        }
    }
    else
    {
        $error = 1;
        $response['status']='error';
        $response['title']='Something went wrong!';
        $response['message']=$conn->error;
    }
}
else
{
    $error = 1;
    $response['status']='error';
    $response['title']='Something went wrong!';
    $response['message']=$conn->error;
}

if(!$error)
{
    $response['status']='success';
    $response['title']='Done';
    $response['message']='Participated Schools List Updated';
}

echo json_encode($response);
?>
