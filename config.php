<?php
/*define constants for connection info
define("MYSQLUSER","username");
define("MYSQLPASS","");
define("HOSTNAME","localhost");
define("MYSQLDB","rasoi");

//make connection to database
function db_connect()
{
	$conn =  mysqli_connect( MYSQLUSER, MYSQLPASS, HOSTNAME, MYSQLDB);
	if($conn -> connect_error) {
		die('Connect Error: ' . $conn -> connect_error);
	}
	return $conn;
}

?>
*/

$servername = "localhost";
$username = "root";
$password = "";
$database = "rasoi";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
?>