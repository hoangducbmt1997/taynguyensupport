<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Register | Zircos - Responsive Bootstrap 4 Admin Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Responsive bootstrap 4 admin template" name="description">
        <meta content="Coderthemes" name="author">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{asset('assets\images\favicon.ico')}}">

        <!-- App css -->
        <link href="{{asset('assets\css\bootstrap.min.css')}}" rel="stylesheet" type="text/css" id="bootstrap-stylesheet">
        <link href="{{asset('assets\css\icons.min.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('assets\css\app.min.css')}}" rel="stylesheet" type="text/css" id="app-stylesheet">



    </head>

    <body>


        <div class="account-pages mt-5 mb-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card">

                            <div class="text-center ">
                                <div class="mt-2 mb-2">
                                    <a href="index.html" class="text-success">
                                      <b style="font-size:23px; font-family: tahoma;">Đăng Ký</b>
                                    </a>
                                </div>
                            </div>

                            <div class="card-body">

                                <form action="{{route('register-user')}}" method="POST">
                                  @csrf
                                  @if(Session::has('error'))
                                    <p class="alert alert-warning">{{Session::get('error')}}</p>
                                  @endif
                                  @foreach($errors->all() as $error)
                                 <p> {{$error}}</p>
                                  @endforeach
                                    <div class="form-group">
                                        <input class="form-control" type="text" id="username" required="" name="username" placeholder="Username">
                                    </div>

                                    <div class="form-group">
                                        <input class="form-control" type="password" required="" id="password" name="password" placeholder="Password">
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" type="text" id="username" required="email" name="email" placeholder="Email">
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" type="text" id="username" required="" name="full_name" placeholder="Họ Tên">
                                    </div>
                                      <div class="form-group">
                                        <input class="form-control" type="text" id="username" required="" name="phonenumber" placeholder="Số điện thoại">
                                    </div>
                                    
                                   
                                    <div class="form-group">
                                        <div class="checkbox checkbox-success pt-1 pl-1">
                                            <input id="checkbox-signup" type="checkbox" checked="checked">
                                            <label for="checkbox-signup" class="mb-0">Bạn đồng ý <a href="#">với các điều khoản và điều kiện</a></label>
                                        </div>
                                    </div>
                                        <div class="form-group account-btn text-center mt-2">
                                        <div class="col-12">
                                            <button class="btn width-md btn-bordered btn-success waves-effect waves-light" type="submit">Đăng kí</button>
                                        </div>
                                    </div>

                                    <br>

                                </form>
                                 <div class="row mt-5">
                            <div class="col-sm-12 text-center">
                                <p class="text-muted">Bạn đã có tài khoản?<a href="{{route('form-login-user')}}" class="text-primary ml-1"><b>Đăng nhập</b></a></p>
                            </div>
                        </div>

                            </div>
                            <!-- end card-body -->
                        </div>
                        <!-- end card -->

                       

                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end page -->

        <!-- Vendor js -->
        <script src="assets\js\vendor.min.js"></script>

        <!-- App js -->
        <script src="assets\js\app.min.js"></script>

    </body>

</html>