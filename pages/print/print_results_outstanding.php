<?php
include '../config/db_config.php';

$age = $_GET['age'];
$category = $_GET['category'];

$query = "SELECT event_list.events, p_1.s_name as s1, p_2.s_name as s2, p_3.s_name as s3, p_4.s_name as s4, op.op_name_1, op.op_name_2, op.op_name_3, op.op_name_4, op.op_id, op.event_id
        FROM outstanding_persons op
        JOIN event_list ON op.event_id = event_list.id
        JOIN school_registered p_1 ON op.op_s_id_1 = p_1.s_id
        JOIN school_registered p_2 ON op.op_s_id_2 = p_2.s_id
        JOIN school_registered p_3 ON op.op_s_id_3 = p_3.s_id
        JOIN school_registered p_4 ON op.op_s_id_4 = p_4.s_id
        where p_1.age='$age'
        and p_1.category='$category'
        ORDER BY op.event_id";

$result=$conn->query($query);
$columnHeader = "Event" . "\t" . "First" . "\t"  . "Second" . "\t" . "third" . "\t" . "Fourth" . "\t";
$setData = '';
while ($rec = mysqli_fetch_array($result))
{
    //---- school name
    $rowData = '';
    $value= $rec['events'] ."\t";
    $value.= $rec['s1'] ."\t";
    $value.= $rec['s2'] ."\t";
    $value.= $rec['s3'] ."\t";
    $value.= $rec['s4'] ."\t";
    $rowData .= $value;
    $setData .= trim($rowData) . "\n";
    //---- player name
    $rowData = '';
    $value= "Players:" . "\t";
    $value.= $rec['op_name_1'] ."\t";
    $value.= $rec['op_name_2'] ."\t";
    $value.= $rec['op_name_3'] ."\t";
    $value.= $rec['op_name_4'] ."\t";
    $rowData .= $value;
    $setData .= trim($rowData) . "\n";
}


$filename="outstanding-persons-$category-$age.xls";
header("Content-type: application/octet-stream");
header("Content-Disposition: attachment; filename=$filename");      //chnage file name
header("Pragma: no-cache");
header("Expires: 0");
echo ucwords($columnHeader) . "\n" . $setData . "\n";
