<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SLUCY - Register</title>

    <!-- Custom fonts for this template-->
    <link href="fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary" style="background: linear-gradient(45deg, #0a002c, #0a002c,#0a002c , #5f2c82)">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5" style="background: linear-gradient(45deg, #49a09d, #5f2c82)">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-light mb-4">Create an Account!</h1>
                            </div>
                            <form class="user" method="POST" action="{{route('register')}}">
                                @csrf
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" id="exampleFirstName"
                                            placeholder="First Name" name="firstname">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-user" id="exampleLastName"
                                            placeholder="Last Name" name="lastname">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-user" id="exampleInputEmail"
                                        placeholder="Email Address" name="email">
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" class="form-control form-control-user"
                                            id="password" placeholder="Password" name="password">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control form-control-user"
                                            id="password_confirmation" placeholder="Repeat Password" name="password_confirmation">
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-user btn-block text-light" style="border:transparent; background: linear-gradient(45deg, #49a09d, #5f2c82)">
                                    Register Account
                                </button>
                                {{-- <a href="{{route('login')}}" class="btn btn-user btn-block text-light" style="border:transparent; background: linear-gradient(45deg, #49a09d, #5f2c82)">
                                    Register Account
                                </a> --}}
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" style="color:rgb(185, 185, 185);" href="{{ route('login')}}">Already have an account? Login!</a>
                            </div>
                            <div class="text-center">
                                <a class="small" style="color:rgb(185, 185, 185);" href="{{ url()->previous()}}">go back</a>
                            </div>
                        </div>
                    </div>
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

</body>

</html>
