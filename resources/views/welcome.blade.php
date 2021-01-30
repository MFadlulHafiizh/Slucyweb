<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>S-LUCY landing page</title>

  <!-- Bootstrap core CSS -->
  <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="simple-line-icons/css/simple-line-icons.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template -->
  <link href="css/landing-page.min.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar static-top" style="background: linear-gradient(45deg, #0a002c, #0a002c , #5f2c82)">
    <div class="container">
      <a class="navbar-brand text-light" href="#">S-LUCY</a>
      <a class="btn text-light" style="background: linear-gradient(45deg, #0a002c, #0a002c , #5f2c82); border-radius: 1.5rem; border: transparent;" href="{{ route('login')}}">Sign In</a>
    </div>
  </nav>

  <!-- Masthead -->
  <header class="masthead text-white text-center">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-xl-9 mx-auto">
          <h1 class="mb-5 text-warning"><img src="img/ss.png">
            Welcome, this is S-LUCY!</h1>
        </div>
        <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
          <form>
            <div class="form-row">
              <div class="col-12 col-md-9 mb-2 mb-md-0">
                <input type="email" class="form-control form-control-lg" style="opacity: 80% ;border-radius:1.5rem" placeholder="Enter your email...">
              </div>
              <div class="col-12 col-md-3">
                <a href="{{ route('regist')}}" type="submit" class="btn text-light btn-lg" style="border-radius: 1.5rem;border: transparent;background: linear-gradient(45deg,  #0a002c, #0a002c , #5f2c82)">Sign up!</a>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </header>

  <!-- Icons Grid -->
  <section class="features-icons bg-light text-center" style="background: linear-gradient(45deg,  #0a002c, #0a002c , #5f2c82">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
            <div class="features-icons-icon d-flex">
              <i class="fas fa-braille m-auto text-light"></i>
            </div>
            <h3 class="text-light">Smart Plug</h3>
            <p class=" text-light lead mb-0">This Plug will look great, so cool! control and set by you</p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
            <div class="features-icons-icon d-flex">
              <i class="icon-layers m-auto text-light"></i>
            </div>
            <h3 class="text-light">Smart Switch</h3>
            <p class="lead mb-0 text-light">You can also control and set timer</p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="features-icons-item mx-auto mb-0 mb-lg-3">
            <div class="features-icons-icon d-flex">
              <i class="icon-check m-auto text-light"></i>
            </div>
            <h3 class="text-light">Easy to Use</h3>
            <p class=" text-light lead mb-0">Ready to use , or customize the S-Lucy!</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Image Showcases -->
  <section class="showcase" style="background: linear-gradient(45deg, #0a002c, #0a002c , #5f2c82)">
    <div class="container-fluid p-0">
      <div class="row no-gutters">

        <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('img/smartplug.jpg');"></div>
        <div class="col-lg-6 order-lg-1 my-auto showcase-text">
          <h2 class="text-light">Smart Plug</h2>
          <p class="text-light lead mb-0">When you use a plug, you know that that will look great!</p>
        </div>
      </div>
      <div class="row no-gutters">
        <div class="col-lg-6 text-white showcase-img" style="background-image: url('img/smartfitting.jpeg');"></div>
        <div class="col-lg-6 my-auto showcase-text">
          <h2 class="text-light">Smart Switch</h2>
          <p class=" text-light lead mb-0">Newly improved because this is Fitting Lamp, and full of great utility classes, This Is Smart Switch! </p>
        </div>
      </div>
      <div class="row no-gutters">
        <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('img/bg-new.jpg');"></div>
        <div class="col-lg-6 order-lg-1 my-auto showcase-text">
          <h2 class="text-light">Easy to Use &amp; Customize</h2>
          <p class="text-light lead mb-0">Beautiful Design easy to understand!</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Testimonials -->
  <section class="testimonials text-center bg-light" style="background: linear-gradient(45deg, #0a002c, #0a002c,#0a002c , #5f2c82)">
    <div class="container">
      <h2 class="text-light mb-5">People On A Team</h2>
      <div class="row">
        <div class="col-lg-4">
          <div class="testimonial-item mx-auto mb-5 mb-lg-0">
            <img class="img-fluid rounded-circle mb-3" src="img/testimonials-1.jpg" alt="">
            <h5 class="text-light">Almyra Rosedyana</h5>
            <p class="text-light font-weight-light mb-0">"Smart Switch (Fitting Lamp) Builder"</p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="testimonial-item mx-auto mb-5 mb-lg-0">
            <img class="img-fluid rounded-circle mb-3" src="img/testimonials-2.jpg" alt="">
            <h5 class="text-light">Khoerunnisa Cahya Amalia</h5>
            <p class="text-light font-weight-light mb-0">"S-Lucy Website Developer & Design"</p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="testimonial-item mx-auto mb-5 mb-lg-0">
            <img class="img-fluid rounded-circle mb-3" src="img/testimonials-3.jpg" alt="">
            <h5 class="text-light">Lulu Tania</h5>
            <p class="text-light font-weight-light mb-0">"Smart Plug Builder"</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Call to Action -->
  <section class="call-to-action text-white text-center" style="background: linear-gradient(45deg, #0a002c, #0a002c,#0a002c , #5f2c82)">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-xl-9 mx-auto">
          <h2 class="mb-4">Ready to get started? Sign up now!</h2>
        </div>
        <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
          <form>
            <div class="form-row">
              <div class="col-12 col-md-9 mb-2 mb-md-0">
                <input type="email" class="form-control form-control-lg" style="opacity: 80%; border-radius:1.5rem" placeholder="Enter your email...">
              </div>
              <div class="col-12 col-md-3">
                <a href="register.html" type="submit" class="btn text-light btn-lg" style="border-radius: 1.5rem;border: transparent;background: linear-gradient(45deg, #0a002c, #0a002c,#0a002c , #5f2c82)">Sign up!</a>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="footer" style="background: linear-gradient(45deg, #0a002c, #0a002c,#0a002c , #5f2c82)">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 h-100 text-center text-lg-left my-auto text-light">
          <ul class="list-inline mb-2 text-light">
            <li class="list-inline-item text-light">
              <a class="text-light" href="#">About</a>
            </li>
            <li class="list-inline-item text-light">&sdot;</li>
            <li class="list-inline-item text-light">
              <a class="text-light" href="#">Contact</a>
            </li>
            <li class="list-inline-item text-light">&sdot;</li>
            <li class="list-inline-item text-light">
              <a class="text-light" href="#">Terms of Use</a>
            </li>
            <li class="list-inline-item text-light">&sdot;</li>
            <li class="list-inline-item text-light">
              <a class="text-light" href="#">Privacy Policy</a>
            </li>
          </ul>
          <p class="small mb-4 mb-lg-0 text-light">&copy; S-LUCY Website 'year' . All Rights Reserved.</p>
        </div>
        <div class="col-lg-6 h-100 text-center text-lg-right my-auto text-light">
          <ul class="list-inline mb-0 text-light">
            <li class="list-inline-item mr-3">
              <a href="#">
                <i class="fas fa-envelope fa-2x fa-fw text-light"></i>
              </a>
            </li>
            <li class="list-inline-item mr-3 text-light">
              <a href="#">
                <i class="fab fa-telegram fa-2x fa-fw text-light"></i>
              </a>
            </li>
            <li class="list-inline-item text-light">
              <a href="#">
                <i class="fab fa-instagram fa-2x fa-fw text-light"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="jquery/jquery.min.js"></script>
  <script src="bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
