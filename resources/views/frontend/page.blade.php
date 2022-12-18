@extends('layout')

@section('content')



<div class="container" style="margin-top: 7px;background-color: rgb(245, 240, 240);">

  <div class="row">

<div class="col-sm-8" style="overflow: hidden;" >

    

   <style type="text/css">

    .hero-carousel-item::before{

      background-color: transparent;

    }

  </style>

    

        <div class="owl-carousel hero-carousel" >

           <div class="hero-carousel-item">

            <img style="max-width:120%; max-height:400px;" src="{{asset('img/page/img2.jpg')}}" alt="">

            

          </div>

          <div class="hero-carousel-item">

            <img style="max-width:120%; max-height:400px;" src="{{asset('img/page/img3.jpg')}}" alt="">

            

          </div>

          <div class="hero-carousel-item">



            <img style="max-width:120%; max-height:400px;" src="{{asset('img/page/4.jpg')}}" alt="">

           

          </div>

           <div class="hero-carousel-item">

            <img style="max-width:120%; max-height:400px;" src="{{asset('img/page/1.jpg')}}" alt="">

           

          </div>

           <div class="hero-carousel-item">

            <img style="max-width:120%; max-height:400px;" src="{{asset('img/page/2.jpg')}}" alt="">

           

          </div>

           <div class="hero-carousel-item">

            <img style="max-width:120%; max-height:400px;" src="{{asset('img/page/3.jpg')}}" alt="">

           

          </div>

         

        </div>

     

</div>

<div class="col-sm-4">

 

                                        <h5 style="color: rgb(238, 77, 45);">Bài viết nổi bật</h5>

                                        @foreach($post_trend as $trend)

                                         <div class="media latest-post-item mt-3">

                                            <div class="media-left mr-2">

                                                <a href="{{asset('posts/show/').'/'.$trend->id}}"> <img class="rounded" alt="64x64" src="{{asset('img/post/').'/'.$trend->img}}" style="width: 100px; height: 66px;"> </a>

                                            </div>

                                            <div class="media-body">

                                                <h5  style="overflow: hidden; width: 100%; max-height: 35px;"  class="media-heading mt-0 mb-1"><a href="{{asset('posts/show/').'/'.$trend->id}}" class="text-muted font-15" style="width: 100%; height:42; display: block;">{{$trend->post_name}}</a> </h5>

                                                <p class="font-12 text-muted">

                                                    {{$trend->updated_at}}

                                                </p>

                                            </div>

                                        </div>

                                        @endforeach

                                         



    </div>

 </div>

