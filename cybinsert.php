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


$First_name = $_POST['f-name'];
$Second_name = $_POST['s-name'];
$Email = $_POST['email'];
$Phone_number = $_POST['phone'];




$sql = "INSERT INTO Cyber_Security(First_name, Second_name, Email, Phone_number) VALUES('$First_name', '$Second_name', '$Email', '$Phone_number')";

if (!mysqli_query($conn,$sql)) {
	echo "Not inserted";
	# code...
}else{
	echo "Inserted";
}

// header("refresh:2;url=index.html");

?>