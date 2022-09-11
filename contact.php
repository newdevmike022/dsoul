<?php


if ($_POST['submit']) {
	
	if (!$_POST['name']) {
		$error="<br/>- Please enter your name";
	}
	
	if (!$_POST['email']) {
		$error.="<br/>- Please enter your email";
	}
	
	if (!$_POST['message']) {
		$error.="<br/>- Please enter a message";
	}
	
	if (!$_POST['check']) {
		$error.="<br/>- Please confirm you are human";
	}
	
	if ($error) {
		$results='<div class="alert alert-danger" role="alert"><strong>Sorry, there is an error.</strong> Please correct the following: '.$error.' </div';
	} else {
		mail("mike@dominicansoul.com", "Contact message", "Name: ".$_POST['name'].
			"Email: ".$_POST['email'].
			"Message: ".$_POST['message']);
		{
		$results='<div class="alert alert-success" role="alert"><stron>Thank you! We will get back in touch with you shortly.</div>';
		}
	}
}
		   

?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-122672118-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag() {
        dataLayer.push(arguments);
      }
      gtag("js", new Date());
      gtag("config", "UA-122672118-1");
    </script>
    <!-- End Google Analytics -->

    <meta charset="utf-8" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <!-- font-awesome -->
    <link rel="stylesheet" href="./fontawesome-free-5.12.1-web/css/all.min.css" />
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <link rel="stylesheet" href="/sass/main.css" />
    <link rel="shortcut icon" href="/images/favicon_1.ico" type="image/x-icon" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Us</title>

        <!-- Google -->
        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <script>
        (adsbygoogle = window.adsbygoogle || []).push({
          google_ad_client: "ca-pub-4644631320500811",
          enable_page_level_ads: true
        });
        </script>
        <!-- End Google -->

        <style>
          #contact {
            padding: 40px 0;
            color: #140660;
            margin-top: 6rem;
          }

          #contact .btn-default {
            border: 1px solid #f9d902;
            background-color: #f9d902;
            border-radius: 0;
          }

          #contact .btn-default:hover {
            color: #f9d902;
            background-color: #140660;
          }

          .row {
            text-align: center;
          }

          form {
            max-width: 80%;
            margin-left: auto;
            margin-right: auto;
          }

          .welcome {
            color: #020f84;
            font-family: Cabin;
            font-size: 2.5rem;
            font-weight: 700;
            letter-spacing: 10px;
            text-align: center;
            text-transform: uppercase;
            margin-bottom: 30px;
          }
        </style>
    
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <a class="navbar-brand" href="index.html"><img src="/images/dsoul_logo_5.png"  alt="Dominican Soul"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Attractions
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="fun.html">family fun</a>
              <a class="dropdown-item" href="golf.html">golf courses</a>
              <a class="dropdown-item" href="landmarks_museums.html">landmarks/museums</a>
              <a class="dropdown-item" href="tours.html">tours/excursions</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Dining
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="bakeries.html">bakeries</a>
              <a class="dropdown-item" href="casual.html">casual</a>
              <a class="dropdown-item" href="fast.html">fast food</a>
              <a class="dropdown-item" href="fine.html">fine dining</a>
              <a class="dropdown-item" href="icecream.html">ice cream</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Lifestyle
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="cuisine.html">cuisine</a>
              <a class="dropdown-item" href="culture.html">culture</a>
              <a class="dropdown-item" href="videos.html">videos</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Resorts
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="cabarete.html">cabarete</a>
              <a class="dropdown-item" href="puerto_plata.html">puerto plata</a>
              <a class="dropdown-item" href="sosua.html">sosua</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Shopping
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="attire.html">clothing/accessories</a>
              <a class="dropdown-item" href="spa.html">day spas</a>
              <a class="dropdown-item" href="pharmacy.html">pharmacies</a>
              <a class="dropdown-item" href="groceries.html">supermarkets</a>
              <a class="dropdown-item" href="taxi.html">transportation</a>
            </div>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" style="font-family: FontAwesome;"  type="search" placeholder="&#xf002" aria-label="Search" />
        </form>
      </div>
    </nav>
            
    
    <div class="container">
      <section id="contact">
      
        <div class="row row-cols-1 row-cols-md-1">
          <h1 class="welcome">Contact Us</h1> 
          <div class="col">
            <?php echo $results;?>
            <p class="text-center"><strong>Questions and comments are welcome. mike@dominicansoul.com</strong></p>
            <form method="post" role="form">
              <div class="form-group">
	              <input type="text" name="name" class="form-control" placeholder="Your Name" value="<?php $_POST['name']; ?>">
              </div>

              <div class="form-group">
		            <input type="email" name="email" class="form-control" placeholder="Your Email" value="<?php echo $_POST['email']; ?>">
	            </div>

              <div class="form-group">
	              <textarea name="message" rows="8" class="form-control" placeholder="Message..."><?php echo $_POST['message']; ?></textarea>
              </div>

              <div class="checkbox">
	              <label>
		              <input type="checkbox" name="check"> I am human
	              </label>
              </div>

              <div align="center">
	              <input type="submit" name="submit" class="btn btn-default" value="send message"/>
              </div>

            </form>
          </div>                                
        </div>
        
      </section>    
                  
        <div class="also puerto">
          <div>
            <h1>you may also like:</h1>
          </div>
          <div class="row row-cols-1 row-cols-md-3">
            <div class="col mb-4">
              <div class="card also-info">
                <a href="bucket_list.html"><img src="./images/10_Things_4.jpg" class="card-img-top" alt="Things To Do In Puerto Plata"></a>
                <h4><a href="bucket_list.html">PUERTO PLATA'S<br>
                 BUDGET FRIENDLY 10</a></h4>
              </div>
            </div>
            <div class="col mb-4">
              <div class="card also-info">
                <a href="morir_sonando.html"><img src="./images/morir_4.jpg" class="card-img-top" alt="Morir Sonando Recipe"></a>
                <h4><a href="morir_sonando.html">MORIR SONANDO<br>
                  "TO DIE DREAMING"</a></h4>
              </div>
            </div>
            <div class="col mb-4">
              <div class="card also-info">
                <a href="ghaffar.html"><img src="./images/ghaffar.jpg" class="card-img-top" alt="Photography In Puerto Plata"></a>
                <h4><a href="ghaffar.html">THE PASSION<br>
                  OF GHAFFAR</a></h4>
              </div>
            </div>
          </div>
        </div>
      </div>  

    <!-- footer -->
    <footer>
      <div class="social-icons">
        <a href="https://www.facebook.com/DRgotsoul" class="social-icon"><i class="fab fa-facebook hvr-float"></i></a>
        <a href="https://twitter.com/DRgotsoul" class="social-icon"><i class="fab fa-twitter-square"></i></a>
        <a href="https://www.pinterest.com/DRgotsoul/" class="social-icon"><i class="fab fa-pinterest"></i></a>
        <a href="https://www.youtube.com/channel/UCosB2u6GhOS_gZrnd7hVJ2w" class="social-icon"><i class="fab fa-youtube"></i></a>
        <a href="contact.php" class="social-icon"><i class="fas fa-envelope"></i></a>
      </div>
      &copy; <span class="name">&nbsp;DOMINICAN&nbsp;&nbsp;SOUL&nbsp;</span> <span id="date"></span>.&nbsp; All&nbsp;&nbsp;Rights&nbsp;&nbsp;Reserved.
    </footer>
    <!-- end footer -->
    <script src="./js/date.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
  </body>
</html>
