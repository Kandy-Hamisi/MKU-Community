<?php
        $server = "localhost";
        $user = "root";
        $pass = "password";
        $db = "Hackathon1";
        
        $conn = mysqli_connect($sever,$user,$pass,$db);
        if($conn === false){
            die("ERROR: Could not connect. ". mysqli_connect_error());
        }        

// session_start();
// if(!isset($_SESSION["username"])){
// header("Location: login.php");
// exit(); }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome/css/font-awesome.min.css">
    <title>Document</title>
</head>
<body>
    <?php include("Dashboard.php"); ?>


    <table>

<?php

    $conn = mysqli_connect("localhost","root","password","Hackathon1");
    if (!$conn) {
        die("Connection Failed:");
        # code...
   
    }
    $sql = "SELECT username, password FROM Admins;";
    
    $result = mysqli_query($conn,$sql);
    ?>

    <?php
        if (mysqli_num_rows($result) > 0) {
            
    ?>
    <table class="table table-hover" width="100%">
    <tr>
    <td>S.No</td>
    <td>Username</td>
    <td>Password</td>
    <td>Modify</td>
    <td>Remove</td>
    </tr>

    <?php
        $i=1;
        while ($row = mysqli_fetch_assoc($result)) {
    
    
    ?>
    <tr>
        <td><?php echo $i ?></td>
        <td><?php echo $row["username"]; ?></td>
        <td><?php echo $row["password"]; ?></td>
        <td align="center"><a href="edit.php?id=<?php echo $row["id"]; ?>"><i class="fa fa-edit"></i>Edit</a></td>
        <td align="center"><a href="admindel.php?delete=<?php echo $row["id"]; ?>" onclick="return confirm('Are you sure!')">Delete</a></td>
        
       
    </tr>
    
    <?php
        $i++;
        }
       
    ?>

    </table>

    <?php
        }
    else {
        echo "No result found";
    }
    ?>
</body>
</html>