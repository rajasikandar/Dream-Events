<?php
$servername = "localhost";
$username = "username";

// Create connection

$conn = mysqli_connect("localhost","root","","dream_events");

// Check connection
// if ($conn->connect_error) {
    // die("Connection failed: " . $conn->connect_error);
 // } 
 // echo "Connected successfully";

// define variables and set to empty values
if(isset($_POST['submit']))
{
$Name =	($_POST['Name']);
$Email =($_POST['Email']);
$Subject =($_POST['Subject']);
$Comment =($_POST['Comment']);
$sql="INSERT INTO dream_events(Name,Email,Subject,Comment) VALUES('$Name','$Email','$Subject','$Comment')";
$result = mysqli_query($conn,$sql);}

if($result)
{
	echo "Message Sent";
}
	//refresh ho jay do sec k bad wapis index.html pe a jay
header("refresh:2;url=index.php");
?>
