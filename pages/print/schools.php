<?php
include '../config/db_config.php';


$query="select * from school_registered_common";


$result=$conn->query($query);
$columnHeader = "ID" . "\t" . "School" . "\t";
$setData = '';
while ($rec = mysqli_fetch_array($result)) {
$rowData = '';

$value= $rec['id'] ."\t";
$value.= $rec['school'] ."\t";
$rowData .= $value;
$setData .= trim($rowData) . "\n";
}
$filename="all.xls";
header("Content-type: application/octet-stream");
header("Content-Disposition: attachment; filename=$filename");      //chnage file name
header("Pragma: no-cache");
header("Expires: 0");
echo ucwords($columnHeader) . "\n" . $setData . "\n";
