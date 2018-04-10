<?php
include('../config/db_config.php');
$json=array();

$query = "select * from school_registered order by s_name";
if($result = $conn->query($query))
{
    $count = 0;
    while($row = mysqli_fetch_assoc($result))
    {
        $json[$count]['s_id']=$row['s_id'];
        $json[$count]['school']=$row['s_name'];
        $json[$count]['category']=$row['category'];
        $json[$count]['age']=$row['age'];
        $json[$count]['participants']=$row['participants'];
        $count++;
    }
}
else
{
    $json['status']="error";
    $json['message']=$conn->error;
}

echo json_encode($json);
?>
