<?php
include '../config/db_config.php';


$query="SELECT category, age, sum(participants) as participants from school_registered GROUP BY category, age";
$total = 0;

$result=$conn->query($query);
$columnHeader = "Age" . "\t" . "Category" . "\t" . "Participants" . "\t";
$setData = '';
while ($rec = mysqli_fetch_array($result))
{
    $rowData = '';
    $value= $rec['age'] ."\t";
    $value.= $rec['category'] ."\t";
    $value.= $rec['participants'] ."\t";
    $rowData .= $value;
    $setData .= trim($rowData) . "\n";
    $total += $rec['participants'];
}
//---- total
$rowData = '';
$value = "Total :"."\t"."\t";
$value .= $total;
$rowData .=$value;
$setData .=trim($rowData) . "\n";
//---- total

$filename="stats_participants.xls";
header("Content-type: application/octet-stream");
header("Content-Disposition: attachment; filename=$filename");      //chnage file name
header("Pragma: no-cache");
header("Expires: 0");
echo ucwords($columnHeader) . "\n" . $setData . "\n";
