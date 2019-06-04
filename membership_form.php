<?php 
session_start();
include_once ("config.php");

?>

<?php
if (isset($_POST['name'],$_POST['email'],$_POST['address'],$_POST['phone'],$_POST['meal_plan']))
{
$name = $conn->real_escape_string($_POST['name']);
$email = $conn->real_escape_string($_POST['email']);
$address = $conn->real_escape_string($_POST['address']);
$phone = $conn->real_escape_string($_POST['phone']);
$meal_plan= $conn->real_escape_string($_POST['meal_plan']);
$sql="INSERT INTO order (name, email, address,phone, meal_plan) VALUES ('$name','$email', '$address',$phone', '$meal_plan')";




if ($conn ->query($sql)) {
    header('Location: success.php');

}



else{

    die("Couldn't enter data");
    

}
$conn->close();
}


?>