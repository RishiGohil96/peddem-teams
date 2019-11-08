<?php
include ('../config/db_config.php');
$json = array();

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


$query1 = "select s_name from school_registered, school_events
            where school_events.s_id = school_registered.s_id
            AND school_registered.age = ?
            AND school_registered.category = ?
            AND school_events.event_id = ?";
if($stmt1 = $conn->prepare($query1))
{
    for($i=0; $i<5; $i++)
    {
        $age = $categories[$i]['age'];
        $category = $categories[$i]['category'];
        $eventCount = 0;
        $json[$i]['age'] = $age;
        $json[$i]['category'] = $category;
        $query = "select id, events from event_list where age like ('%$age%') AND category like ('%$category%')";
        if($result = $conn->query($query))
        {
            while($row = mysqli_fetch_assoc($result))
            {
                $event_id = $row['id'];
                $event_name = $row['events'];
                $stmt1->bind_param("ssi", $age, $category, $event_id);
                if($stmt1->execute())
                {
                    $stmt1->store_result();
                    if($stmt1->num_rows > 0)
                    {
                        $json[$i]['events'][$eventCount]['event'] = $event_name;
                        $json[$i]['events'][$eventCount]['schools'] = "";
                        $stmt1->bind_result($school_name);
                        while($stmt1->fetch())
                        {
                            $json[$i]['events'][$eventCount]['schools'] .= $school_name."\n";
                        }
                        $eventCount++;
                    }

                }
                else
                {
                    echo $conn->error;
                }

            }
        }
    }
}
else
{
    echo $conn->error;
}

echo json_encode($json);
?>
