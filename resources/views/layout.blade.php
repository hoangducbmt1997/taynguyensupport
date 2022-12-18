<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

 
   <meta name="google-site-verification" content="32TbJz8UoVFovq2prC2DaJmaV6gi8A3yzL60ICdmnHk" />

  <title>Tây Nguyên</title>

  <link rel="stylesheet" href="{{asset('frontend/css/bootstrap.css')}}">
  
  <link rel="stylesheet" href="{{asset('frontend/css/maicons.css')}}">

  <link rel="stylesheet" href="{{asset('frontend/vendor/animate/animate.css')}}">

  <link rel="stylesheet" href="{{asset('frontend/vendor/owl-carousel/css/owl.carousel.css')}}">

  <link rel="stylesheet" href="{{asset('frontend/vendor/fancybox/css/jquery.fancybox.css')}}">

  <link rel="stylesheet" href="{{asset('frontend/css/theme.css')}}">

    <link rel="shortcut icon" href="{{asset('assets\images\favicon.ico')}}">

        <!-- App css -->
        <link href="{{asset('assets\css\bootstrap.min.css')}}" rel="stylesheet" type="text/css" id="bootstrap-stylesheet">
        <link href="{{asset('assets\css\icons.min.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('assets\css\app.min.css')}}" rel="stylesheet" type="text/css" id="app-stylesheet">

	  <meta property="og:url"           content="https://taynguyensupport.com/" />
        <meta property="og:type"          content="website" />
        <meta property="og:title"         content="Trường Tây Nguyên và sinh viên " />
        <meta property="og:description"   content="Giúp đỡ sinh viên" />
       
        <meta property="og:site_name" content="taynguyen">
     
	
</head>
<body style="padding: 0 !important;">
  <style type="text/css">
    *{
      font-family: sans-serif; !important;

    }
    .top-bar {
    background-color: rgb(217 217 225);
}
    nav.navbar.navbar-expand-lg.navbar-light {
    background-color: rgb(253,183,212);
}
.navbar-light .navbar-nav .nav-link {
  font-weight: bolder;
    color: rgb(255 255 255);
}
.toptitle p{
  display: block;
  width: 96%;
  float: left;
  max-height: 25px;
  overflow: hidden;
}
 
@media only screen and (max-width: 800px) {
  .top-bar {
    display: none;
}
}


.toptitle p a{
  text-decoration:none; font-size: 16px; font-weight: bolder; display: block; float: left; padding:0px 10px; display: inline-block; width: 100%; color:rgb(228, 63, 126);
}

.tieudemuaban{

}
/*san phẩm*/
.sanpham_box{
width: 25%;
max-height: 300px;

}
.hinhanh_sp{
  width:96%;
  max-height:200px;
  display: block;
  overflow: hidden;
}
.hinhanh_sp a img{
  margin: 2% 4%;
  max-width: 93%;
  max-height: auto;
  display: block;
  vertical-align: middle
  
}
.tieudesp{
  display: block;
  width: 100%;
  max-height: 100px;
  overflow: hidden;
  padding:0 5% ;
  margin: 0;
}
.tieudesp a:hover{
  color: red;
}

