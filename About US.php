<html>
    <head>
        <title>About Us</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="bootstrap-3.4.1-dist/css/bootstrap-theme.css">

    <style>
        /* .banner-bg{
	        text-align: center;
          position: fixed;
          background-image: url(images/banner4.jpg), linear-gradient(rgba(211, 28, 28, 0.5),rgba(0,0,0,0.5));
	        background-position: center;
	        background-size: cover;
          width:100%
        }
        .banner-bg h2{
        	text-transform: uppercase;
	        font-weight: 700;
        	font-size: 48px;
	        padding-top: 20px;
	        margin-bottom: 20px;
	        font-family: 'Spectral', serif;
	        color: #000;
        }
        .banner-bg p{
	        padding: 0px 25%;
	        font-size: 14px;
	        color: #000;
	        font-family: serif;
        }
        .banner img{
          padding-top: 5%;
          width: 100%;
          max-height: 262px;

        }
        .lady{
          height: 292px;
          width: 292px;
          position: absolute;
          top: 40%;

        } */
        .banner{
          position: absolute;
          top: 10%;
          text-align: center;

        }
        *{
          margin: 0px;
          padding:0px;
        }
.name h2{
	text-transform: uppercase;
	font-weight: 700;
	font-size: 48px;
	padding-top: 10%;
	margin-bottom: 20px;
	font-family: 'Spectral', serif;
	color: #fff;
}
.name p{
  text-align: center;
	padding: 0px 25%;
	font-size: 14px;
	color: #fff;
	font-family: serif;
}
.banner-bg{
  width: 100%;
  background-image:  url(images/banner-2.jpg), linear-gradient(rgba(211, 28, 28, 0.5),rgba(0,0,0,0.5));
	height: 260px;
	background-position: center;
  background-size: cover;
}
.lady{
  height: 300px;
  width: 300px;
}
.info ul{
  list-style-type: none;
  float: left;
}
.leaders{
  background-color: cadetblue;
}
.leaders img{
  height: 150px;
  width: 150px;
  padding: 20px;
}
.leaders h5{
  text-align: center;
  padding-bottom: 10px;
}
.subscriber-form{
      /* background-color: #ebd798; */
      margin: 0px;
      padding: 80px 0px;
      text-align: center;
    }
.bottom{
  background-color: cadetblue;
  color: black;
}
.bottom p{
  padding-top: 30px;
}
    </style>
    </head>
    <body>
  
    <header>
            <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
          <a class="navbar-brand" href="index.php">MKU.Hackathon Community</a>
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
            </ul>
            <form class="form-inline mt-2 mt-md-0">
              <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
          </div>
        </nav>
  
  </header>
    



<div class="banner-bg">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
                <section class="banner">
                  <div class="name">
                    <h2>About Us</h2>
                    <p>We are glad that you chose us  as your well serving Hotel. We look forward to offer you better services. We Serve Best</p>
                  </div>
                </section>
      </div>
    </div>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-lg-7">
      <h1>The information</h1>
      <div class="info">
        <p>This is a community based in Mount Kenya University - Thika<br>an it aims at nurturing information technology skills.</p>
        <p>It just started as a python learning platform but we further<br>decided that everyone requires skills on other fields<br>in IT rather than learning a single language.</p>
        <p>In the communnity individuals tend to choose not more than<br>three study fields where they can nurture their skills.</p>
        <p>The fields include;</p>
        <ul>
          <li>Cyber Security</li>
          <li>Software Engineering</li>
          <li>Data Science</li>
          <li>Full Stack development</li>
          <li>Front-end development</li>
        </ul>
      </div>
    </div>
    <div col-lg-5>
      <img class="img-responsive lady" src="lady.svg">
    </div>
  </div>
</div>

<section class="leaders">
  <div class="container">
    <div class="row justify-content-center">
      <div col-lg-12 align="center">
        <h1>The Leaders</h1>
      </div>
    </div>
  </div>
<div class="container">
  <div class="row">
    <div class="col-lg-2">
      <img class="rounded-circle" src="1.jpg">
      <h5>The Founder</h5>
    </div>
    <div class="col-lg-2">
      <img class="rounded-circle" src="1.jpg">
      <h5>The Chairman</h5>
    </div>
    <div class="col-lg-2">
      <img class="rounded-circle" src="1.jpg">
      <h5>The Treasurer</h5>
    </div>
    <div class="col-lg-2">
      <img class="rounded-circle" src="1.jpg">
      <h5>G.Leader</h5>
    </div>
    <div class="col-lg-2">
      <img class="rounded-circle" src="1.jpg">
      <h5>G.Leader</h5>
    </div>
    <div class="col-lg-2">
      <img class="rounded-circle" src="1.jpg">
      <h5>G.Leader</h5>
    </div>
  </div>
</div>
</section>

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
            <form id="subscribe" action="Newsletterinsert.php" method="POST">
              <div class="row">
                <div class="col-md-4">
                  <fieldset>
                    <input id="email" class="form-control" name="email" type="text" placeholder="Your Email...">
                  </fieldset>
                </div>
                <div class="col-md-4">
                  <fieldset>
                    <input type="text" class="form-control" name="name" placeholder="Your name...">
                  </fieldset>
                </div>
                <div class="col-md-4">
                  <fieldset>
                    <button id="form-submit" class="btn btn-default sub">Subcribe Now!</button>
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

<div class="bottom">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-12">
        <p>Copyright</p>
      </div>
    </div>
  </div>
</div>
    </body>
</html>