@extends('layout')
@section('content')


                <div class="content">

                    <!-- Start Content-->
                    <div class="container">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Bài Viết</a></li>
                                            
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Bài viết gần đây</h4>
                                      <a href="{{route('post-page-add')}}">
                                                <div class="btn btn-primary"> Tạo bài viết </div>
                                                </a>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-lg-8">
                                <div class="p-4">

                                    <div class="row blog-column-wrapper">
                                

                             @foreach($post as $postpage)

                                        <div class="col-md-6">
                                            <!-- Youtube Post -->
                                            <div class="card blog-post" style="overflow: hidden;">
                                                <div class="post-image">
                                                   
                                                        <a href="{{asset('posts/show/').'/'.$postpage->id}}"><img style="max-height: 220px;  overflow: hidden; margin-top: auto; margin-left: auto;" src="{{asset('img/post/')}}/{{$postpage->img}}">
                                                        </a>
                                                   
                                                    <span class="badge badge-danger">{{$postpage->name}}</span>
                                                </div>
                                                <div class="card-body">
                                                    <div class="text-muted"><span>Viết bởi <a class="text-dark">
                                                     @foreach($users as $user)
                                                        @if($postpage->id_user == $user->id)
                                                      {{$user->full_name}}</p>   
                                                        @else
                                                        @endif    
                                                     @endforeach 
                                                 </span> <span>{{$postpage->updated_at}}</span></div>
                                                    <div class="post-title">
                                                        <h5><a   href="{{asset('posts/show/').'/'.$postpage->id}}">{{$postpage->title}}</a></h5>
                                                    </div>
                                                     <div>
                                                        @foreach($catelist as $cate)
                                                        @if($cate->id == $postpage->id_category)
                                                        <p>Danh mục: {{$cate->category_name}}</p>   
                                                        @else
                                                        @endif    
                                                        @endforeach           
                                                    </div>
                                                    <a href="{{asset('posts/show/').'/'.$postpage->id}}"><div>
                                                         {!!$postpage->Description!!}
                                                    </div></a>
                                                    
                                                    <div class="text-right">
                                                        <a href="{{asset('posts/show/').'/'.$postpage->id}}" class="btn btn-success btn-sm waves-effect waves-light">Xem Thêm <i class="mdi mdi-arrow-right ml-1"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                        <!-- end col -->

                                    </div>
                                    <!-- end row -->

                                </div>
                            </div>
                            <!-- end col -->

                            <div class="col-lg-4">
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
                                                <li><a href="{{asset('posts/list-user/').'/'.$list->id}}">
                                                    {{$list->category_name}}</a></li>
                                                @else
                                                @endif
                                                @endforeach
                                           
                                           
                                        </ul>
                                    </div>

                                    <div class="mt-5">
                                        <h5 class="text-uppercase mb-4">Bài Viết</h5>

                                        @foreach($post as $post_a)
                                      

                                      
                                        <div class="media latest-post-item mt-3">
                                            <div class="media-left mr-2">
                                                  <a href="{{asset('posts/show/').'/'.$postpage->id}}"><img style="max-height: 80px;  overflow: hidden;" src="{{asset('img/post/')}}/{{$post_a->img}}">
                                                        </a>
                                            </div>
                                            <div class="media-body">
                                                <h5 class="media-heading mt-0 mb-1"><a href="{{asset('posts/show/').'/'.$postpage->id}}" class="text-muted font-15">{{$post_a->title}}</a> </h5>
                                                <p class="font-12 text-muted">
                                                    {{$post_a->updated_at}}  |
                                                   by @foreach($users as $user)
                                                        @if($post_a->id_user == $user->id)
                                                      {{$user->full_name}}</p>   
                                                        @else
                                                        @endif    
                                                     @endforeach 
                                                </p>
                                            </div>
                                        </div>
                                        
                                        @endforeach

                                      

                                    </div>

                                    <div class="mt-5">
                                        <h5 class="text-uppercase mb-4">Newsletter</h5>

                                        <form>
                                            <div class="input-group mt-2">
                                                <input type="email" id="example-input2-group2" name="example-input2-group2" class="form-control" placeholder="Email">
                                                <span class="input-group-append">
                                                        <button type="button" class="btn waves-effect waves-light btn-primary">Submit</button>
                                                    </span>
                                            </div>
                                        </form>
                                    </div>

                                </div>
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end row -->

                    </div>
                    <!-- end container-fluid -->

                </div>
                <!-- end content -->

                

        



@endsection