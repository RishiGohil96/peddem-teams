<?php
include '../config/db_config.php';

$school[0]['category'] = "boys";
$school[0]['age'] = "u14";

$school[1]['category'] = "girls";
$school[1]['age'] = "u14";

$school[2]['category'] = "boys";
$school[2]['age'] = "u15";

$school[3]['category'] = "boys";
$school[3]['age'] = "u17";

$school[4]['category'] = "girls";
$school[4]['age'] = "u17";

$previous = '';
$total_participants = 0;
$category_count = 0;
$json_row = -1;
$json = array();



$query = "SELECT DISTINCT school_events.event_id, event_list.events, event_list.participants
        from school_events, event_list
        where school_events.event_id = event_list.id
        order by school_events.event_id";



if($result=$conn->query($query))
{
    while($rec = mysqli_fetch_assoc($result))
    {
        $event_id = $rec['event_id'];
        $event = $rec['events'];
        $participants = $rec['participants'];

        if($previous != $event)
        {
            $total_participants = 0;
            $json_row ++;
            $category_count = 0;
            $json[$json_row]['event'] = $event;
            $json[$json_row]['participants'] = $participants;
        }

        for($i=0; $i<5; $i++)
        {

            $age = $school[$i]['age'];
            $category = $school[$i]['category'];
            $query = "SELECT COUNT(school_registered.s_id) as count
                    from school_registered, school_events
                    where school_events.s_id = school_registered.s_id
                    and school_registered.age = '$age'
                    and school_registered.category = '$category'
                    and school_events.event_id = $event_id";
            if($res = $conn->query($query))
            {
                while($row = mysqli_fetch_assoc($res))
                {
                    $count = $row['count'];
                }
                if($count != 0)
                {
                    $total_participants += $count * $participants;
                    $json[$json_row]['total_participants'] = $total_participants;
                    $json[$json_row]['category'][$category_count] = $category." - ".$age;
                    $json[$json_row]['category_schools'][$category_count] = $count;
                    $json[$json_row]['count'] = ++$category_count;
                }
            }
        }
        $previous = $event;
    }
}

$columnHeader = "Event" . "\t" . "Category" . "\t" . "Schools Registered" . "\t" . "Participants" . "\t" . "Total" . "\t" ;
$setData = '';

for($i=0; $i<=$json_row; $i++)
{
    $rowData = '';
    $value = $json[$i]['event'] ."\t";
    for($j=0; $j<$json[$i]['count']; $j++)
    {
        $value .= $json[$i]['category'][$j] ."\t";
        $value .= $json[$i]['category_schools'][$j] ."\t";
        $value .= ($json[$i]['category_schools'][$j] * $json[$i]['participants']) ."\t";
        if($j == $json[$i]['count']-1)
        {
            $value .= $json[$i]['total_participants'] ."\t";
        }
        $rowData .= $value;
        $setData .= trim($rowData) . "\n";
        $rowData = '';
        $value = "." ."\t";
    }
}

$filename="category-wise-event-participants.xls";
header("Content-type: application/octet-stream");
header("Content-Disposition: attachment; filename=$filename");      //chnage file name
header("Pragma: no-cache");
header("Expires: 0");
echo ucwords($columnHeader) . "\n" . $setData . "\n";
