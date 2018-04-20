<?php
include '../config/db_config.php';

$age = $_GET['age'];
$category = $_GET['category'];

$query = "SELECT event_list.events, p_1.s_name as s1, p_2.s_name as s2, p_3.s_name as s3, position.pos_1_details, position.pos_2_details, position.pos_3_details, position.id, position.event_id
                    FROM position
                    JOIN event_list ON position.event_id = event_list.id
                    JOIN school_registered p_1 ON position.pos_1 = p_1.s_id
                    JOIN school_registered p_2 ON position.pos_2 = p_2.s_id
                    JOIN school_registered p_3 ON position.pos_3 = p_3.s_id
                    where p_1.age='$age'
                    and p_1.category='$category'
                    ORDER BY position.event_id";

$result=$conn->query($query);
$columnHeader = "Event" . "\t" . "First" . "\t" . "First Details" . "\t" . "Second" . "\t" . "Second Details" . "\t" . "third" . "\t" . "Third Details" . "\t";
$setData = '';
while ($rec = mysqli_fetch_array($result))
{
    $rowData = '';
    $value= $rec['events'] ."\t";
    $value.= $rec['s1'] ."\t";
    $value.= $rec['pos_1_details'] ."\t";
    $value.= $rec['s2'] ."\t";
    $value.= $rec['pos_2_details'] ."\t";
    $value.= $rec['s3'] ."\t";
    $value.= $rec['pos_3_details'] ."\t";
    $rowData .= $value;
    $setData .= trim($rowData) . "\n";
}


$filename="winners-$category-$age.xls";
header("Content-type: application/octet-stream");
header("Content-Disposition: attachment; filename=$filename");      //chnage file name
header("Pragma: no-cache");
header("Expires: 0");
echo ucwords($columnHeader) . "\n" . $setData . "\n";
