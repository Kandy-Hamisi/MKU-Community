<html>
    <head>
        <title>Contact Us</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="bootstrap-3.4.1-dist/css/bootstrap-theme.css">
    
        <style>
            *{
                margin: 0px;
                padding: 0px;
            }
            body{
                background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url(images/ipad.jpg);
                background-position: center;
                background-size: cover;
                height: 120vh;
                background-repeat: no-repeat;
            }
            .heading{
                padding-top: 5%;
                text-align: center;
                color: #ffffff;
                font-weight: 700;
                font-size: 48px;
            }
            fieldset  input{
                margin: 3% 0%;
                opacity: 0.8;
            }
            fieldset textarea{
                margin: 3% 0%;
                opacity: 0.8;
            }
            fieldset button{
                margin: 3% 0%;
                opacity: 0.8;
            }
            .contact-info{
                color: #fff;
            }
            .contact-info h2{
                color: #000;
            }
            .subscriber-form{
                 background-color: #ebd798;
                 margin: 0px;
                 padding: 80px 0px;
                 text-align: center;
            }
            .bottom{
  /* background-color: cadetblue; */
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
  
<div class="heading">
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <h1>Contact Us</h1>
              </div>
          </div>
      </div>
  </div>

<div>
      <div class="container">
          <div class="row">
            <div class="col-md-6">
                <div class="section-heading">
                    <h2>Message</h2>
                </div>
                <form action="" role="form">
                    <div class="row">
                        <div class="col-md-6">
                            <fieldset>
                                <input id="name" class="form-control" name="name" placeholder="Your name..." type="text">
                            </fieldset>
                            <fieldset>
                                <input id="email" class="form-control" name="email" type="text" placeholder="Your email...">
                            </fieldset>
                            <fieldset>
                                <input id="phone" class="form-control" name="phone" type="text" placeholder="Your phone...">
                            </fieldset>
                        </div>
                        <div class="col-md-6">
                            <fieldset>
                                <textarea id="message" class="form-control" name="message" rows="6" placeholder="Your message..."></textarea>
                            </fieldset>
                            <fieldset>
                                <button id="form-submit" class="btn btn-primary" type="submit">Send Message</button>
                            </fieldset>
                        </div>
                    </div>
                </form>
            </div>

            <div class="col-md-6">
                <div class="contact-info">
                    <h2>Contact Info</h2>
                    <p>The message that you will communicate to us will be reviewed and a feedback will be sent back to your email address or to your phone number to ensure that the feedback gets back to you as you wanted. We will appreciate if you bring out any complaints about our community and any changes that you suggest to be made in the obtaining of information.</p><br><br>
                    <em>
                        Mount Kenya University General Kago Road
                        <br>
                        Thika 01000
                    </em>
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
              <form id="subscribe" action="Newsletterinsert.php" method="POST">
                <div class="row">
                  <div class="col-md-4">
                    <fieldset>
                    <input type="text" class="form-control" name="name" placeholder="Your name...">
                    </fieldset>
                  </div>
                  <div class="col-md-4">
                    <fieldset>
                      
                      <input id="email" class="form-control" name="email" type="text" placeholder="Your Email...">
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