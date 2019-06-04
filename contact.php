<?php 
session_start();
include_once ("config.php");

?>

<?php
if (isset($_POST['name'],$_POST['email'],$_POST['phone'],$_POST['message']))
{
$name = $conn->real_escape_string($_POST['name']);
$email = $conn->real_escape_string($_POST['email']);
$phone = $conn->real_escape_string($_POST['phone']);
$message = $conn->real_escape_string($_POST['message']);
$sql="INSERT INTO contact_us (name, email, phone, message) VALUES ('$name','$email', '$phone', '$message')";




if ($conn ->query($sql)) {
    header('Location: success.php');

}



else{

    die("Couldn't enter data");
    

}
$conn->close();
}


?>