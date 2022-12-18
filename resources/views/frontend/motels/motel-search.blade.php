@extends('layout')
@section('content')

<div class="content">
	
		<div class="container">
			  <div class="row">
               
               
                            <div class="col-sm-9">
                                <div class="card-box">
                                  
                                  <div class=" col-sm-8"> <h4 class="header-title mb-4">Tìm Kiếm</h4> </div>
                                  <br>
                                  <div class="col-sm-12">
                                           <div class="row">

                                     @foreach($motel_search as $mt)
                                              
                                                   <div class="col-sm-4 ">
                                                    <div class="property-card card">
                                                        <div class="property-image" style="overflow: hidden;">
                                                             <a href="{{asset('motels/show')}}/{{$mt->id}}"><img style="max-height: 250px; max-width: 120%;" src="{{asset('img/motel/')}}/{{$mt->img}}">
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
                                </div>
                            </div>
                             <div class="col-sm-3">
                                <div class="p-4">

                                    <div class="">
                                        <h5 class="text-uppercase mb-3">Search</h5>
                                       <form role="Search" class="form-group search-box" method="get" action="{{asset('search-m/')}}" >
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