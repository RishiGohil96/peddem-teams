<?php
  $server="localhost";
  $user="root";
  $password="";
  $db="cravings";

  try
  {
    $conn= new mysqli($server,$user,$password,$db);
    if($conn->connect_error)
    {
    //die("connection failed".$conn->connect_error);
      throw new Exception("Error connecting to the database. Please check your database connection");
    }
  }
    catch (Exception $e)
    {
      echo 'Message: ' .$e->getMessage();
    }
mysqli_set_charset($conn,"utf8");
?>
