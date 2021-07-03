
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="bootstrap-3.4.1-dist/css/bootstrap-theme.css">
    <link rel="stylesheet" href="mine.css">
    
    <style>
        body{
            background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url(images/ipad.jpg);
        }
        input{
            padding: 0px 15px;
        }
    </style>
    
</head>
<body>

<div class="bg title center-side">
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3" align="center">
            <h1>MKU.Hackathon Community</h1>
        </div>
    </div>
</div>
</div>

<div class="container" style="margin-top: 15%;">
	<div class="row justify-content-center">
		<div class="col-md-6 col-md-offset-3" align="center">

			<form name="f" method ="post" action="adminlog1.php" class="orange-border">
				<input class="form-control" type="text" minlength="3" name="name" placeholder="Name..."><br>
                <input class="form-control" type="password" minlength="5" name="password" placeholder="Password"><br>
				<input class="btn btn-primary" type="submit" name="login" value="Login"><br>
			</form>
		</div>
	</div>
	
</div>


</body>
</html>