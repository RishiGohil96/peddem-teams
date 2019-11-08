<?php
include('../config/db_config.php');

$user = $_POST['user'];
$pass = $_POST['pass'];
$response = array();

$query = "select username from users where username = ? and password = ?";
if($stmt = $conn->prepare($query))
{
    $stmt->bind_param("ss",$user,$pass);
    if($stmt->execute())
    {
        $stmt->store_result();
        if($stmt->num_rows)
        {
            $stmt->bind_result($username);
            while($stmt->fetch())
            {
                $username = $username;
            }
            $response['status'] = "success";
            session_start();
            $_SESSION['user'] = $username;
        }
        else
        {
            $response['status'] = "error";
        }

    }
    else
    {
        $response['status'] = "error";
        $response['message'] = $conn->error;
    }
}
else
{
    $response['status'] = "error";
    $response['message'] = $conn->error;
}


$today = date("Y-m-d");
$tempArr=explode('-', '2019-11-5');
array_walk( $tempArr, 'intval' );
$expiry_date = date('Y-m-d', mktime(0, 0, 0, $tempArr[1], $tempArr[2], $tempArr[0]));
if(strtotime($expiry_date) <= strtotime($today))
{
    $response['status'] = "expired";
    $response['message'] = "The product has expired on $expiry_date";
}
echo json_encode($response);
?>
