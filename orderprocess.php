<?php 
include_once ("config.php");

?>

<?php
if (isset($_POST['name'],$_POST['email'],$_POST['address'],$_POST['phone'],$_POST['meal_type']));
{
$name = $conn->real_escape_string($_POST['name']);
$email = $conn->real_escape_string($_POST['email']);
$address = $conn->real_escape_string($_POST['address']);
$phone = $conn->real_escape_string($_POST['phone']);
$meal_type= $conn->real_escape_string($_POST['meal_type']);



$sql="INSERT INTO order_list (name,email,address,phone,meal_type) VALUES ('$name', '$email','$address','$phone','$meal_type')";




if ($conn ->query($sql)) {
    header('Location: t1.php');

}



else{

    die("Couldn't enter data");
    

}
$conn->close();
}


?>