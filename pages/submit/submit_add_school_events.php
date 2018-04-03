<?php
include('../config/db_config.php');
$s_id = $_POST['s_id'];
$events = $_POST['events'];
$json['response']=array();
$error = 0;
$total_participants = 0;




$query = "delete from school_events where s_id = $s_id";    // ----- remove existing events
if($conn->query($query))
{
    $query = "insert into school_events(s_id, event_id) values(?,?)";   //---- prepare insert statement
    if($stmt = $conn->prepare($query))
    {
        foreach($events as $event_details)
        {
            $event = explode(",",$event_details);
            $event_id = $event[0];
            $total_participants += $event[1];
            $stmt->bind_param("ii", $s_id, $event_id);  //---- insert each event
            if(! $stmt->execute())
            {
                $error = 1;
                $json['response']['status']= "error";
                $json['response']['message']= $conn->error;
            }
        }
        $stmt->close();
        $query = "update school_registered set participants = ? where s_id = ?";
        if($stmt = $conn->prepare($query))
        {
            $stmt->bind_param("ii", $total_participants, $s_id);
            if(! $stmt->execute())
            {
                $error = 1;
                $json['response']['status']= "error";
                $json['response']['message']= $conn->error;
            }
        }
    }
    else
    {
        $error = 1;
        $json['response']['status']= "error";
        $json['response']['message']= $conn->error;
    }
}
else
{
    $error = 1;
    $json['response']['status']= "error";
    $json['response']['message']= $conn->error;
}



if(! $error)
{
    $json['response']['status']= "success";
    $json['response']['message']= "School Registration Complete!";
}

echo json_encode($json);

?>
