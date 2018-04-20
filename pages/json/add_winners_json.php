<?php
include('../config/db_config.php');
$json = array();

$query = "SELECT school_events.s_id, school_registered.s_name, school_events.event_id, event_list.events,                   school_registered.category, school_registered.age
from school_registered, school_events, event_list
WHERE
school_registered.s_id = school_events.s_id
and school_events.event_id = event_list.id
ORDER BY school_registered.s_name";

if($result = $conn->query($query))
{
    $count = 0;
    while($row = mysqli_fetch_assoc($result))
    {
        $json[$count]['s_id'] = $row['s_id'];
        $json[$count]['school'] = $row['s_name'];
        $json[$count]['event'] = $row['events'];
        $json[$count]['event_id'] = $row['event_id'];
        $json[$count]['category'] = $row['category'];
        $json[$count]['age'] = $row['age'];
        $count++;
    }
}
else
{
    $json['error']="true";
    $json['message'] = $conn->error;
}

echo json_encode($json);


?>
