<?php
session_start();

$conn = mysqli_connect('localhost','root','password');

if (!$conn) {
	echo "Not Connected To Server";
	# code...
}
if (!mysqli_select_db($conn,'Hackathon1')) {
	echo 'Database Not Selected';
	# code...
}


$name = $_POST['uname'];
$Email = $_POST['Email'];





$sql = "INSERT INTO Newsletters(Username,Email) VALUES('$name','$Email')";

if (!mysqli_query($conn,$sql)) {
	echo "Not inserted";
	# code...
}else{
	echo "Inserted";
}

// header("refresh:2;url=index.html");

?>