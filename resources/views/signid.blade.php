<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>S-Lucy Website</title>

    <!-- Custom fonts for this template-->
    <link href="fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
        <link href="css/switch.css" rel="stylesheet"/>
    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <style>
        html,
 
         body {
             margin: 0;
             background: linear-gradient(45deg, #0a002c, #0a002c,#0a002c , #5f2c82);
             font-family: 'Poppins', sans-serif;
             font-weight: 100;
         }
         .container {
             position: absolute;
             top: 45%;
             left: 75%;
             transform: translate(-50%, -50%);
         }
 
         table {
             width: 500px;
             border-collapse: collapse;
             overflow: hidden;
             box-shadow: 0 0 20px rgba(0,0,0,0.1);
             border-radius: 1.5rem ;
         }
 
         th,
         td {
             padding: 15px;
             background-color: rgba(255,255,255,0.2);
             color: #fff;
             text-align: center;
             }
         .td .btn {
             background: linear-gradient (45deg,#0a002c, #0a002c,#0a002c , #5f2c82);
         }
         th {
             text-align: center;
             background: linear-gradient(45deg, #0a002c, #0a002c,#0a002c , #5f2c82)
         }
         tr {background-color: rgba(255,255,255,0.3);}
         .navbar-brand .img-logo{
             width:70px;
             height:70px;
         }
 
         .option{
             width: 290px;
             border-color: #B8F9FF;
             background: transparent;
             border-radius: 2rem;
             color: white;
         }   
     </style>

</head>

<body id="page-top" >

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav sidebar accordion text-white" id="accordionSidebar" style="background: linear-gradient(45deg,#0a002c, #0a002c,#0a002c , #5f2c82) ">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center">
                <div class="sidebar-brand-icon">
                    <img src="img/logo.png" style="width: 75px; height: 75 px;">
                </div>
                <div class="sidebar-brand-text mx-3" style="color: white">S-Lucy
                    <sub>Website</sub>
                </div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" style="color:white" href="{{ route('dashboard')}}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed-expand" style="color:rgb(255, 250, 250);" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Components</span>
                </a>
                <div id="collapseTwo" class="collapse show" style="color:rgb(185, 185, 185);" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="py-2 collapse-inner rounded " style=" background: linear-gradient(45deg, #49a09d, #5f2c82)">
                        <h6 class="collapse-header">Your S-LUCY ID:</h6>
                        <a class="collapse-item" style="color:rgb(255, 255, 255);" href="{{route('registid')}}">
                            <i class="fas fa-fingerprint " style="color: #B1F8FF"></i>
                            Regist ID
                        </a>
                        <a class="collapse-item active disabled " style="color:rgb(255, 255, 255);">
                            <i class="fas fa-fingerprint " style="color: #B1F8FF"></i>
                        Sign ID </a>
                    </div>
                </div>
            </li>

            

            <!-- Divider -->
            <hr class="sidebar-divider">

            

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0 text-light" id="sidebarToggle" style="background: linear-gradient(45deg, #49a09d, #5f2c82) "></button>
            </div>

            <!-- Sidebar Message -->
            <div class="sidebar-card">
                <img class="sidebar-card-illustration mb-2" src="img/undraw_rocket.svg" alt="">
                <p class="text-center mb-2 text-light"><strong>Be strong</strong> With S-Lucy </p>
                
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column" style="background: linear-gradient(45deg, #0a002c, #0a002c,#0a002c , #5f2c82)">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand bg-white topbar mb-4 static-top shadow" style="background: linear-gradient(45deg, #0a002c, #0a002c,#0a002c , #5f2c82) ">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3" style="color: rgb(255, 255, 255)">
                        <i class="fa fa-bars" ></i>
                    </button>


                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">


                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow" >
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
                                <span class="mr-2 d-none d-lg-inline text-light small">User Name</span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown" style="background: linear-gradient (45deg, #49a09d, #5f2c82)">
                                <a class="dropdown-item" href="Profile.php">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="index.html" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="card mb-4" style="overflow: auto; background:transparent; border: transparent;">
                           
                            <!-- Card Body -->
                            <div class="card-body">
                                <table class="table table-hover" style="background: transparent;">
                                    <thead>
                                        <tr style="text-align: center;">
                                            <td>Regist your S-Lucy ID</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        {{-- @foreach (($collection) as $item) --}}
                                        <tr>
                                            <td>
                                                <form>
                                                    <input class="pl-2 pr-2" type="text" id="regist" name="regist" style="  padding:3px 2px ;width:370px; border-color: #B8F9FF; background-color:transparent; border-radius: 2rem; color:white;">
                                                </form>
                                                <a href="dashboard.html" class="btn btn-dark mt-4 mb-1" id="btn-toggle" style="border-radius: 3rem; color: #B8F9FF; border-radius: 3rem; opacity: 70%;"> 
                                                    <i class="fas fa-fingerprint " style="color: #B1F8FF"></i>
                                                    <span>Sign ID</span>
                                                </a>
                                            </td>
                                        </tr>
                                        {{-- @endforeach --}}
                                    </tbody>
                                </table>   
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn text-light" style="background: linear-gradient(45deg, #0a002c, #0a002c,#0a002c , #5f2c82)" href="index.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="jquery/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>


    {{-- Firebase --}}
    <!-- The core Firebase JS SDK is always required and must be listed first -->
    <script src="/__/firebase/8.2.5/firebase-app.js"></script>

    <!-- TODO: Add SDKs for Firebase products that you want to use
        https://firebase.google.com/docs/web/setup#available-libraries -->
    <script src="/__/firebase/8.2.5/firebase-analytics.js"></script>

    <!-- Initialize Firebase -->
    <script src="/__/firebase/init.js"></script>
    <script>

    </script>

</body>

</html>