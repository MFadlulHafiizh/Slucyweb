<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>S-LUCY Contact</title>

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
      <a class="navbar-brand" style="color: rgb(255, 255, 255)" href="{{route('welcome')}}">S-LUCY</a>
      <a class="btn " style=" color:rgb(255, 255, 255); background: linear-gradient(45deg, #0a002c, #0a002c , #5f2c82); border-radius: 1.5rem; border: transparent;" href="{{ route('login')}}">Sign In</a>
    </div>
  </nav>

  <!-- Masthead -->
  <header class="masthead text-white text-center">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-xl-9 mx-auto">
          <h1 class="mb-5" style="color: rgb(249, 253, 0)"><img src="img/ss.png">
           Contact S-LUCY!</h1>
           <div class="col-xl-2 mx-auto">
            <h6 class="mb-5" style="color: rgb(249, 253, 0)">
                slucyinfo@gmail.com</h6>
           </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Testimonials -->
  <section class="testimonials text-center bg-light" style="background: linear-gradient(45deg, #0a002c, #0a002c,#0a002c , #5f2c82)">
    <div class="container">
      <h2 class=" mb-5" style="color: rgb(255, 255, 255)">Contact Team</h2>
      <div class="row">
        <div class="col-lg-4">
          <div class="testimonial-item mx-auto mb-5 mb-lg-0">
            <img class="img-fluid rounded-circle mb-3" src="img/testimonials-1.jpg" alt="">
            <h5 style="color: rgb(255, 255, 255)">Almyra Rosedyana</h5>
            <p class=" font-weight-light mb-0" style="color: rgb(255, 255, 255)">mail: </p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="testimonial-item mx-auto mb-5 mb-lg-0">
            <img class="img-fluid rounded-circle mb-3" src="img/testimonials-2.jpg" alt="">
            <h5 style="color: rgb(255, 255, 255)">Khoerunnisa Cahya Amalia</h5>
            <p class="font-weight-light mb-0" style="color: rgb(255, 255, 255)">mail: nisachy25@gmail.com</p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="testimonial-item mx-auto mb-5 mb-lg-0">
            <img class="img-fluid rounded-circle mb-3" src="img/testimonials-3.jpg" alt="">
            <h5 style="color: rgb(255, 255, 255)">Lulu Tania</h5>
            <p class="font-weight-light mb-0" style="color: rgb(255, 255, 255)">mail: </p>
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
                <a href="{{ route('regist')}}" type="submit" class="btn text-light btn-lg" style="border-radius: 1.5rem;border: transparent;background: linear-gradient(45deg, #0a002c, #0a002c,#0a002c , #5f2c82)">Sign up!</a>
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
        <div class="col-lg-6 h-100 text-center text-lg-left my-auto"style="color: rgb(255, 255, 255)">
          <ul class="list-inline mb-2" style="color: rgb(255, 255, 255)">
            <li class="list-inline-item" style="color: rgb(255, 255, 255)">
              <a style="color: rgb(255, 255, 255)" href="{{route('about')}}">About</a>
            </li>
            <li class="list-inline-item" style="color: rgb(255, 255, 255)">&sdot;</li>
            <li class="list-inline-item "style="color: rgb(255, 255, 255)">
              <a style="color: rgb(255, 255, 255)">Contact</a>
            </li>
          </ul>
          <span class="small mb-4 mb-lg-0" style="color: rgb(255, 255, 255)">&copy; S-LUCY Website {{Carbon\Carbon::now()->format('l, d F Y')}} . All Rights Reserved.</span>
        </div>
        <div class="col-lg-6 h-100 text-center text-lg-right my-auto" style="color: rgb(255, 255, 255)">
          <ul class="list-inline mb-0" style="color:rgb(255, 255, 255);">
            <li class="list-inline-item mr-3">
              <a href="https://slucyinfo@gmail.com">
                <i class="fas fa-envelope fa-2x fa-fw" style="color: rgb(255, 255, 255)" ></i>
              </a>
            </li>
            <li class="list-inline-item mr-3">
              <a href="https://t.me/slucywebsite">
                <i class="fab fa-telegram fa-2x fa-fw" style="color:rgb(255, 255, 255)";></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <i class="fab fa-instagram fa-2x fa-fw" style="color:rgb(255, 255, 255)";></i>
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
