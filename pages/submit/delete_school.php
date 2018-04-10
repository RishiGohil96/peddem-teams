<?php
include('../config/db_config.php');
$s_id = $_POST['s_id'];
$response=array();
$error = 0;

//----------------------------- number of entries of the school in school_resgistered -------------//

$query = "select count(*) as schools from school_registered WHERE s_name = (SELECT s_name from school_registered where s_id = $s_id) ";
if($result = $conn->query($query))
{
    while($row = mysqli_fetch_assoc($result))
    {
        $total_entries = $row['schools'];
    }
}
else
{
    $response['status']="error";
    $response['message']=$conn->error;
    $response['title']="Something went wrong! error code : 1";
    $error = 1;
}
//--------------------------- number of entries of the school in school_resgistered end -----------//



//----------------------------- delete school_registered_common and school_participated entries ----//
if($total_entries == 1)
{
    $query = "DELETE a.*, b.*
    FROM school_registered_common a
    LEFT JOIN school_participated b
    ON b.s_id = a.id
    WHERE a.school = (select s_name from school_registered where s_id = $s_id)";
    if($conn->query($query))
    {
        //done
    }
    else
    {
        $response['status']="error";
        $response['message']=$conn->error;
        $response['title']="Something went wrong! error code : 2";
        $error = 1;
    }

}
//------------------------ delete school_registered_common and school_participated entries end ----//

$query = "DELETE FROM school_registered where s_id = $s_id";
if($conn->query($query))
{
    $query = "delete from school_events where s_id = $s_id";
    if(!$conn->query($query))
    {
        $response['status']="error";
        $response['message']=$conn->error;
        $response['title']="Something went wrong! error code : 3";
        $error = 1;
    }
}
else
{
    $response['status']="error";
    $response['message']=$conn->error;
    $response['title']="Something went wrong! error code : 4";
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
