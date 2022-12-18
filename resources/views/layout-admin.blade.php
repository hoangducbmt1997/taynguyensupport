<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Dashboard </title>
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

    <body data-layout="horizontal">

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Navigation Bar-->
            <header id="topnav">
                    <!-- Topbar Start -->
                    <div class="navbar-custom">
                        <div class="container-fluid">
                            <ul class="list-unstyled topnav-menu float-right mb-0">
    
                                <li class="dropdown notification-list">
                                    <!-- Mobile menu toggle-->
                                    <a class="navbar-toggle nav-link">
                                        <div class="lines">
                                            <span></span>
                                            <span></span>
                                            <span></span>
                                        </div>
                                    </a>
                                    <!-- End mobile menu toggle-->
                                </li>
                                <li>
                                  
                                </li>
    
                                <li class="dropdown d-none d-lg-block">
                                    <a class="nav-link dropdown-toggle mr-0" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                        <img src="{{asset('assets\images\flags\us.jpg')}}" alt="user-image" class="mr-2" height="12"> <span class="align-middle">English <i class="mdi mdi-chevron-down"></i> </span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <img src="{{asset('assets\images\flags\germany.jpg')}}" alt="user-image" class="mr-2" height="12"> <span class="align-middle">German</span>
                                        </a>
    
                                    </div>
                                </li>
    
                                <li class="dropdown notification-list">
                                    <a class="nav-link dropdown-toggle  waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                        <i class="mdi mdi-bell noti-icon"></i>
                                        <span class="badge badge-success rounded-circle noti-icon-badge">4</span>
                                        <div class="noti-dot">
                                            <span class="dot"></span>
                                            <span class="pulse"></span>
                                        </div>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-lg">
    
                                        <!-- item-->
                                        <div class="dropdown-item noti-title">
                                            <h5 class="font-16 m-0">
                                                            <span class="float-right">
                                                                <a href="" class="text-dark">
                                                                    <small>Clear All</small>
                                                                </a>
                                                            </span>Notification
                                                        </h5>
                                        </div>
    
                                        <div class="slimscroll noti-scroll">
    
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                                    <div class="notify-icon bg-success">
                                                        <i class="mdi mdi-settings-outline"></i>
                                                    </div>
                                                    <p class="notify-details">New settings
                                                        <small class="text-muted">There are new settings available</small>
                                                    </p>
                                                </a>
                        
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                                    <div class="notify-icon bg-info">
                                                        <i class="mdi mdi-bell-outline"></i>
                                                    </div>
                                                    <p class="notify-details">Updates
                                                        <small class="text-muted">There are 2 new updates available</small>
                                                    </p>
                                                </a>
    
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                                    <div class="notify-icon bg-danger">
                                                        <i class="mdi mdi-account-plus"></i>
                                                    </div>
                                                    <p class="notify-details">New user
                                                        <small class="text-muted">You have 10 unread messages</small>
                                                    </p>
                                                </a>
    
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                                    <div class="notify-icon bg-info">
                                                        <i class="mdi mdi-comment-account-outline"></i>
                                                    </div>
                                                    <p class="notify-details">Caleb Flakelar commented on Admin
                                                        <small class="text-muted">4 days ago</small>
                                                    </p>
                                                </a>
    
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                                    <div class="notify-icon bg-secondary">
                                                        <i class="mdi mdi-heart"></i>
                                                    </div>
                                                    <p class="notify-details">Carlos Crouch liked
                                                        <b>Admin</b>
                                                        <small class="text-muted">13 days ago</small>
                                                    </p>
                                                </a>
                                        </div>
    
                                        <!-- All-->
                                        <a href="javascript:void(0);" class="dropdown-item text-center text-primary notify-item notify-all">
                                                See all Notification
                                                <i class="fi-arrow-right"></i>
                                            </a>
    
                                    </div>
                                </li>
    
                                <li class="dropdown notification-list">
                                    <a class="nav-link dropdown-toggle  waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                        <i class="mdi mdi-email noti-icon"></i>
                                        <span class="badge badge-danger rounded-circle noti-icon-badge">8</span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-lg">
    
                                        <!-- item-->
                                        <div class="dropdown-item noti-title">
                                            <h5 class="font-16 m-0">
                                                            <span class="float-right">
                                                                <a href="" class="text-dark">
                                                                    <small>Clear All</small>
                                                                </a>
                                                            </span>Messages
                                                        </h5>
                                        </div>
    
                                        <div class="slimscroll noti-scroll">
    
                                                <div class="inbox-widget">
                                                        <a href="#">
                                                            <div class="inbox-item">
                                                                <div class="inbox-item-img"><img src="{{asset('assets\images\users\avatar-1.jpg')}}" class="rounded-circle" alt=""></div>
                                                                <p class="inbox-item-author">Chadengle</p>
                                                                <p class="inbox-item-text text-truncate">Hey! there I'm available...</p>
                                                            </div>
                                                        </a>
                                                        <a href="#">
                                                            <div class="inbox-item">
                                                                <div class="inbox-item-img"><img src="{{asset('assets\images\users\avatar-2.jpg')}}" class="rounded-circle" alt=""></div>
                                                                <p class="inbox-item-author">Tomaslau</p>
                                                                <p class="inbox-item-text text-truncate">I've finished it! See you so...</p>
                                                            </div>
                                                        </a>
                                                        <a href="#">
                                                            <div class="inbox-item">
                                                                <div class="inbox-item-img"><img src="{{asset('assets\images\users\avatar-3.jpg')}}" class="rounded-circle" alt=""></div>
                                                                <p class="inbox-item-author">Stillnotdavid</p>
                                                                <p class="inbox-item-text text-truncate">This theme is awesome!</p>
                                                            </div>
                                                        </a>
                                                        <a href="#">
                                                            <div class="inbox-item">
                                                                <div class="inbox-item-img"><img src="{{asset('assets\images\users\avatar-4.jpg')}}" class="rounded-circle" alt=""></div>
                                                                <p class="inbox-item-author">Kurafire</p>
                                                                <p class="inbox-item-text text-truncate">Nice to meet you</p>
                                                            </div>
                                                        </a>
                                                        <a href="#">
                                                            <div class="inbox-item">
                                                                <div class="inbox-item-img"><img src="{{asset('assets\images\users\avatar-5.jpg')}}" class="rounded-circle" alt=""></div>
                                                                <p class="inbox-item-author">Shahedk</p>
                                                                <p class="inbox-item-text text-truncate">Hey! there I'm available...</p>
        
                                                            </div>
                                                        </a>
                                                    </div> <!-- end inbox-widget -->
    
                                        </div>

                                          <!-- All-->
                                          <a href="javascript:void(0);" class="dropdown-item text-center text-primary notify-item notify-all">
                                                See all Messages
                                                <i class="fi-arrow-right"></i>
                                            </a>
    
                        
    
                                    </div>
                                </li>
    
                                <li class="dropdown notification-list">
                                    <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                        <img src="{{asset('assets\images\users\avatar-1.jpg')}}" alt="user-image" class="rounded-circle">
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                                        <!-- item-->
                                        <div class="dropdown-header noti-title">
                                            <h6 class="text-overflow m-0">Welcome !</h6>
                                        </div>
    
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <i class="mdi mdi-account-outline"></i>
                                            <span>Profile</span>
                                        </a>
    
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <i class="mdi mdi-settings-outline"></i>
                                            <span>Settings</span>
                                        </a>
    
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <i class="mdi mdi-lock-outline"></i>
                                            <span>Lock Screen</span>
                                        </a>
    
                                        <div class="dropdown-divider"></div>
    
                                        <!-- item-->
                                        <a href="{{route('logout')}}" class="dropdown-item notify-item">
                                            <i class="mdi mdi-logout-variant"></i>
                                            <span>Logout</span>
                                        </a>
    
                                    </div>
                                </li>
    
                               
                            </ul>

    
                            <!-- LOGO -->
                            <div class="logo-box">
                                <a href="" class="logo text-center">
                                    <span class="logo-lg">
                                        <img src="{{asset('assets\images\logo.png')}}" alt="" height="30">
                                        <!-- <span class="logo-lg-text-light">Zircos</span> -->
                                    </span>
                                    <span class="logo-sm">
                                        <!-- <span class="logo-sm-text-dark">Z</span> -->
                                        <img src="{{asset('assets\images\logo-sm.png')}}" alt="" height="22">
                                    </span>
                                </a>
                            </div>
                
    
                            <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
    
                                <li class="d-none d-sm-block">
                                    <form class="app-search">
                                        <div class="app-search-box">
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="Search...">
                                                <div class="input-group-append">
                                                    <button class="btn" type="submit">
                                                        <i class="fas fa-search"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <!-- end Topbar -->
    
                    <div class="topbar-menu">
                        <div class="container-fluid">
                            <div id="navigation">
                                <!-- Navigation Menu-->
                                <ul class="navigation-menu">
                                      <li class="has-submenu">
                                        <a href="{{route('show-dashboard')}}"> <i class="mdi mdi-view-dashboard"></i>Dashboard</a>
                                        
                                    
                                    </li>
    
                                    <li class="has-submenu">
                                        <a href="{{route('show-category')}}"> <i class="mdi mdi-view-dashboard"></i>Danh Mục</a>
                                     
                                    </li>
                                      <li class="has-submenu">
                                        <a href="{{route('duyet-bai')}}"> <i class="mdi mdi-view-dashboard"></i>Chung </a>
                                     
                                    </li>
                                     <li class="has-submenu">
                                        <a href="{{route('s-pd')}}"> <i class="mdi mdi-view-dashboard"></i>Sản Phẩm</a>
                                     
                                    </li>
                                     <li class="has-submenu">
                                        <a href="{{route('s-pt')}}"> <i class="mdi mdi-view-dashboard"></i>Bài Viết</a>
                                     
                                    </li>
                                     <li class="has-submenu">
                                        <a href="{{route('s-mt')}}"> <i class="mdi mdi-view-dashboard"></i>Phòng trọ</a>
                                     
                                    </li>
    
                                
                                    
    
                                </ul>
                                <!-- End navigation menu -->
    
                                <div class="clearfix"></div>
                            </div>
                            <!-- end #navigation -->
                        </div>
                        <!-- end container -->
                    </div>
                    <!-- end navbar-custom -->
                </header>
                <!-- End Navigation Bar-->

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->
            <div class="khoangtrong" style="width: 100%; height: 150px; display: block;">

                
            </div>

           @yield('content')

                <!-- Footer Start -->
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                Kim Gia Bảo Copy@ email kimgiabao1325@gmail.com
                            </div>
                        </div>
                    </div>
                </footer>
      
        </div>
        <!-- END wrapper -->

        <!-- Right Sidebar -->
       
        <!-- /Right-bar -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <a href="javascript:void(0);" class="right-bar-toggle demos-show-btn">
            <i class="mdi mdi-settings-outline mdi-spin"></i> &nbsp;Choose Demos
        </a>
       <!--  //ckeditor -->
         <script src="{{asset('ckeditor/ckeditor.js')}}"></script>

        <!-- Vendor js -->
        <script src="{{asset('assets\js\vendor.min.js')}}"></script>

        <script src="{{asset('assets\libs\morris-js\morris.min.js')}}"></script>
        <script src="{{asset('assets\libs\raphael\raphael.min.js')}}"></script>


        <script src="{{asset('assets\js\pages\dashboard.init.js')}}"></script>

        <!-- App js -->
        <script src="{{asset('assets\js\app.min.js')}}"></script>
         <script type="text/javascript">
 
    function ChangeToSlug()
        {
            var slug;
            //Lấy text từ thẻ input title 
            slug = document.getElementById("slug").value;
            slug = slug.toLowerCase();
            //Đổi ký tự có dấu thành không dấu
                slug = slug.replace(/á|à|ả|ạ|ã|ă|ắ|ằ|ẳ|ẵ|ặ|â|ấ|ầ|ẩ|ẫ|ậ/gi, 'a');
                slug = slug.replace(/é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ/gi, 'e');
                slug = slug.replace(/i|í|ì|ỉ|ĩ|ị/gi, 'i');
                slug = slug.replace(/ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ/gi, 'o');
                slug = slug.replace(/ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự/gi, 'u');
                slug = slug.replace(/ý|ỳ|ỷ|ỹ|ỵ/gi, 'y');
                slug = slug.replace(/đ/gi, 'd');
                //Xóa các ký tự đặt biệt
                slug = slug.replace(/\`|\~|\!|\@|\#|\||\$|\%|\^|\&|\*|\(|\)|\+|\=|\,|\.|\/|\?|\>|\<|\'|\"|\:|\;|_/gi, '');
                //Đổi khoảng trắng thành ký tự gạch ngang
                slug = slug.replace(/ /gi, "-");
                //Đổi nhiều ký tự gạch ngang liên tiếp thành 1 ký tự gạch ngang
                //Phòng trường hợp người nhập vào quá nhiều ký tự trắng
                slug = slug.replace(/\-\-\-\-\-/gi, '-');
                slug = slug.replace(/\-\-\-\-/gi, '-');
                slug = slug.replace(/\-\-\-/gi, '-');
                slug = slug.replace(/\-\-/gi, '-');
                //Xóa các ký tự gạch ngang ở đầu và cuối
                slug = '@' + slug + '@';
                slug = slug.replace(/\@\-|\-\@|\@/gi, '');
                //In slug ra textbox có id “slug”
            document.getElementById('convert_slug').value = slug;
        }
         
</script>

    </body>

</html>