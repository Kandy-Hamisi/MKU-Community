<?php
$conn = mysqli_connect("localhost","root","password","Hackathon1");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

// $id=$_REQUEST['id'];

if (isset($_POST['id'])) {
    $delete_id = $_POST['id'];
    # code...
}
$query = "DELETE FROM users WHERE id='$delete_id'"; 
$result = mysqli_query($conn,$query);

if($result){  
     echo "Record deleted successfully";  
    }else{  
    echo "Could not delete record: ". mysqli_error($conn);  
    }  
      

//  header("location: members.php"); 
?>