.author_trend{
  width: 100%;
  background-color: white;
  display: block;
  max-height: 360px;
  overflow: hidden;

}
.profile_auth{
  max-width: 120%;
  margin: 3% 4%;
  overflow: hidden;
  height: 260px;
}
.profile_auth img{
  max-width: 140%;
  margin-left: auto;
  margin-right: auto;
  display: block;
  height: 260px;


}
.profile_auth img:hover{
  opacity: 0.8;
    transition-duration: 1s;
     transform: scale(1.1);
   
}
.tacgia_noibat{
  float: left;
}
.tieudeauth{
  display: block;
  width: 100%;
  max-height: 80px;
}.tieudeauth p{
   text-align: center;
}
.tieudeauth p a{
  text-decoration: none;
  font-weight: bolder ;
 
  font-size: 19px;
  color: rgb(238, 77, 45);
  opacity: 0.8;
}
.tieudeauth p a:hover {
   transform: scale(1.1);
    opacity: 0.8;
    transition-duration: 3s;
    color: pink;
}
  div.tranding_left{
    padding: 10px 0;
    display: block;
    width: 100%;
    max-height: 200px;
    overflow: hidden;
   
  }
    .hinhanh{
      width: 40%;
    }
    .hinhanh a img{
      float: left;
      max-width: 90%;
      max-height: 200px;
    }
    .hinhanh a img:hover{
    transform: scale(1.1);
    opacity: 0.8;
    transition-duration: 3s;
    }
    .tieude{
      padding: 0 2%;
      width: 60%;
      float: left;
      display: inline-block;
      font-weight: bolder;
    }
    .tieude p a{
      text-decoration: none;
      color: rgb(18, 19, 20);
    }
     .tieude p a:hover{
      color: rgb(150,155,50);
    }
        </style>


  <!-- Back to top button -->
  <div class="back-to-top"></div>

  <header>
    <div class="top-bar">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-9">
            <div class="d-inline-block">
              <span class="mai-mail fg-primary"></span> <a href="" title="Địa chỉ">567 Lê Duẩn, Ea Tam</a>
            </div>
            <div class="d-inline-block ml-2">
              <span class="mai-call fg-primary"></span> <a href="" title="số điện thoại">+0262 3825 185</a>
            </div>
          </div>
          
          <div class="col-md-3">
           
            <div class="row">
                @if(Auth::guest())
                 <div class="col-md-4"></div> 
                <div class="col-md-4">
                <a href="{{route('logout-user')}}">Đăng Nhập</a>
              </div>
              <div class="col-md-4">
                <a href="{{route('register-user')}}">Đăng Kí</a>
              </div>
            
            @else
              <div class="col-md-4">
                <a href="{{route('logout-user')}}">Đăng Xuất</a>
              </div>
              <div class="col-md-8"> 
              <p>Chào {{auth()->user()->full_name}}</p>
              @endif
            </div>
            </div>
            
          </div>
          

          </div>
        </div>
      </div> <!-- .container -->
    </div> <!-- .top-bar -->

    <nav  class="navbar navbar-expand-lg navbar-light">
      <div class="container">
        <a href="{{route('page')}}" class="navbar-brand">TNU <span class="text-primary">Cofesstions</span></a>

        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        
         <div class="navbar-collapse collapse" id="navbarContent">
          <ul class="navbar-nav ml-auto pt-3 pt-lg-0">
             <li class="nav-item">
              <a href="{{route('page')}}" class="nav-link">Trang chủ</a>
            </li>
           <li class="nav-item">
              <a href="{{route('motel-page')}}" class="nav-link">Phòng trọ</a>
            </li>
            <li class="nav-item">
              <a href="{{route('product-page')}}" class="nav-link">Mua bán</a>
            </li>
            <li class="nav-item">
              <a href="{{route('post-page')}}" class="nav-link">Bài viết</a>
            </li>
            
             <li class="dropdown notification-list">
                                    <a class="nav-link dropdown-toggle  waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                        <i class="mdi mdi-bell noti-icon"></i>
                                        <span class="badge badge-success rounded-circle noti-icon-badge">1</span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-lg">
    
                                        <!-- item-->
                                        <div class="dropdown-item noti-title">
                                            <h5 class="font-16 m-0">
                                                            <span class="float-right">
                                                                <a href="" class="text-dark">
                                                                    <small>Clear All</small>
                                                                </a>
                                                            </span>Thông báo
                                                        </h5>
                                        </div>
    
                                        <div class="slimscroll noti-scroll">
    
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                                    <div class="notify-icon bg-danger">
                                                        <i class="mdi mdi-settings-outline"></i>
                                                    </div>
                                                    <p class="notify-details">Error!
                                                        <small class="text-muted">Chức năng đang bảo trì</small>
                                                    </p>
                                                </a>
                        
                                        
                                        </div>
    
                                        <!-- All-->
                                        <a href="javascript:void(0);" class="dropdown-item text-center text-primary notify-item notify-all">
                                                Thông báo
                                                <i class="fi-arrow-right"></i>
                                            </a>
    
                                    </div>
                                </li>
                                 <li class="dropdown notification-list">
                                    <a class="nav-link dropdown-toggle  waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                        <i class=" fab fa-facebook-messenger"></i>
                                        <span class="badge badge-success rounded-circle noti-icon-badge">0</span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-lg">
    
                                        <!-- item-->
                                        <div class="dropdown-item noti-title">
                                            <h5 class="font-16 m-0">
                                                            <span class="float-right">
                                                                <a href="" class="text-dark">
                                                                    <small>Clear All</small>
                                                                </a>
                                                            </span>Tin Nhắn
                                                        </h5>
                                        </div>
    
                                 
                                    </div>
                                </li>
             
         
         
             
            <li class="nav-item"> 
            @if(Auth::guest())
              <a style="text-decoration-style: none; font-weight: bolder;

              color: rgb(255 255 255);" href="{{route('form-login-user')}}">Đăng Nhập</a>
              @else
            <a  style="text-decoration-style: none; font-weight: bolder;

              color: rgb(255 255 255);" href="{{asset('/home/page/').'/'.auth()->user()->id}}">Trang cá nhân</a>
            @endif
       
            
            </li>
          
           
          </ul>
        </div>
      </div> <!-- .container -->
    </nav> <!-- .navbar -->


   
  </header>

 