</div>



      <main>

    <div class="page" style="margin-top: 7px;">

      <div class="container"style="background-color: rgb(245, 240, 240);">

        <div class="row align-items-center">

          <div class="col-lg-6 py-3">

            <div class="subhead" style="color: rgb(238, 77, 45);">Sinh Viên Tây Nguyên</div>

            {{-- <h2 class="title-section">Kênh <span class="fg-success">dành</span>  cho sinh viên Tây Nguyên</h2> --}}

            <h2 class="title-section">Kênh <span class="fg-success">dành</span>  cho dân chơi Tây Nguyên (Mai đẹt ti ni)</h2>




            <p>Tìm đọc bài viết tại danh mục<a href="{{asset('posts')}}">    Bài Viết</a> </p>

            <p>Mua bán tại danh mục <a href="{{asset('products')}}">     Mua Bán</a> </p>

            <p>Tìm phòng trọ tại danh mục  <a href="{{asset('motels')}}">Phòng Trọ</a></p>

            @if(Auth::guest())

            <p>Đăng Kí Tài Khoản Ngay</p>

            <a href="{{route('form-register-user')}}" class="btn btn-primary mt-4">Đăng Kí</a>

              @else

            @endif

          </div>



          <div class="col-lg-6 py-3">

            <div class="about-img">

              <img src="{{asset('img/IMG_2242-1.jpg')}}" alt="sinh-vien-dai-hoc-tay-nguyen">

            </div>

          </div>

        </div>

      </div>

    </div> <!-- .page-section -->



    <div class="page" >

      <div class="container" style="background-color: rgb(245, 240, 240);">

        <div class="text-center">

          <div class="subhead">Về Chúng Tôi</div>

          <h2 class="title-section" style="color: rgb(238, 77, 45);">Danh mục hàng đầu</h2>

        </div>

        <div class="row justify-content-center">

          <div class="col-md-6 col-lg-4 col-xl-3 py-3 mb-3">

            <div class="text-center">

              <div class="img-fluid mb-4">

                <img src="{{asset('frontend/img/icons/graphics_design.svg')}}" alt="">

              </div>

              <h5>Tạo bài viết</h5>

            </div>

          </div>

          <div class="col-md-6 col-lg-4 col-xl-3 py-3 mb-3">

            <div class="text-center">

              <div class="img-fluid mb-4">

                <img src="{{asset('frontend/img/icons/customer_services.svg')}}" alt="">

              </div>

              <h5>Thông tin phòng trọ</h5>

            </div>

          </div>

          <div class="col-md-6 col-lg-4 col-xl-3 py-3 mb-3">

            <div class="text-center">

              <div class="img-fluid mb-4">

                <img src="{{asset('frontend/img/icons/product_design.svg')}}" alt="">

              </div>

              <h5>Sản phẩm</h5>

            </div>

          </div>



          <div class="col-md-6 col-lg-4 col-xl-3 py-3 mb-3">

            <div class="text-center">

              <div class="img-fluid mb-4">

                <img src="{{asset('frontend/img/icons/data_analyst.svg')}}" alt="">

              </div>

              <h5>Điều khoản sử dụng</h5>

            </div>

          </div>



        </div>

      </div> <!-- .container -->

    </div> <!-- .page-section -->

    <div class="container"  >

      <hr style="background-color:rgb(228,63, 125);">

    </div>

    <div class="container" style="background-color: rgb(245, 240, 240);">

      <h5 style="color: rgb(238, 77, 45);">Bài viết thịnh hành</h5>

      <div class="row">

        



        <div class="col-sm-8 page_anh">

          @foreach($post_trending as $trending)

            <div class="tranding_left">

                <div class="hinhanh">

              <a href="{{asset('posts/show/').'/'.$trending->id}}"><img src="{{asset('img/post/').'/'.$trending->img}}"></a>

            </div>

            <div class="tieude">

              <p><a href="{{asset('posts/show/').'/'.$trending->id}}">{{$trending->post_name}}</a></p>

              <p>time: {{$trending->updated_at}}</p>

            </div>

          </div>

          @endforeach

       

          

        </div>



        <div class="col-sm-4" style="float: left;">

          <h5 style="color:rgb(52, 168,83);"><i style="font-size: 25px; color: red;" class="fas fa-fire-alt"></i> Top bài viết hàng đầu </h5>

          <hr>

          <div class="toptitle">

            @foreach($postdata as $post)

            <p> <a href="{{asset('posts/show/').'/'.$post->id}}">{{$post->post_name}}</a></p>

            @endforeach

          </div>     

        </div>

      </div>

    </div>

   

   

      <div class="container" style="background-color: rgb(245, 240, 240); margin-top: 7px;">

           <div class="text-center">

          <div class="subhead">Bài Viết</div>

          <h2 class="title-section" style="color: rgb(238, 77, 45);">Tác Giả Nổi Bật</h2>

        </div>

        <div class="row">

          @foreach($profiles as $p)

          @if($p->ban ==0 && $p->trending == 1)

          <div class="col-sm-3 tacgia_noibat">

           <div class="author_trend"><a href="{{asset('home/page/').'/'.$p->user_id}}">

              <div class="profile_auth">

                <img src="{{asset('img/profiles/').'/'.$p->image}}" alt="">

              </div>

            </a>



              <div class="tieudeauth">

               <p><a href="{{asset('home/page/').'/'.$trending->id}}">{{$p->full_name}}</a></p>

                <div style="text-align: center;" class="text-sm fg-grey">{{$p->jobs}}</div>

                 </div>     

               </div>

            </div>

            @else

            @endif

            @endforeach



        </div>



      </div> <!-- .container -->



      <div class="container" style="background-color: rgb(245, 240, 240); margin-top: 7px;">

        <div class="row">

          <div class="col-sm-12 .tieudemuaban" >

            <h2  style="display: block; text-align: center; color: rgb(238, 77, 45);">Danh Mục Mua Bán</h2>

            <p style="color: rgb(11, 77, 45);font-weight: bolder; font-size: 19px; display: inline-block; float: left;">Sản Phẩm Hot Hôm nay</p>

            <p><a class="fg-primary" style="text-decoration:none;font-weight: bolder; font-size: 19px; display: inline-block; float:right;" 

              href="{{asset('products')}}">Xem tất cả <i class="fas fa-angle-double-right"></i></a></p>

          </div>

          <div class="col-sm-12 .sanpham">

            @foreach($productdata as $p)

            @if($p->trending == 1)

              <div class="sanpham_box" style="float: left;">

                <div class="hinhanh_sp"><a href="{{asset('products/detail/').'/'.$p->id}}">

                  <img src="{{asset('dataImg/product/').'/'.$p->img}}">

                  </a>

                </div>

                <div class="tieudesp">

                  <a style="text-decoration: none; font-weight: bolder;" href="{{asset('products/detail/').'/'.$p->id}}">

                    <p style="display: block; margin: 0; padding-top: 2px;">{{$p->product_name}}</p>

                  </a>

                  <p style="color: rgb(238, 77, 45);display: block; margin: 0; padding-top: 2px;">Giá: {{$p->price}} đ</p>

                  <p style="color: rgb(200, 200, 200);display: block; margin: 0; padding-top: 2px;">Time: {{$p->updated_at}}</p>

                </div>

              </div> 

              @else

              @endif

              @endforeach



          </div>

        </div>

      </div>



           <div class="container" style="background-color: rgb(245, 240, 240); margin-top: 7px;">

           <div class="text-center">

          <div class="subhead">Phòng trọ</div>

          <h2 class="title-section" style="color: rgb(238, 77, 45);">Phòng trọ nổi bật</h2>

        </div>

        <div class="row">

          @foreach($moteldata as $p)

          @if($p->trending == 1)

          <div class="col-sm-3 tacgia_noibat">

           <div class="author_trend"><a href="{{asset('motels/show/').'/'.$p->id}}">

              <div class="profile_auth">

                <img src="{{asset('img/motel/').'/'.$p->img}}" alt="">

              </div>

              </a>

              <div class="tieudeauth">

               <p><a href="{{asset('motels/show/').'/'.$p->id}}">{{$p->motel_name}}</a></p>

                <div style="text-align: center;" class="text-sm fg-grey">{{$p->updated_at}}</div>

                 </div>     

               </div>

            </div>

            @else

            @endif

            @endforeach



        </div>



      </div> 



      <br>

   

    <!-- Testimonials -->

    

  </main>

@endsection