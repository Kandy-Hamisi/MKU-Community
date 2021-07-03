<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
// if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
//     header("location: Kandylogin.php");
//     exit;
// }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="bootstrap-3.4.1-dist/css/bootstrap-theme.css">
  <link rel="stylesheet" type="text/css" href="bootstrap-3.4.1-dist/css/boostrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
 
    <title>MKU Coding Community</title>
</head>
<body>
<header>
	      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="Home.php">MKU.Hackathon Community</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="About US.php">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Contact Us.php">Contact Us</a>
            </li>
            <li class="nav-item">
            	<a class="nav-link" href="Learn More.php">Learn more</a>
            </li>
            <li class="nav-item">
              <a style="color:red;" class="nav-link disabled" href=""><?php echo htmlspecialchars($_SESSION["username"]); ?></a>
            </li>
          </ul>
          <span style="padding-right:10px;"><a href="reset-password.php" class="btn btn-warning">Reset Your Password</a></span>
          <span><a href="Home.php" class="btn btn-success">Sign Out of Your Account</a></span>
        </div>
      </nav>

</header>

</body>
</html>