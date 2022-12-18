 
@extends('layout')
@section('content')

 <div class="content-page">
                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">


                        <div class="row justify-content-center">
                            <div class="col-lg-10">
                                <div class="row" >
                                    <div class="col-lg-8">
                                        <style type="text/css">
                                            img{
                                                 max-height:600px; max-width: 120%;
                                                 overflow: hidden;
                                            }
                                        </style>
                                         <h4 class="page-title">{{$post->post_name}}</h4>
                                        <div class="p-4">

                                            <!-- Image Post -->
                                            <div class="card blog-post bg-transparent">
                                                <div class="post-image">
                                                   <img style="max-width:160%; max-height: 300px;" src="{{asset('img/post/')}}/{{$post->img}}">
                                                    <span class="badge badge-danger">Bài viết</span>
                                                </div>

                                                <div class="card-body">
                                                    <div class="text-muted"><i><span>By <a class="text-dark"></a>,</span> <span>{{$post->updated_at}}</span></i></div>
                                                     <div>
                                                        <p>Tiêu đề: {{$post->title}}</p>                  
                                                    </div>
                                                     <div>
                                                        @foreach($catelist as $cate)
                                                        @if($cate->id == $post->id_category)
                                                        <p>Danh mục: {{$cate->category_name}}</p>   
                                                        @else
                                                        @endif    
                                                        @endforeach           
                                                    </div>
                                                    <hr>
                                                    <div class="post-title">
                                                    </div>
                                                    <div style="overflow: hidden;">      
                                                     {!!$post->description!!}
                                                    </div>
                                                </div>
                                            </div>
                                             <a href="{{route('post-page')}}" >
                                                <div class="btn btn-primary"> Quay lại</div>
                                                </a>
                                                
                                          

                                        </div>
                                        <!-- end p-20 -->
                                    </div>
                                    <!-- end col -->

                                    <div class="col-lg-3">
                                        <div class="p-4">

                                            <div class="">
                                                <h5 class="text-uppercase mb-4">Search</h5>
                                                 <form role="Search" class="form-group search-box" method="get" action="{{asset('search-p/')}}" >
                                                <input  type="text" id="search-input" class="form-control" name="Key_search" placeholder="Search here...">
                                              <button type="submit" class="btn btn-search"><i class="fa fa-search"></i></button>
                                        </form>
                                            </div>
                                     <div class="mt-5">
                                        <h5 class="text-uppercase mb-4">Danh Mục</h5>

                                       <ul class="blog-categories-list list-unstyled">
                                                @foreach($catelist as $list)
                                                @if($list->parent_id==3)
                                                <li><a href="{{asset('posts/list-user/').'/'.$post->id_category}}">
                                                    {{$list->category_name}}</a></li>
                                                @else
                                                @endif
                                                @endforeach
                                           
                                           
                                        </ul>
                                    </div>

                                           
                                        @foreach($postdata as $post_a)
                                        <div class="media latest-post-item mt-3">
                                            <div class="media-left mr-2">
                                                  <a href="{{asset('posts/show/').'/'.$post_a->id}}"><img style="max-height: 80px; max-width: 120px; overflow: hidden;" src="{{asset('img/post/')}}/{{$post_a->img}}">
                                                        </a>
                                            </div>
                                            <div class="media-body">
                                                <h5 class="media-heading mt-0 mb-1"><a href="{{asset('posts/show/').'/'.$post_a->id}}" class="text-muted font-15">{{$post_a->title}}</a> </h5>
                                                <p class="font-12 text-muted">
                                                    {{$post_a->updated_at}} 

                                                </p>
                                            </div>
                                        </div>
                                        @endforeach
                                         

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
  </div>
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
                                                <form action="{{asset('posts/add-post-comment/'.$post->id)}}" method="POST">
                                                    @csrf
                                                     <a class="mr-2" href="{{asset('home/page/').'/'.$post->id}}">
                                                            <img style="max-width: 160px; max-height: 160px;" class="media-object rounded-circle" src="{{asset('img/profiles').'/'.$pro->image}}" alt="img">
                                                        </a>
                                                
                                                    <div class="form-group">
                                                        <textarea class="form-control" id="message2" name="message" rows="5" placeholder="Message" required=""></textarea>
                                                    </div>
                                                    <div>
                                                        <input type="text" hidden name="stt" value="{{$post->id}}">
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
                                                    hoặc <a href="{{route('form-register-user')}}">Đăng Kí </a> và cập nhật thông tin để viết bình luận</p>
                                                @endif
                                                <p><i> Nếu không thể bình luận vui lòng cập nhật lại thông tin tại trang cá nhân</i></p>
                                            </div>

                </div>
                    </div>
                </div>
                <br>
                


          

@endsection