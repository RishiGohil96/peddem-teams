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

$expiry_date = "25/05/2019";
$today = date('d/m/Y');
if($expiry_date <= $today)
{
    $response['status'] = "error";
    $response['message'] = "The product has expired. Today - $today, expired: $expiry_date";
}
echo json_encode($response);
?>
