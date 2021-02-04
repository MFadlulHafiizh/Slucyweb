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
    <link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
    <title>S-LUCY Website</title>
    <style>
       html,
        body {
            height: 100%;
        }

        body {
            margin: 0;
            background: linear-gradient(45deg, #0a002c, #0a002c,#0a002c , #5f2c82);
            font-family: 'Poppins', sans-serif;
            font-weight: 100;
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
    </style>
  </head>
  <body>

    <!-- Topbar -->
    <nav class="navbar navbar-expand bg-white topbar mb-4 static-top shadow" style="background: linear-gradient(45deg,#0a002c, #0a002c,#0a002c , #5f2c82) ">
        <div class="navbar-brand d-flex">
					<img src="img/ss.png" class="img-logo mr-3" alt="img-logo">
				</div>
        <!-- Sidebar Toggle (Topbar) -->
        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
        </button>


        <!-- Topbar Navbar -->
        <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
                <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-search fa-fw"></i>
                </a>
                <!-- Dropdown - Messages -->
                <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                    aria-labelledby="searchDropdown">
                    <form class="form-inline mr-auto w-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small"
                                placeholder="Search for..." aria-label="Search"
                                aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>
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


            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed-expand" style="color:rgb(255, 250, 250);" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Components</span>
                </a>
                <div id="collapseTwo" class="collapse show" style="color:rgb(185, 185, 185);" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="py-2 collapse-inner rounded " style=" background: linear-gradient(45deg, #49a09d, #5f2c82)">
                        <h6 class="collapse-header">Your S-LUCY ID:</h6>
                        <a class="collapse-item active" style="color:rgb(255, 255, 255);">
                            <i class="fas fa-fingerprint " style="color: #B1F8FF"></i>
                            Regist ID
                        </a>
                        <a class="collapse-item" style="color:rgb(255, 255, 255);" href="{{route('signid')}}">
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
    </nav>
    <!-- End of Topbar -->


  <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Card -->
    <div class="container">
	<table align="center" class="mt-5">
		<thead>
			<tr>
				<th >Regist your S-Lucy ID</th>
			</tr>
		</thead>
		<tbody>
			<tr>
                <td>
                <form class="addProduct ml-auto" id="addProduct" method="POST" action="/create">
                    @csrf
                        <p style="position: inline">Product :
                        <select name='product' style="width: 290px; border-color: #B8F9FF; background:transparent; border-radius: 2rem;">
                        <option value='Switch'  style="width: 290px; border-color: #B8F9FF; background:transparent; border-radius: 2rem;">Switch (Fitting lamp)</option>
                        <option value='Plug' style="width: 290px; border-color: #B8F9FF; background:transparent; border-radius: 2rem;">Plug</option>
                        </select>
                        </p>
                        <input type="text" id="registid" name="registid" style="padding:3px 2px ;width:370px; border-color: #B8F9FF; background-color:transparent; border-radius: 2rem">
                       <br>
                        <input type="text" id="date" class="datetimes mt-3" name="datetimes" style="padding:3px 2px ;width:370px; border-color: #B8F9FF; background-color:transparent; border-radius: 2rem">
                        <input type="hidden" name="status" value="off" class="status" id="status">
                        <br>
                        <button type="submit"  class="btn btn-dark mt-4 mb-1" id="submitProduct" style="border-radius: 3rem; color: #B8F9FF; border-radius: 3rem; opacity: 70%;">
                            <i class="fas fa-fingerprint " style="color: #B1F8FF"></i>
                            <span>Regist ID</span>
                        </button>
                    </form>
                </td>
			</tr>
			<tr>
		</tbody>
	</table>
</div>
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
                    <a class="btn text-light" style="background: linear-gradient(45deg, #0a002c, #0a002c,#0a002c , #5f2c82)" href="{{route('welcome')}}">Logout</a>
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

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

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

    <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    {{-- <script>
        $(function() {
          $('input[name="datetimes"]').daterangepicker({
            timePicker: true,
            startDate: moment().startOf('hour'),
            endDate: moment().startOf('hour').add(32, 'hour'),
            locale: {
              format: 'M/DD hh:mm A'
            }
          });
        });
        </script> --}}
    <script>
        $(function() {
          $('input[name="datetimes"]').daterangepicker({
            timePicker: true,
            startDate: moment().startOf('hour'),
            endDate: moment().startOf('hour').add(32, 'hour'),
            locale: {
              format: 'hh:mm A'
            }
          });
        });
        </script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />

      <!-- The core Firebase JS SDK is always required and must be listed first -->
      <script src="https://www.gstatic.com/firebasejs/8.2.5/firebase-app.js"></script>

      <!-- TODO: Add SDKs for Firebase products that you want to use
          https://firebase.google.com/docs/web/setup#available-libraries -->
      <script src="https://www.gstatic.com/firebasejs/8.2.5/firebase-analytics.js"></script>


      <script>
          var config = {
              apiKey: "{{ config('services.firebase.api_key') }}",
              authDomain: "{{ config('services.firebase.auth_domain') }}",
              databaseURL: "{{ config('services.firebase.database_url') }}",
              projectId: "{{ config('services.firebase.project_id') }}",
              storageBucket: "{{ config('services.firebase.storage_bucket') }}",
              messagingSenderId: "{{ config('services.firebase.messaging_sender_id') }}",
              appId: "{{ config('services.firebase.app_id') }}",
              measurementId: "{{ config('services.firebase.measurement_id') }}"
          };
          firebase.initializeApp(config);
          firebase.analytics();
          var database = firebase.database();
          var lastIndex = 0;

                    // Add Data
            $('#submitProduct').on('click', function () {
            var values = $("#addProduct").serializeArray();
            var regis = values[0].value;
            var name = values[1].value;
            var date = values[2].value;
            var ID = lastIndex + 1;
            console.log(values);
            firebase.database().ref('SlucyWeb/' + ID).set({
            slucyId: regis,
            name: name,
            date:date
            });
            // Reassign lastID value
            lastIndex = ID;
            $("#addProduct input").val("");
            });
      </script>

  </body>
</html>
