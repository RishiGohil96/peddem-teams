<?php
include('../config/db_config.php');
$school = $_POST['school'];
$category = $_POST['category'];
$age = $_POST['age'];
$json['response'] = array();
$duplicate = 0;
// ------------------ check for duplicate entry --------------//
$query = "select count(s_id)  from school_registered where s_name = ? and category = ? and age = ?";
if($stmt = $conn->prepare($query))
{
    $stmt->bind_param("sss", $school, $category, $age);
    $stmt->execute();
    $stmt->bind_result($count);
    while($stmt->fetch())
    {
        if ($count != 0)
        {
            $json['response']['status'] = "error";
            $json['response']['message'] = "The school has already been registered";
            $duplicate = 1;
        }
    }
    $stmt->close();
}
else
{
    $json['response']['status'] = "error";
    $json['response']['message'] = $conn->error;
}
// ---------------- check for duplicate entry end ------------//


// -------------------- register school ----------------------//

if($duplicate == 0)
{
    $query = "insert into school_registered(s_name, category, age) values(?,?,?)";
    if($stmt = $conn->prepare($query))
    {
        $stmt->bind_param("sss", $school, $category, $age);
        if($stmt->execute())
        {
            $json['response']['status'] = "success";
            $json['response']['message'] = "School Registered Successfully!";
            $json['response']['s_id'] = $conn->insert_id;
        }
        else
        {
            $json['response']['status'] = "error";
            $json['response']['message'] = $conn->error;
        }
    }
    else
    {
        $json['response']['status'] = "error";
        $json['response']['message'] = $conn->error;
    }
}

// ------------------ register school end --------------------//


// ------------------ register common school -----------------//

if($duplicate == 0)
{
    $query = "select count(*) from school_registered_common where school = ?";
    if($stmt = $conn->prepare($query))
    {
        $stmt->bind_param("s",$school);
        if($stmt->execute())
        {
            $stmt->bind_result($count);
            $stmt->fetch();
            $json['response']['count'] = $count;

        }
        else
        {
            $json['response']['status'] = "error";
            $json['response']['message'] = "Common school registration error code 1: ".$conn->error;
        }
    }
    else
    {
        $json['response']['status'] = "error";
        $json['response']['message'] = "Common school registration error code 2: ".$conn->error;
    }
    $stmt->close();
    if(! $count)
    {
        $query = "insert into school_registered_common (school) values(?)";
        if($stmt = $conn->prepare($query))
        {
            $stmt->bind_param("s",$school);
            if($stmt->execute())
            {
                //done
            }
            else
            {
                $json['response']['status'] = "error";
                $json['response']['message'] = "Common school registration error code 3: ".$conn->error;
            }
        }
        else
        {
            $json['response']['status'] = "error";
            $json['response']['message'] = "Common school registration error code 4: ".$conn->error;
        }
    }
}
// ---------------- register common school end ---------------//


echo json_encode($json);
?>
