 
@extends('layout')
@section('content')
<style type="text/css">
    .bx-controls-direction {
    display: none;
}
    </style>
 
                <div class="content">

                    <!-- Start Content-->
                    <div class="container">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Phòng trọ</a></li>
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Chi Tiết </a></li>
                                          
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Chi tiết phòng trọ: {{$motel->motel_name}}</h4>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="property-detail-wrapper">
                            <div class="row">
                                <div class="col-lg-8">
                                    <div class="">
                                        <ul class="bxslider property-slider" style="overflow: hidden;">
                                            <li><img style="max-width: 600px;max-height: 600px;" src="{{asset('img/motel/')}}/{{$motel->img}}" alt="slide-image"></li>
                                            <li><img  style="max-width: 600px;max-height: 600px;" src="{{asset('img/motel/')}}/{{$motel->img1}}" alt="slide-image"></li>
                                            <li><img  style="max-width: 600px;max-height: 600px;" src="{{asset('img/motel/')}}/{{$motel->img2}}" alt="slide-image"></li>
                                            <li><img  style="max-width: 600px;max-height: 600px;" src="{{asset('img/motel/')}}/{{$motel->img3}}" alt="slide-image"></li>
                                        </ul>

                                        <div id="bx-pager" class="text-center hide-phone">
                                            <a data-slide-index="0" href=""><img src="{{asset('img/motel/')}}/{{$motel->img}}" alt="slide-image" height="70"></a>
                                            <a data-slide-index="1" href=""><img src="{{asset('img/motel/')}}/{{$motel->img1}}" alt="slide-image" height="70"></a>
                                            <a data-slide-index="2" href=""><img src="{{asset('img/motel/')}}/{{$motel->img2}}" alt="slide-image" height="70"></a>
                                            <a data-slide-index="3" href=""><img src="{{asset('img/motel/')}}/{{$motel->img3}}" alt="slide-image" height="70"></a>
                                        </div>
                                    </div>
                                    <!-- end slider -->

                                    <div class="mt-4">
                                        <h4>{{$motel->motel_name}}</h4>
                                        <p class="text-muted text-overflow"><i class="mdi mdi-map-marker-radius mr-2"></i>{{$motel->map}}</p>

                                        <p class="mt-3">
                                           {!!$motel->description!!}
                                        </p>

                                     

                                        </div>
                                        <!-- end row -->

                                        

                                    
                                    <!-- end m-t-30 -->

                                </div>
                                <div class="col-lg-4">
                              
                                    <div class="text-center card-box">
                                        <div class="text-left">
                                            <h4 class="header-title mb-4">Thông tin</h4>
                                       
                                        @foreach($profiles as $pr)
                                        @if($pr->user_id == $motel->id_user)
                                        <div class="member-card">
                                            <div class="avatar-xl member-thumb mb-2 mx-auto d-block">
                                                <img src="{{asset('img/profiles/')}}/{{$pr->image}}" class="rounded-circle img-thumbnail" alt="profile-image">
                                                <i class="mdi mdi-star-circle member-star text-success" title="Featured Agent"></i>
                                            </div>

                                            <div class="">
                                                <h5 class="font-18 mb-1">{{$pr->full_name}}</h5>
                                                <p class="font-14">
                                                    <i class="fa fa-star text-warning"></i>
                                                    <i class="fa fa-star text-warning"></i>
                                                    <i class="fa fa-star text-warning"></i>
                                                    <i class="fa fa-star text-warning"></i>
                                                    <i class="fa fa-star text-warning"></i>
                                                    <span>(29)</span>
                                                </p>
                                            </div>

                                            <div class="mt-20">
                                                <ul class="list-inline">
                                                    <li class="list-inline-item">
                                                        <h4>84</h4>
                                                        <p>Listed Properties</p>
                                                    </li>

                                                    <li class="list-inline-item ml-3">
                                                        <h4>58</h4>
                                                        <p>Sale Properties</p>
                                                    </li>
                                                </ul>
                                            </div>

                                            <a href="{{asset('home/page/')}}/{{$pr->user_id}}"><button type="button" class="btn btn-brown btn-rounded waves-effect mb-3 waves-light">Tới trang cá nhân</button>

                                        </div>
                                        @else
                                        @endif
                                        @endforeach


                                        <!-- end membar card -->
                                    </div>
                                    <!-- end card-box -->

                                    <div class="card-box">
                                        <div class="table-responsive">
                                            <table class="table table-bordered mb-0">
                                                <tbody>
                                                    <tr>
                                                        <th scope="row">Price</th>
                                                        <td>{{$motel->price}}</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Diện tích</th>
                                                        <td><span class="label label-danger">{{$motel->area}}</span></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Địa chỉ</th>
                                                        <td>{{$motel->map}}</td>
                                                    </tr>
                                                   
                                                    
                                                </tbody>
                                            </table>
                                        </div>

                                    </div>
                                    <!-- end card-box -->

                                </div>
                                <!-- end col -->

                                <!-- end col -->
                            </div>
                           
                            <!-- end row -->
                        </div>
                        <!-- end property-detail-wrapper -->

                    </div>
                    <!-- end container-fluid -->

                </div>
                <!-- end content -->

                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">

                                            <div class="mt-5 blog-post-comment">
                                                <h5 class="text-uppercase mb-4">Comments <small>()</small></h5>
                                            @foreach($commentss as $cmt)
                                            @foreach($profiles as $pro)
                                            @if($cmt->stt == $id_request && $pro->user_id ==$cmt->user_id)
                                          <!--   stt là vị trí sản phẩm -->
                                                <ul class="media-list pl-0">

                                                    <li class="media">
                                                        <a class="mr-2" href="{{asset('home/page/').'/'.$pro->user_id}}">
                                                            <img class="media-object rounded-circle" src="{{asset('img/profiles/').'/'.$pro->image}}" alt="img">
                                                        </a>
                                                        <div class="media-body">
                                                            <a href="{{asset('home/page/').'/'.$pro->user_id}}"><h5 class="font-18 media-heading mt-0">{{$pro->full_name}}</h5></a>
                                                            
                                                           <p>{{$cmt->comment}}</p>
                                                        </div>
                                                    </li>

                                                 
                                                </ul>
                                                @else
                                                @endif
                                                @endforeach
                                                @endforeach

                                                <h5 class="text-uppercase mt-5 mb-4">Bình luận</h5>
                                                @if(Auth::check())
                                                  @foreach($profiles as $pro)
                                                  @if($pro->user_id == auth()->user()->id)
                                                <form action="{{asset('motels/add-motel-comment/'.$motel->id)}}" method="POST">
                                                    @csrf
                                                     <a class="mr-2" href="{{asset('home/page/').'/'.$pro->user_id}}">
                                                            <img style="max-width: 160px; max-height: 160px;" class="media-object rounded-circle" src="{{asset('img/profiles').'/'.$pro->image}}" alt="img">
                                                        </a>
                                                
                                                    <div class="form-group">
                                                        <textarea class="form-control" id="message2" name="message" rows="5" placeholder="Message" required=""></textarea>
                                                    </div>
                                                    <div>
                                                        <input type="text" hidden name="stt" value="{{$motel->id}}">
                                                    </div>
                                                    <!-- /Form Msg -->
                                                   <input type="" name="id_user" hidden value="{{auth()->user()->id}}">
                                                    <div class="row">
                                                        <div class="col-12">
                                                           
                                                                <button type="submit" class="btn btn-primary" id="send">Bình luận</button>
                                                          
                                                        </div>
                                                        <!-- /col -->
                                                    </div>
                                                    <!-- /row -->

                                                </form>
                                                @else
                                                @endif
                                                @endforeach
                                                  
                                                @else
                                                <p>Vui lòng <a href="{{route('form-login-user')}}">Đăng Nhập</a> 
                                                    hoặc <a href="{{route('form-register-user')}}">Đăng Kí </a> để viết bình luận</p>
                                                @endif
                                                    <p><i> Nếu không thể bình luận vui lòng cập nhật lại thông tin tại trang cá nhân</i></p>
                                            </div>

                </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                         @foreach($motel1 as $mt)
                                             
                                                   <div class="col-sm-4">
                                                    <div class="property-card card">
                                                        <div class="property-image" style="overflow: hidden;">
                                                             <a href="{{asset('motels/show')}}/{{$mt->id}}"><img style="max-height: 180%" src="{{asset('img/motel/')}}/{{$mt->img}}">
                                                            <span class="property-label badge badge-warning">Nhà ở</span>
                                                        </a>
                                                        </div>

                                                        <div class="property-content card-body">
                                                            <div class="listingInfo">
                                                                <div class="">
                                                                    <h5 class="font-18 text-success mt-0">${{$mt->price}}</h5>
                                                                </div>
                                                                <div class="">
                                                                    <h5 class="text-overflow"><a href="#" class="text-dark">{{$mt->motel_name}}</a></h5>
                                                                    <p class="text-muted text-overflow"><i class="mdi mdi-map-marker-radius mr-2"></i>{{$mt->map}}</p>

                                                          

                                                                    <div class="mt-3">
                                                                         <a href="{{asset('motels/show')}}/{{$mt->id}}">
                                                                        <button type="button" class="btn btn-success btn-block waves-effect waves-light">View Detail</button>
                                                                    </a>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                            <!-- end. Card actions -->
                                                        </div>
                                                        <!-- /inner row -->
                                                    </div>
                                                    <!-- End property item -->
                                                </div>
                                               
                                                @endforeach
                    </div>
                </div>
                


     
            @endsection