@yield('content')


  <footer class="page-footer">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 py-3">
          <h3>TNU <span class="fg-primary">Cofesstions</span></h3>
        </div>
        <div class="col-lg-3 py-3">
          <h5>Contact Information</h5>
          <p>Address.</p>
          <p>Email: Đang cập nhật</p>
          <p>Phone: Đang cập nhật</p>

          
        </div>
        <div class="col-lg-3 py-3">
          <h5>Company</h5>
          <ul class="footer-menu">
            <li><a href="#">Đang cập nhật</a></li>
            <li><a href="#">Đang cập nhật</a></li>
            <li><a href="#">Đang cập nhật</a></li>
          </ul>
        </div>
        <div class="col-lg-3 py-3">
          <h5>Đang cập nhật</h5>
          <form action="#">
            <input type="text" class="form-control" placeholder="Enter your email">
            <button type="submit" class="btn btn-primary btn-sm mt-2">Submit</button>
          </form>
        </div>
      </div>

      <hr>

      <div class="row mt-4">
        <div class="col-md-6">
          <p>Đang cập nhật<a href="">Đang cập nhật</a></p>
        </div>
        <div class="col-md-6 text-right">
          <div class="sosmed-button">
            <a href="#"><span class="mai-logo-facebook-f"></span></a>
            <a href="#"><span class="mai-logo-twitter"></span></a>
            <a href="#"><span class="mai-logo-youtube"></span></a>
            <a href="#"><span class="mai-logo-linkedin"></span></a>
          </div>
        </div>
      </div>
    </div>
  </footer>

  
<script src="{{asset('frontend/js/jquery-3.5.1.min.js')}}"></script>

<script src="{{asset('frontend/js/bootstrap.bundle.min.js')}}"></script>

<script src="{{asset('frontend/vendor/owl-carousel/js/owl.carousel.min.js')}}"></script>

<script src="{{asset('frontend/vendor/wow/wow.min.js')}}"></script>

<script src="{{asset('frontend/vendor/fancybox/js/jquery.fancybox.min.js')}}"></script>

<script src="{{asset('frontend/vendor/isotope/isotope.pkgd.min.js')}}"></script>

<script src="{{asset('frontend/js/google-maps.js')}}"></script>

<script src="{{asset('frontend/js/theme.js')}}"></script>
   <script src="{{asset('assets\libs\gmaps\gmaps.min.js')}}"></script>

        <script src="{{asset('assets\libs\bxslider\jquery.bxslider.min.js')}}"></script>

        <script src="{{asset('assets\js\pages\bxslider.init.js')}}"></script>
        


      <script src="{{asset('ckeditor/ckeditor.js')}}"></script>




<script>
  $('#calendar').datepicker({
  });

  !function ($) {
      $(document).on("click","ul.nav li.parent > a > span.icon", function(){          
          $(this).find('em:first').toggleClass("glyphicon-minus");      
      }); 
      $(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
  }(window.jQuery);

  $(window).on('resize', function () {
    if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
  })
  $(window).on('resize', function () {
    if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
  })
  // Chang Image add product
  function changeImg(input){
      //Nếu như tồn thuộc tính file, đồng nghĩa người dùng đã chọn file mới
      if(input.files && input.files[0]){
          var reader = new FileReader();
          //Sự kiện file đã được load vào website
          reader.onload = function(e){
              //Thay đổi đường dẫn ảnh
              $('#avatar').attr('src',e.target.result);
          }
          reader.readAsDataURL(input.files[0]);
      }
  }
  $(document).ready(function() {
      $('#avatar').click(function(){
          $('#img').click();
      });
  });
 </script>
    <script type="text/javascript">
      CKEDITOR.replace('editor1');
      CKEDITOR.replace('editor2');
      

    </script>
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