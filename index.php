<!DOCTYPE html>
<html>
<head>
	<title></title>
  <!--<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">-->
  <link rel="stylesheet" type="text/css" href="bootstrap-3.4.1-dist/css/bootstrap-theme.css">
  <!-- <link rel="stylesheet" type="text/css" href="bootstrap-3.4.1-dist/css/boostrap.min.css"> -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="carousel.css">
  <link rel="stylesheet" type="text/css" href="fontawesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="mine.css">
  <link rel="stylesheet" href="css/Glyphicons.css">
  
	<style>
    
		*{
			margin: 0px;
			padding: 0px;
		}
		body{
			background-color: #f2f2f2;
		}
    .cards{
      background-image: url(12.jpg);
      background-size: cover;
      background-position: center;
    }
    .subscriber-form{
      background-color: #3a8bcd;
      margin-top: 2%;
      margin: 0px;
      padding: 80px 0px;
      text-align: center;
    }
    .sub :hover{
      background-color: dimgrey;
      color: ghostwhite;
    }
	</style>
</head>
<body>
<?php include("header.php");?>

<main role="main">
	

			<div id="myCarousel" class="carousel slide" data-ride="carousel">
        		<ol class="carousel-indicators">
          			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
         			<li data-target="#myCarousel" data-slide-to="1"></li>
         			<li data-target="#myCarousel" data-slide-to="2"></li>
        		</ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="first-slide img-responsive" src="images/AI.jpg" alt="First slide">
            <div class="container">
              <div class="carousel-caption text-left">
                <h1>Cyber Security.</h1>
                <p>Join the Cyber Security Group and make them say your name during a cyber topic</p>
                <p><a class="btn btn-lg btn-primary" href="Sign-incyb.php" role="button">Sign up today</a></p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="second-slide img-responsive" src="1.jpg" alt="Second slide">
            <div class="container">
              <div class="carousel-caption">
                <h1>Full Stack Development.</h1>
                <p>Engage in the designing of both front end end and back end..You will love it</p>
                <p><a class="btn btn-lg btn-primary" href="Sign-inFull.php" role="button">Learn more</a></p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="second-slide img-responsive" src="2.jpg" alt="Second slide">
            <div class="container">
              <div class="carousel-caption">
                <h1>Artificial Intelligence.</h1>
                <p>Engage in the designing of both front end end and back end..You will love it</p>
                <p><a class="btn btn-lg btn-primary" href="Sign-inAI.php" role="button">Learn more</a></p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="second-slide img-responsive" src="12.jpg" alt="Second slide">
            <div class="container">
              <div class="carousel-caption">
                <h1>Data Science.</h1>
                <p>Engage in the designing of both front end end and back end..You will love it</p>
                <p><a class="btn btn-lg btn-primary" href="Sign-inDat.php" role="button">Learn more</a></p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="second-slide img-responsive" src="images/ipad.jpg" alt="Second slide">
            <div class="container">
              <div class="carousel-caption">
                <h1>Front End Development.</h1>
                <p>Engage in the designing of front end..You will love it</p>
                <p><a class="btn btn-lg btn-primary" href="Sign-inFront.php" role="button">Learn more</a></p>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <img class="third-slide img-responsive" src="images/monitor.jpg" alt="Third slide">
            <div class="container">
              <div class="carousel-caption text-right">
                <h1>Software Engineering.</h1>
                <p>Learn how to develop a deliverable software that is high of quality</p>
                <p><a class="btn btn-lg btn-primary" href="Sign-insoft.php" role="button">Sign up today</a></p>
              </div>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>


        <section class="about-team">
          <div class="about-us">
            <div class="about-intro">
              <h1>About us</h1>
              <hr>
            </div>
          </div>
        </section>
     
 	</main>


<div class="container">
  <div class="row">
    <div class="col-lg-4">
      <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="1.jpg">
        <div class="card-body">
          <h5 class="card-title">Kandy Hamisi</h5>
          <p class="card-text">He is one of the team members, quiet advanced with algorithms. They call him Fibonacci</p>
          <a href="#" class="btn btn-primary">See more...</a>
        </div>
      </div>
    </div>

    <div class="col-lg-4">
      <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="2.jpg">
        <div class="card-body">
          <h5 class="card-title">Kandy Hamisi</h5>
          <p class="card-text">He is one of the team members, quiet advanced with algorithms. They call him Fibonacci</p>
          <a href="#" class="btn btn-primary">See more...</a>
        </div>
      </div>
      
    </div>

    <div class="col-lg-4">
      <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="3.jpg">
        <div class="card-body">
          <h5 class="card-title">Kandy Hamisi</h5>
          <p class="card-text">He is one of the team members, quiet advanced with algorithms. They call him Fibonacci</p>
          <a href="#" class="btn btn-primary">See more...</a>
        </div>
      </div>
      
    </div>
  </div>
</div>
    <div class="subscriber-form">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h3>Subscribe on the community now</h3>
            </div>
          </div>
          <div class="col-md-8 offset-md-2">
            <div class="main-content">
              <p>By subscribing you will get the newsletters to any event that is about to occur via emal.</p>
              <div class="container">
                <form action="Newsletterinsert.php" method="POST">
                  <div class="row">
                    <div class="col-md-4">
                      <fieldset>
                        <input class="form-control" name="uname" type="text" placeholder="Your name...">
                      </fieldset>
                    </div>
                    <div class="col-md-4">
                      <fieldset>
                        <input name="Email" type="email" class="form-control"  placeholder="Your Email...">
                      </fieldset>
                    </div>
                    <div class="col-md-4">
                      <fieldset>
                        <input class="form-control" type="submit" value="Subscribe Now!">
                      </fieldset>
                    </div>
                  </div>
                </form>
              </div>
            </div>

          </div>
        </div>
      </div>

    </div>
  
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div>
            <i class="glyphicon glyphicon-edit"></i>
            <i class="glyphicon glyphicon-th-list"></i>
          </div>
          
        </div>
      </div>
    
    </div>         
    







<script src="Jquery/jquery-3.4.1.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>