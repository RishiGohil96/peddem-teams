<?php
include '../config/db_config.php';
$s_id = $_POST['s_id'];
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

$columnHeader = "Discipline" . "\t" . "Under-14 Boys" . "\t" . "Under-14 Girls" . "\t" . "Under-15 Boys" . "\t" . "Under-17 Boys" . "\t" . "Under-17 Girls" . "\t";
$setData = '';

$query = "select s_name from school_registered where s_id =$s_id";
if($result = $conn->query($query))
{
    while($row = mysqli_fetch_assoc($result))
    {
        $school_name = $row['s_name'];
    }
}
else
{
    echo "Error Code 1 : ".$conn->error;
}

$query = "select count(s_name) as count from school_registered, school_events
            where school_events.event_id = ?
            AND school_events.s_id = school_registered.s_id
            AND school_registered.category = ?
            AND school_registered.age = ?
            AND school_registered.s_name = ?";
if(! $stmt = $conn->prepare($query))
{
    echo $conn->error;
}


$query = "select id, events from event_list order by events, id";
if($result = $conn->query($query))
{
    while($row = mysqli_fetch_assoc($result))
    {
        $rowData = "";
        $event_id = $row['id'];
        if($event_id != 32 && $event_id != 9 && $event_id != 6) $value = $row['events'] . "\t";
        for($i=0; $i<5; $i++)
        {
            $stmt->bind_param("isss", $event_id, $categories[$i]['category'], $categories[$i]['age'], $school_name);
            if($stmt->execute())
            {
                $stmt->bind_result($count);
                while($stmt->fetch())
                {
                    if($count == 0)
                    {
                        $participation_status = "No";
                    }
                    else
                    {
                        $participation_status = "Yes";
                    }
                }
                if($event_id == 33 && $i==0)
                {
                    $value .= $buffer . "\t";

                }
                else if($event_id == 10 && $i==4)
                {
                    $value .= $buffer . "\t";
                }
                else if($event_id == 7 && $i==4)
                {
                    $value .= $buffer . "\t";
                }
                else
                {
                    if($event_id != 32 && $event_id != 9 && $event_id != 6) $value .= $participation_status . "\t";
                    else
                    {
                        if($event_id == 32 && $i == 0)
                        {
                            $buffer = $participation_status;
                            continue;
                        }
                        else
                        if($event_id == 9 && $i == 4)
                        {
                            $buffer = $participation_status;
                            continue;
                        }
                        if($event_id == 6 && $i == 4)
                        {
                            $buffer = $participation_status;
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
        $rowData .= $value;
        $setData .= trim($rowData) . "\n";
    }
}
else
{
    echo $conn->error;
}

$school_name = str_replace(" ","_",$school_name);
$filename="school-".$school_name."-events.xls";
header("Content-type: application/octet-stream");
header("Content-Disposition: attachment; filename=$filename");      //chnage file name
header("Pragma: no-cache");
header("Expires: 0");
echo ucwords($columnHeader) . "\n" . $setData . "\n";



?>
