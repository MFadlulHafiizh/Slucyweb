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
        <script src="https://cdn.tiny.cloud/1/lq7e09nr1zvfkk9rgymrak6zoskkyv2dtna24qw94jhuxh22/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script type="module" src="https://unpkg.com/dark-mode-toggle"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <style>
        .btnRound{
            border-radius: 2rem;
            background: linear-gradient(45deg, #0a002c, #0a002c,#0a002c , #5f2c82 );
            color: white;
        }
    </style>

</head>

<body id="page-top" >
    @if (session('status'))
    <script>
            swal({
                icon: 'info',
                title: 'Produk berhasil ditambahkan!',
            });
    </script>
    @endif
    @if (session('in'))
    <script>
            swal({
                icon: 'info',
                title: 'Status Produk berhasil dimasukan!',
            });
    </script>
    @endif
    @if (session('out'))
    <script>
            swal({
                icon: 'info',
                title: 'Status produk berhasil dikeluarkan!',
            });
    </script>
    @endif
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
                <a class="nav-link" style="color:white" href="{{ route('home') }}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" style="color:rgb(255, 250, 250);" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Components</span>
                </a>
                <div id="collapseTwo" class="collapse " style="color:rgb(185, 185, 185);" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="py-2 collapse-inner rounded " style=" background: linear-gradient(45deg, #49a09d, #5f2c82)">
                        <h6 class="collapse-header">Your S-LUCY ID:</h6>
                        <a class="collapse-item" style="color:rgb(255, 255, 255);" href="{{ route('registid') }}">
                            <i class="fas fa-fingerprint " style="color: #B1F8FF"></i>
                            Regist ID
                        </a>
                        <a class="collapse-item" style="color:rgb(255, 255, 255);" href="{{ route('signid') }}">
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
                                <span class="mr-2 d-none d-lg-inline text-light small">{{ Auth::user()->name }}</span>
                                @if (empty(Auth::user()->foto))
                                <img class="img-profile rounded-circle"
                                src="img/undraw_profile.svg">
                                @else
                                <img class="img-profile rounded-circle"
                                src="{{ Auth::user()->foto }}">
                                @endif
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown" style="background: linear-gradient (45deg, #49a09d, #5f2c82)">
                                <a class="dropdown-item" href="profile">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 " style="color:rgb(255, 255, 255);">Dashboard</h1>
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Switch Product</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $switch }}</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="far fa-sun fa-2x" style="color: #d8d8d8"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Plug Product</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $plug }}</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-plus-square fa-2x" style="color: #d8d8d8"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Content Row -->
                    <div class="row">
                        <div class="col-lg-12 col-lg-7">
                            <div class="card border-left-danger shadow mb-4" style="overflow: auto">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary justify-text-center">Customize S-LUCY</h6>

                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <table class="table table-hover" style="background: transparent;">
                                        <thead>
                                            <tr style="text-align: center;">
                                                <td>No</td>
                                                <td>S-Lucy ID</td>
                                                <td>Product Name</td>
                                                <td colspan="2"><i class="fas fa-hourglass-half mr-2"></i>Set Timer</td>
                                                <td><i class="fas fa-power-off mr-2"></i>Power</td>
                                                <td>Action</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($value as $item)
                                            <tr style="text-align: center;">
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $item->slucy_id }}</td>
                                                <td>{{ $item->product_name }}</td>
                                                <td>{{ $item->timer_set }} - {{ $item->timer_until }}</td>
                                                <td><button class="btn btnRound" type="button" data-toggle="modal" data-target="#modalRepeat">Repeat</button></td>
                                                <td>
                                                    @php
                                                        $pw;
                                                        $bt;
                                                        if ($item->power == "On") {
                                                            $pw = "Off";
                                                            $bt = "btn-danger";
                                                        }
                                                        else {
                                                            $pw = "On";
                                                            $bt = "btn-success";
                                                        }
                                                    @endphp
                                                    <input type="button" value="<?=$pw?>" id="onoff" onclick="onoff();" class="btn <?=$bt?> ">
                                                    <input type="hidden" name="id" value="{{$item->id}}" id="merah">
                                                </td>
                                                <td><form action="/out/{{ $item->id }}" method="POST">
                                                    @method('PUT')
                                                    @csrf
                                                    <button type="submit" class="btn btn-link text-dark" data-container="body" data-trigger="hover" data-toggle="popover" data-placement="left" data-content="Delete Email History?" onclick="return confirm('Apakah anda yakin ingin Mengubah status data ini?')" onclick="showAlert()">Out</button>
                                                </form><td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                      </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <script type="text/javascript">
                        function onoff(){
                          currentvalue = document.getElementById('onoff').value;
                          if(currentvalue == "Off"){
                            var ele = document.getElementById("onoff");
                            ele.value="On";
                            ele.classList.remove("btn-danger");
                            ele.classList.add("btn-success");
                          }else{
                            var ment = document.getElementById("onoff");
                            ment.value="Off";
                            ment.classList.remove("btn-success");
                            ment.classList.add("btn-danger");
                          }
                        }
                        </script>
                        <script type="text/javascript">
                            $(document).ready(function(){
                                $("#onoff").click(function(e) {
                                    e.preventDefault();
                                    var url="{{route('switch')}}";
                                    var id=$("#merah").val();
                                    var buton = $("#onoff").val();
                                    var power;
                                    if (buton === "Off") {
                                        power = 1;
                                    }
                                    else{
                                        power =2;
                                    }
                                    $.ajax({
                                        url: url,
                                        method: "POST",
                                        data:{
                                            _token: '{{csrf_token()}}',
                                            id: id,
                                            power: power
                                        },
                                        success: function(dataResult){
                                            dataResult = JSON.parse(dataResult);
                                            console.log(dataResult);
                                            if(dataResult.statusCode)
                                            {
                                                alert("Switch Success!");
                                            }
                                            else{
                                                alert("Internal Server Error");
                                            }
                                        }
                                    });
                                });
                            });
                        </script>
                    <!-- Content Row -->
                    <div class="row">

                        <!-- Content Column -->
                        <div class="col-lg-6 mb-4">

                            <!-- Project Card Example -->
                            <div class="card  border-left-warning shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Smart Switch (Fitting Lamp)</h6>
                                </div>
                                <div class="card-body">
                                    <div class="text-center">
                                        <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;"
                                            src="img/undraw_posting_photo.svg" alt="">
                                    </div>
                                    <p>What is Smart Switch(Fitting lamp) <a
                                            target="_blank" rel="nofollow" href="https://google.com/">Fitting lamp</a>, a light fixture!</p>
                                    <a target="_blank" rel="nofollow" href="https://google.com/">More about Smart Switch &rarr;</a>
                                </div>
                            </div>

                            <!-- blank System -->
                            <div class="row">
                                <div class="col-lg-6 mb-4">
                                </div>
                            </div>

                        </div>

                        <div class="col-lg-6 mb-4">

                            <!-- Illustrations -->
                            <div class="card border-left-warning shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Smart Plug</h6>
                                </div>
                                <div class="card-body">
                                    <div class="text-center">
                                        <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;"
                                            src="img/undraw_posting_photo.svg" alt="">
                                    </div>
                                    <p>What is Smart plug?<a
                                            target="_blank" rel="nofollow" href="https://google.com/">Plug</a></p>
                                    <a target="_blank" rel="nofollow" href="https://google.com/">More About Smart Plug&rarr;</a>
                                </div>
                            </div>

                            <!-- Approach -->
                            <div class="card border-left-dark shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">S-LUCY Website</h6>
                                </div>
                                <div class="card-body">
                                    <div class="text-center">
                                        <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;"
                                            src="img/bg-masthead.jpg" alt="">
                                    </div>
                                    <p>S-LUCY (Smart Light Ultimate Control by Website) makes extensive use of Bootstrap 4 utility classes in order to reduce
                                        CSS bloat and poor page performance. Custom CSS classes are used to create
                                        custom components and custom utility classes.</p>
                                    <p class="mb-0">Before working with this theme, you should become familiar with the
                                        Bootstrap framework, especially the utility classes.</p>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer " style="background: linear-gradient (45deg, #49a09d, #5f2c82);">
                <div class="container my-auto" >
                    <div class="copyright text-center my-auto" style="color:rgb(255, 250, 250);">
                        {{-- <span>Copyright &copy; S-LUCY Website {{ $reformatDate }}</span> --}}
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    {{-- RepeatModals --}}
    <div class="modal fade" id="modalRepeat" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Repeat Day</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
                  <ul><input type="checkbox" value="Monday"><span class="ml-3">Monday</span></ul>
                  <ul><input type="checkbox" value="Tuesday"><span class="ml-3">Tuesday</span></ul>
                  <ul><input type="checkbox" value="Wednesday"><span class="ml-3">Wednesday</span></ul>
                  <ul><input type="checkbox" value="Thursday"><span class="ml-3">Thursday</span></ul>
                  <ul><input type="checkbox" value="Friday"><span class="ml-3">Friday</span></ul>
                  <ul><input type="checkbox" value="Saturday"><span class="ml-3">Saturday</span></ul>
                  <ul><input type="checkbox" value="Sunday"><span class="ml-3">Sunday</span></ul>
                <input type="text" id="timefrom">
                <input type="text" id="timeto">
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="button" class="btn text-light" style="background: linear-gradient(45deg, #0a002c, #0a002c,#0a002c , #5f2c82 )">Reset</button>
              <button type="button" class="btn text-light" style="background: linear-gradient(45deg, #0a002c, #0a002c,#0a002c , #5f2c82 )">Save changes</button>
            </div>
          </div>
        </div>
    </div>
    <script>
        $('#timefrom').timepicker({ 'timeFormat': 'H:i:s' });
        $('#timeto').timepicker({ 'timeFormat': 'h:i A' });
    </script>
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
                    <a class="btn text-light" style="background: linear-gradient(45deg, #0a002c, #0a002c,#0a002c , #5f2c82)" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                                  {{ __('Logout') }}
                    </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                              @csrf
                        </form>
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
