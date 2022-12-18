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
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Danh sách theo danh mục</a></li>
                                            
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

                                

                            @foreach($postdata as $post)
                                @if($post->id_category == $id_request)

                                        <div class="col-md-6">
                                            <!-- Youtube Post -->
                                            <div class="card blog-post" style="overflow: hidden;">

                                                <div class="post-image">
                                                   
                                                        <a href="{{asset('posts/show/').'/'.$post->id}}"><img style="max-height: 220px;  overflow: hidden; " src="{{asset('img/post/')}}/{{$post->img}}">
                                                        </a>
                                                   
                                                    <span class="badge badge-danger">Bài Viết</span>
                                                </div>
                                                <div class="card-body">
                                                    <strong>{{$post->post_name}}</strong>
                                                    <div class="text-muted"><span>date</span> <span>{{$post->updated_at}}</span></div>
                                                    <div class="post-title">
                                                        <h5><a href="{{asset('posts/show/').'/'.$post->id}}">{{$post->title}}</a></h5>
                                                    </div>
                                                     <div>
                                                        @foreach($catelist as $cate)
                                                        @if($cate->id == $post->category_id)
                                                        <p>Danh mục: {{$cate->category_name}}</p>   
                                                        @else
                                                        @endif    
                                                        @endforeach           
                                                    </div>
                                                    <a href="{{asset('posts/show/').'/'.$post->id}}"><div>
                                                         {!!$post->Description!!}
                                                    </div></a>
                                                    
                                                    <div class="text-right">
                                                        <a href="{{asset('posts/show/').'/'.$post->id}}" class="btn btn-success btn-sm waves-effect waves-light">Xem Thêm <i class="mdi mdi-arrow-right ml-1"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @else
                                        @endif
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