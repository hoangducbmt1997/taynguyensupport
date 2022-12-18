@extends('layout')
@section('content')

<div class="content">
	
		<div class="container">
			  <div class="row">
               
               
                            <div class="col-sm-9">
                                <div class="card-box">
                                  
                                  <div class=" col-sm-8"> <h4 class="header-title mb-4">Tìm Kiếm</h4> </div>
                                  <br>
                                  <div class="row blog-column-wrapper">

                                

                            @foreach($post_search as $post)
                              

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
                                       
                                    @endforeach
                                        <!-- end col -->

                                    </div>
                             
                                </div>
                            </div>
                             <div class="col-sm-3">
                                <div class="p-4">

                                    <div class="">
                                        <h5 class="text-uppercase mb-3">Search</h5>
                                        <form role="Search" class="form-group search-box" method="get" action="{{asset('search-p/')}}" >
                                                <input  type="text" id="search-input" class="form-control" name="Key_search" placeholder="Search here...">
                                              <button type="submit" class="btn btn-search"><i class="fa fa-search"></i></button>
                                        </form>
                                    </div>

                                    <div class="mt-4">
                                        <h5 class="text-uppercase mb-3">Sản Phẩm</h5>

                                        <ul class="blog-categories-list list-unstyled">
                                            @foreach($catelist as $list)
                                            @if($list->parent_id==2)
                                            <li><a href="{{asset('products/list-user/').'/'.$list->id}}">{{$list->category_name}}</a></li>
                                            @else
                                            @endif
                                            @endforeach
                                        </ul>
                                    </div>
                                    <div class="mt-4">
                                        <h5 class="text-uppercase mb-3">Phòng Trọ</h5>

                                        <ul class="blog-categories-list list-unstyled">
                                            @foreach($catelist as $list)
                                            @if($list->parent_id==1)
                                            <li><a href="{{asset('motels/list-user/').'/'.$list->id}}">{{$list->category_name}}</a></li>
                                            @else
                                            @endif
                                            @endforeach
                                        </ul>
                                    </div>
                                    <div class="mt-4">
                                        <h5 class="text-uppercase mb-3">Bài Viết</h5>

                                        <ul class="blog-categories-list list-unstyled">
                                            @foreach($catelist as $list)
                                            @if($list->parent_id==3)
                                            <li><a href="{{asset('posts/list-user/').'/'.$list->id}}">{{$list->category_name}}</a></li>
                                            @else
                                            @endif
                                            @endforeach
                                        </ul>
                                    </div>

                                </div>
                            </div>
             	</div>

		</div>
</div>

@endsection