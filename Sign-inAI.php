<?php include("header.php"); ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>SOftware Engineering Sign in</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="bootstrap-3.4.1-dist/css/bootstrap-theme.css">


    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
    <style>
      body{
        background-color: #ebd798;
      }
    </style>
  </head>

  <body class="text-center">






    <form class="form-signin" action="AIinsert.php" method="POST">
      <img class="mb-4" src="images/person.jpg" alt="" width="72" height="72">
      <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
      <label for="inputFname" class="sr-only">First Name</label>
      <input type="text" id="inputFname" name="f-name" class="form-control" placeholder="First Name" required autofocus> 
      <label for="inputSname" class="sr-only">Second Name</label>
      <input type="text" id="inputSname" name="s-name" class="form-control" placeholder="Second Name" required autofocus> 
      <label for="inputEmail" class="sr-only">Email address</label>
      <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email address" required>
      <label for="inputPhone" class="sr-only">Phone Number</label>
      <input type="phone" id="inputPhone" name="phone" class="form-control" placeholder="Phone Number" required>
      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Remember me
        </label>
      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>
    </form>


    
  </body>
</html>
