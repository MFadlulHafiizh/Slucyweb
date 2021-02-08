<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>S-LUCY landing page</title>

  <!-- Bootstrap core CSS -->
  <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="simple-line-icons/css/simple-line-icons.css" rel="stylesheet" type="text/css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/landing-page.min.css" rel="stylesheet">
   <!-- Custom styles for this template-->
   <link href="css/sb-admin-2.min.css" rel="stylesheet">
   <style>
      #navbar{
          overflow: hidden;
          display: flex;
          padding-left: 10%;
          padding-right: 10%;
          justify-content: space-between;
          box-shadow: 0 0 15px rgba(0, 0, 0, 1.5);
          align-items: center;
          position: fixed;
          left: 0;
          top: 0;
          right: 0;
          z-index: 1;
          transition: 0.3s;
      }
      .btn-custom{
        background: transparent;
        color: white;
        transition: 0.5s;
      }
      .btn-custom:hover{
        background: white;
        color: #5f2c82;
        border-radius: 1.5rem;
        transition: 0.5s;
      }
   </style>

</head>

<body style="font-family: 'Montserrat', sans-serif;">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-md sticky-top" id="navbar">
    <div class="container">
      <a class="navbar-brand" style="color: rgb(255, 255, 255)" href="#">S-LUCY</a>
      @guest
      
          <a class="btn btn-custom" href="{{ route('login') }}">{{ __('Sign in') }}</a>
     
     @else
     
        <a class="btn btn-custom" href="{{ route('home') }}">Home</a>
     
  @endguest
    </div>
  </nav>

  <!-- Masthead -->
  <header class="masthead text-white text-center">
    <div class="overlay"></div>
      <div class="container-fluid.gy-0">
        <div class="row no-gutters">
            <div class="col-md-6 offset-md-6">
              <div class="row no-gutters">
                <div class="col-md-12" >
                  <img src="img/ss.png" class="img-fluid">
                </div>
              </div>
              <div class="row no-gutters pb-5 justify-content-end">
                <div class="col-md-12">
                  <h2 class="mb-5" style="text-shadow: 2px 2px 8px white; color: white; font-family: 'Montserrat', sans-serif;">
                    Welcome, this is S-LUCY!
                  </h2>
              </div>
              <div class="row no-gutters pb-5 justify-content-end">
                <div class="col-md-12">
                  <p class="mb-5 pl-5 pr-5" style="text-shadow: 1px 1px 5px white ; color: white; font-family: 'Montserrat', sans-serif; text-align:justify;">
                    Smart Switch (which is actually a light fixture) and the smart plug who named S-LUCY will be controlled by the S-LUCY website.
                    What can this website do? the first we can set  <i class="fas fa-power-off ml-2 mr-2"></i>  On / Off also we can set <i class="fas fa-hourglass-half ml-2 mr-2"></i> the time to control the two tools through this website.
                    This project was created in order to fulfill one of the graduate requirements to complete the Telecommunication Engineering Study Program.
                  </p>
              </div>
            </div>
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
              <i class="fas fa-braille m-auto" style="color: rgb(255, 255, 255)"></i>
            </div>
            <h3 style="color: rgb(255, 255, 255)">Smart Plug</h3>
            <p class="lead mb-0" style="color: rgb(255, 255, 255)">This Plug will look great, so cool! control and set by you</p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
            <div class="features-icons-icon d-flex">
              <i class="icon-layers m-auto" style="color: rgb(255, 255, 255)"></i>
            </div>
            <h3 style="color: rgb(255, 255, 255)">Smart Switch</h3>
            <p class="lead mb-0" style="color: rgb(255, 255, 255)">You can also control and set timer</p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="features-icons-item mx-auto mb-0 mb-lg-3">
            <div class="features-icons-icon d-flex">
               <i class="fas fa-globe-asia m-auto" style="color: rgb(255, 255, 255)"></i>
              </div>
              <h3 style="color: rgb(255, 255, 255)">S-LUCY Website</h3>
            <p class="lead mb-0" style="color: rgb(255, 255, 255)">Ready to use , or customize the S-Lucy!</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Image Showcases -->
  <section class="showcase" style="background: linear-gradient(45deg, #0a002c, #0a002c , #5f2c82)">
    <div class="container-fluid p-0">
      <div class="row no-gutters">

        <div class="col-lg-6 order-lg-2 text-white showcase-img">
          <img src="img/smartplug.png" class="img-fluid w-100 justify-content-center">
        </div>
        <div class="col-lg-6 text-center order-lg-1 my-auto showcase-text">
          <h2 style="color: rgb(255, 255, 255)">Smart Plug</h2>
          <p class="lead mb-0" style="color: rgb(255, 255, 255)">When you use a plug, you know that that will look great!</p>
        </div>
      </div>
      <div class="row no-gutters">
        <div class="col-lg-6 text-white showcase-img">
          <img src="img/smartfitting.png" class="img-fluid w-100 justify-content-center">
        </div>
        <div class="col-lg-6 text-center my-auto showcase-text">
          <h2 style="color: rgb(255, 255, 255)">Smart Switch</h2>
          <p class="lead mb-0 pl-3" style="color: rgb(255, 255, 255)">Newly improved because this is Fitting Lamp, and full of great utility classes, This Is Smart Switch! </p>
        </div>
      </div>
      <div class="row no-gutters">
        <div class="col-lg-6 order-lg-2 text-white showcase-img">
          <img src="img/bg-masthead.png" class="img-fluid w-100 mt-4 mx-auto" style="display: block">
        </div>
        <div class="col-lg-6 text-center order-lg-1 my-auto showcase-text">
          <h2 style="color: rgb(255, 255, 255)">S-LUCY Website </h2>
          <h6 style="color: rgb(255, 255, 255)">Easy to Use &amp; Customize</h6>
          <p class="lead mb-0" style="color: rgb(255, 255, 255)">Beautiful Design easy to understand!</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Testimonials -->
  <section class="testimonials text-center bg-light" style="background: linear-gradient(45deg, #0a002c, #0a002c,#0a002c , #5f2c82)">
    <div class="container">
      <h2 class=" mb-5" style="color: rgb(255, 255, 255)">People On A Team</h2>
      <div class="row">
        <div class="col-lg-4">
          <div class="testimonial-item mx-auto mb-5 mb-lg-0">
            <img class="img-fluid rounded-circle mb-3" src="img/testimonials-1.jpg" alt="">
            <h5 style="color: rgb(255, 255, 255)">Almyra Rosedyana</h5>
            <p class=" font-weight-light mb-0" style="color: rgb(255, 255, 255)">"Smart Switch (Fitting Lamp) Builder"</p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="testimonial-item mx-auto mb-5 mb-lg-0">
            <img class="img-fluid rounded-circle mb-3" src="img/testimonials-2.jpg" alt="">
            <h5 style="color: rgb(255, 255, 255)">Khoerunnisa Cahya Amalia</h5>
            <p class="font-weight-light mb-0" style="color: rgb(255, 255, 255)">"S-Lucy Website Developer & Design"</p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="testimonial-item mx-auto mb-5 mb-lg-0">
            <img class="img-fluid rounded-circle mb-3" src="img/testimonials-3.jpg" alt="">
            <h5 style="color: rgb(255, 255, 255)">Lulu Tania</h5>
            <p class="font-weight-light mb-0" style="color: rgb(255, 255, 255)">"Smart Plug Builder"</p>
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
              <div class="col-12 justify-content-center">
                <a href="{{ route('register')}}" type="submit" class="btn text-light btn-lg" style="border-radius: 1.5rem;border: transparent;background: linear-gradient(45deg, #0a002c,#0a002c , #a798da, #5f2c82)">Sign up!</a>
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
              <span class="small mb-4 mb-lg-0" style="color: rgb(255, 255, 255)"><i class="fab fa-telegram fa-fw mr-2" style="color: rgb(255, 255, 255)"></i><a href="https://t.me/slucywebsite" class="text-light">slucywebsite</a></span>
            </li>
          </ul>
          <ul class="list-inline mb-2" style="color: rgb(255, 255, 255)">
            <li class="list-inline-item" style="color: rgb(255, 255, 255)">
              <span class="small mb-4 mb-lg-0" style="color: rgb(255, 255, 255)"><i class="fas fa-envelope fa-fw mr-2" style="color: rgb(255, 255, 255)" ></i>slucyinfo@gmail.com</span>
            </li>
          </ul>
          <ul class="list-inline mb-2" style="color: rgb(255, 255, 255)">
            <li class="list-inline-item" style="color: rgb(255, 255, 255)">
              <span class="small mb-4 mb-lg-0" style="color: rgb(255, 255, 255)"><i class="fas fa-globe fa-fw mr-2" style="color: rgb(255, 255, 255)" ></i>slucy.com</span>
            </li>
          </ul>
        </div>
        <div class="col-lg-6 h-100 mb-5 pl-5 pr-5 text-center text-lg-right my-auto" style="color: rgb(255, 255, 255)">
          <span class="small ml-4 mb-lg-0" style="color: rgb(255, 255, 255)">
            <i class="fas fa-users fa-fw mr-2"></i> Our Team :</span>
          <ul class="list-inline mb-2" style="color: rgb(255, 255, 255)">
            <li class="list-inline-item" style="color: rgb(255, 255, 255)">
              <span class="small mb-4 mb-lg-0" style="color: rgb(255, 255, 255)"><a href="https://t.me/Khoerunnisaca" class="text-light">Khoerunnisaca <i class="fab fa-telegram fa-fw ml-2" style="color: rgb(255, 255, 255)" ></i></a></span>
            </li>
          </ul>
          <ul class="list-inline mb-2" style="color: rgb(255, 255, 255)">
            <li class="list-inline-item" style="color: rgb(255, 255, 255)">
              <span class="small mb-4 mb-lg-0" style="color: rgb(255, 255, 255)"><a href="https://t.me/lulutania" class="text-light">lulutania</a><i class="fab fa-telegram fa-fw ml-2" style="color: rgb(255, 255, 255)" ></i></span>
            </li>
          </ul>
          <span class="small mb-4 mb-lg-0" style="color: rgb(255, 255, 255)"><a href="https://t.me/almyrarose" class="text-light">almyrarose</a><i class="fab fa-telegram fa-fw ml-2" style="color: rgb(255, 255, 255)" ></i></span>
        </div>
        </div>
        <div class="col-lg-12 mt-3 text-lg-center"style="color: rgb(255, 255, 255)">
          <span class="small mb-lg-0 " style="color: rgb(255, 255, 255)">&copy; S-LUCY Website {{Carbon\Carbon::now()->format('l, d F Y')}} . All Rights Reserved.</span>
        </div>
        </div>
    </div>
  </footer>
  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

   <!-- Bootstrap core JavaScript-->
   <script src="jquery/jquery.min.js"></script>
   <script src="bootstrap/js/bootstrap.bundle.min.js"></script>

   <!-- Core plugin JavaScript-->
   <script src="jquery-easing/jquery.easing.min.js"></script>

   <!-- Custom scripts for all pages-->
   <script src="js/sb-admin-2.min.js"></script>

   <script>

    window.onscroll = function() {scrollFunction()};

    function scrollFunction() {
        if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
            document.getElementById("navbar").style.background = " none";
            document.getElementById("navbar").style.height = "60px";
            document.getElementById("navbar").style.marginTop = "0";
            document.getElementById("navbar").style.boxShadow = "0 0 15px rgba(0, 0, 0, 1)";

        } else {
            document.getElementById("navbar").style.background = "none";
            document.getElementById("navbar").style.boxShadow = "0 0 15px rgba(0, 0, 0, 1.5)";
        }
    }
</script>

</body>

</html>
