 
@extends('layout')
@section('content')

 <div class="content-page">
                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">


                        <div class="row justify-content-center">
                            <div class="col-lg-9">
                                <div class="row">
                                    <div class="col-lg-8">
                                    	 <h4 class="page-title">Chi tiết</h4>
                                        <div class="p-4">

                                            <!-- Image Post -->
                                            <div class="card blog-post bg-transparent">
                                                <div class="post-image">
                                                    <img src="{{asset('dataImg/product/').'/'.$products->img}}" alt="" class="img-fluid mx-auto d-block rounded-top">
                                                    <span class="badge badge-danger">Lifestyle</span>
                                                </div>

                                                <div class="card-body" style="overflow: hidden;">
                                                    <div class="text-muted"><span> date</span> <span>{{$products->updated_at}}</span></div>

                                                    <div class="post-title">
                                                        <h5><a href="javascript:void(0);">{{$products->product_name}}</a></h5>
                                                    </div>
                                                    <div>
                                                       
                                                       
                                                     {!!$products->description!!}
                                                       
                                                    </div>
                                                </div>
                                                 <div class="post-title mr-1">

                                                        @foreach($catelist as $cate)
                                                        @if($cate->id == $products->category_id)
                                                        <p>Danh mục: {{$cate->category_name}}</p>   
                                                        @else
                                                        @endif    
                                                        @endforeach           
                                                   
                                                       <p>Số Điện Thoại: {{$products->phone}}</p>
                                                        <p>Địa Chỉ: {{$products->address}}</p>
                                                 </div>

                                         

                                            </div>
                                             <a href="{{route('product-page')}}">
                                                <div class="btn btn-primary"> Quay lại</div>
                                                </a>
                                              
                                               
                                                </a>

                                            <div class="mt-5">
                                                <h5 class="text-uppercase mb-4">Tác giả</h5>


                                                  @foreach($profiles as $author)
                                                  @if($author->user_id == $products->id_user)
                                                <div class="media">
                                                    <div class="media-left mr-2">
                                                        <a href="{{asset('home/page/').'/'.$author->user_id}}"> <img style="max-width: 120%; max-height: 180px;" class="rounded mr-2 avatar-xl" alt="64x64" src="{{asset('img/profiles/')}}/{{$author->image}}"> </a>
                                                    </div>
                                                    <div class="media-body">
                                                        <h5 class="font-18 media-heading mt-0">{{$author->full_name}}</h5>
                                                        <p class="mb-2">
                                                           Xin chào mình là {{$author->full_name}} hiện đang công tác tại {{$author->jobs}}
                                                        </p>

                                                        <a href="{{asset('home/page/').'/'.$author->user_id}}" class="btn btn-xs btn-success waves-light waves-effect">View Profile</a>
                                                    </div>
                                                </div>
                                                @else
                                                @endif
                                                @endforeach

                                            </div>

                                            <hr>

                                            <div class="mt-5 blog-post-comment">
                                                <h5 class="text-uppercase mb-4">Comments <small>()</small></h5>
                                            @foreach($commentss as $cmt)
                                            @foreach($profiles as $pro)
                                            @if($cmt->stt == $id_request && $pro->user_id ==$cmt->user_id)
                                          <!--   stt là vị trí sản phẩm -->
                                                <ul class="media-list pl-0">

                                                    <li class="media">
                                                        <a class="mr-2" href="{{asset('home/page/').'/'.$pro->id}}">
                                                            <img class="media-object rounded-circle" src="{{asset('img/profiles/').'/'.$pro->image}}" alt="img">
                                                        </a>
                                                        <div class="media-body">
                                                            <a href="{{asset('home/page/').'/'.$pro->id}}"><h5 class="font-18 media-heading mt-0">{{$pro->full_name}}</h5></a>
                                                            
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
                                                <form action="{{asset('products/add-product-comment/'.$products->id)}}" method="POST">
                                                    @csrf
                                                     <a class="mr-2" href="{{asset('home/page/').'/'.$products->id}}">
                                                            <img style="max-width: 160px; max-height: 160px;" class="media-object rounded-circle" src="{{asset('img/profiles').'/'.$pro->image}}" alt="img">
                                                        </a>
                                                
                                                    <div class="form-group">
                                                        <textarea class="form-control" id="message2" name="message" rows="5" placeholder="Message" required=""></textarea>
                                                    </div>
                                                    <div>
                                                        <input type="text" hidden name="stt" value="{{$products->id}}">
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
                                            <!-- end m-t-50 -->

                                        </div>
                                        <!-- end p-20 -->
                                    </div>
                                    <!-- end col -->

                                    <div class="col-lg-4">
                                        <div class="p-4">

                                            <div class="">
                                                <h5 class="text-uppercase mb-4">Search</h5>
                                               <form role="Search" class="form-group search-box" method="get" action="{{asset('search/')}}" >
                                                <input  type="text" id="search-input" class="form-control" name="Key_search" placeholder="Search here...">
                                              <button type="submit" class="btn btn-search"><i class="fa fa-search"></i></button>
                                            </form>
                                            </div>
                                            <div class="mt-5">
                                        <h5 class="text-uppercase mb-3">Danh mục tương tự</h5>

                                        <ul class="blog-categories-list list-unstyled">
                                            @foreach($catelist as $list)
                                            @if($list->parent_id==2)
                                            <li><a href="{{asset('products/list-user/').'/'.$list->id}}">{{$list->category_name}}</a></li>
                                            @else
                                            @endif
                                            @endforeach
                                        </ul>
                                    </div>

                                               <div class="mt-5">
                                        <h5 class="text-uppercase mb-4">Sản phẩm liên quan</h5>
                                        @foreach($productdata as $product)
                                        <div class="media latest-post-item mt-3">
                                            <div class="media-left mr-2">
                                                <a href="{{asset('products/detail/').'/'.$product->id}}"> <img class="rounded" alt="64x64" src="{{asset('dataImg/product/').'/'.$product->img}}" style="width: 160px; height: 120px;"> </a>
                                            </div>
                                            <div class="media-body">
                                                <h5 class="media-heading mt-0 mb-1"><a href="{{asset('products/detail/').'/'.$product->id}}" class="text-muted font-15">{{$product->product_name}}</a> </h5>
                                                <p class="font-12 text-muted">
                                                    {{$product->updated_at}} | John Deo
                                                </p>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                            </div>
                                            
                                            
                                        </div>
                                    </div>
                                    <!-- end row -->
                                </div>
                            </div>

                        </div>
                        <!-- end container-fluid -->
                    </div>

                </div>
                <!-- end content -->

                


@endsection