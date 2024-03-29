<?php $pageTitle = 'Christian Web Developer | Home'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-147536494-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-147536494-1');
</script>

  <title><?php echo $pageTitle; ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="title" content="Christian Web Developer">
  <meta name="description"
    content="The website of William H. Hall III, christian web developer. Offering web design and development services at very reasonable and affordable prices.">
  <meta name="keywords"
    content="web design, web development, christian, tucson, az, SEO, christian web developers, application development, 
    mobile friendly, cutting edge design, consulting services, database management, web, websites, 
    full stack developer,church website design, christian website design, christian web hosting, church web developer,
    church web designer, affordable church websites, christian domains">
  <meta name="robots" content="index, follow">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta name="language" content="English">
  <meta name="author" content="William H. Hall III"> 
  <link rel="stylesheet" type="text/css" href="css/reset.css">
  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/small-business.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/main.css">
  <meta name="google-site-verification" content="d2YPrvO7UWcFOaN-J7W9lAPgcjgBJRRfeAED9VHP0Gk" />
</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top navbar-collapse">
    <div class="container">
        <img src="images/logo.png">
      <a class="navbar-brand" href="index.html"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
        aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active current">
            <a class="nav-link current" href="index.html">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="about.html">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="services.html">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="faq.html">FAQ</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.html">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  <div class="container">

    <!-- Heading Row -->
    <div class="row align-items-center my-5">
      <div class="col-lg-7">
        <img class="img-fluid rounded mb-4 mb-lg-0" src="images/red_rocks_header.jpg" alt="Sedona's Coffee Pot Rock">
        
      </div>
      <!-- /.col-lg-8 -->
      <div class="col-lg-5">
        <h1 class="font-weight-light">Christian Web Developer</h1>
        <p>
          Welcome to the website of a Christian web designer and developer in Tucson, Arizona. Are you in need of a website or 
          app for yourself or your church? Or maybe you have questions and need to talk to someone about how to go about 
          building a site on your own? Either way, you've come to the right place.
        </p>
        <a class="btn btn-primary" href="contact.html">Sign up for my newsletter!</a>
      </div>
      <!-- /.col-md-4 -->
    </div>
    <!-- /.row -->

    <!-- Call to Action Well -->
    <div class="card text-white bg-secondary my-5 py-4 text-center">
      <div class="card-body call">
        <p class="call">Are you in charge of your Church's IT needs, but don't really know what you are doing?
          Let me help for FREE!</p>
      </div>
    </div>

    <!-- Content Row -->
    <div class="row">
      <div class="col-md-4 mb-5">
        <div class="card h-100 index">
          <div class="card-body">
            <h2 class="card-title project">Current Project 1</h2>
            <a href="https://flyboy85749.github.io/unit-4-game/"><img class="home-page" src="images/crystals_thumb.png" alt="collect the crystals game screenshot"></a>
            <p class="card-text">This is a simple challenge game, created with javascript and jquery. The object is to click on the displayed crystals (each has a random value), and try to match the Random Number displayed at the top of the page.
            </p>
          </div>
          <!-- <div class="card-footer">
            <a href="#" class="btn btn-primary btn-sm">More Info</a>
          </div> -->
        </div>
      </div>
      <!-- /.col-md-4 -->
      <div class="col-md-4 mb-5">
        <div class="card h-100 index">
          <div class="card-body">
            <h2 class="card-title project">Current Project 2</h2>
            <a href="https://flyboy85749.github.io/Giphy"><img class="home-page" src="images/giphy.png" alt="Giphy API screenshot"></a>
            <p class="card-text">This project pulls gifs from the Giphy API, and when you click on an existing button, or create your own, it displays
			ten images in that category. Then, if you click on an image, it will animate. Built with javascript and jquery, with html, css, and a bootstrap
			driven design.
            </p>
          </div>
          <!-- <div class="card-footer">
            <a href="#" class="btn btn-primary btn-sm">More Info</a>
          </div> -->
        </div>
      </div>
      <!-- /.col-md-4 -->
      <div class="col-md-4 mb-5">
        <div class="card h-100 index">
          <div class="card-body">
            <h2 class="card-title project">Current Project 3</h2>
            <a href="https://flyboy85749.github.io/practice/"><img class="home-page" src="images/mad_lib.png" alt="mad lib game screenshot"></a>
            <p class="card-text">This is a mad lib, built with javscript, based on the life of Steve Jobs. It randomly replaces the bold words by pulling them from arrays of values.</p>
          </div>
          <!-- <div class="card-footer">
            <a href="#" class="btn btn-primary btn-sm">More Info</a>
          </div> -->
        </div>
      </div>
      <!-- /.col-md-4 -->

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center footer">Copyright &copy; Christian Web Developer 2019</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="javascript/main.js"></script>
</body>

</html>