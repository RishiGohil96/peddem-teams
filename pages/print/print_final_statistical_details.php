<?php
include '../config/db_config.php';
$categories = array();

$categories[0]['age']='u14';
$categories[0]['category']='boys';

$categories[1]['age']='u14';
$categories[1]['category']='girls';

$categories[2]['age']='u15';
$categories[2]['category']='boys';

$categories[3]['age']='u17';
$categories[3]['category']='boys';

$categories[4]['age']='u17';
$categories[4]['category']='girls';

$columnHeader = "Discipline" . "\t" . "Under-14 Boys" . "\t" . "Under-14 Girls" . "\t" . "Under-15 Boys" . "\t" . "Under-17 Boys" . "\t" . "Under-17 Girls" . "\t" . "Total Boys" . "\t" . "Total Girls" . "\t" . "Grand Total" . "\t";
$setData = '';


$query = "select count(s_name) as count, sum(school_events.participants) as sum
            from school_registered, school_events
            where school_events.event_id = ?
            AND school_events.s_id = school_registered.s_id
            AND school_registered.category = ?
            AND school_registered.age = ?";
if(! $stmt = $conn->prepare($query))
{
    echo $conn->error;
}


$query = "select id, events, participants from event_list order by events, id";
if($result = $conn->query($query))
{
    while($row = mysqli_fetch_assoc($result))
    {
        $rowData = "";
        $boys = 0;
        $girls = 0;
        $event_id = $row['id'];
        $participants = $row['participants'];
        if($event_id != 32 && $event_id != 9 && $event_id != 6) $value = $row['events'] . "\t";
        for($i=0; $i<5; $i++)
        {
            $stmt->bind_param("iss", $event_id, $categories[$i]['category'], $categories[$i]['age']);
            if($stmt->execute())
            {
                $stmt->bind_result($count, $sum);
                while($stmt->fetch())
                {
                    $temp = 0;

                    //$count_participants = $participants * $count;
                    $count_participants = $sum + $temp;
                    if($categories[$i]['category'] == "boys")
                        $boys += $count_participants;
                    else
                        $girls += $count_participants;
                }
                if($event_id == 33 && $i==0)
                {
                    $value .= $buffer . "\t";
                    $boys += $buffer;
                }
                else if($event_id == 10 && $i==4)
                {
                    $value .= $buffer . "\t";
                    $girls += $buffer;
                }
                else if($event_id == 7 && $i==4)
                {
                    $value .= $buffer . "\t";
                    $girls += $buffer;
                }
                else
                {
                    if($event_id != 32 && $event_id != 9 && $event_id != 6) $value .= $count_participants . "\t";
                    else
                    {
                        if($event_id == 32 && $i == 0)
                        {
                            $buffer = $count_participants;
                            continue;
                        }
                        else
                        if($event_id == 9 && $i == 4)
                        {
                            $buffer = $count_participants;
                            continue;
                        }
                        if($event_id == 6 && $i == 4)
                        {
                            $buffer = $count_participants;
                            continue;
                        }
                    }
                }
            }
            else
            {
                echo $conn->error;
            }
        }
        if($event_id == 32 || $event_id == 9 || $event_id == 6) continue;
        $value .= $boys ."\t";
        $value .= $girls . "\t";
        $value .= $boys+$girls . "\t";
        $rowData .= $value;
        $setData .= trim($rowData) . "\n";
    }
}
else
{
    echo $conn->error;
}

$filename="Final_Statistical_Details.xls";
header("Content-type: application/octet-stream");
header("Content-Disposition: attachment; filename=$filename");      //chnage file name
header("Pragma: no-cache");
header("Expires: 0");
echo ucwords($columnHeader) . "\n" . $setData . "\n";



?>
