@extends('layout')
@section('content')


<div class="content">
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
                                         
                                            
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Danh Sách Phòng Trọ</h4>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-lg-8">
                                @foreach($motel as $motels)
                                <div class="property-card property-horizontal card">
                                    <div class="row">
                                        <div class="col-sm-4" style="max-height:280px;overflow: hidden;">
                                            <a href="{{asset('motels/show')}}/{{$motels->id}}">
                                             <div class="post-image">

                                                   <img style="max-width: 160%" src="{{asset('img/motel/')}}/{{$motels->img}}">
                                                   
                                                </div>
                                                </a>
                                        </div>
                                        <!-- /col 4 -->
                                        <div class="col-sm-8">
                                            <div class="property-content">
                                                <div class="listingInfo px-3 p-sm-0">
                                                     <span class="badge badge-danger">Mua Bán</span>
                                                    <div class="">
                                                        <a href="{{asset('motels/show')}}/{{$motels->id}}"><h5 class="font-18 text-success">{{$motels->title}}</h5></a>
                                                    </div>
                                                    <div class="">
                                                        <h5><a href="{{asset('motels/show')}}/{{$motels->id}}" class="text-dark">{{$motels->motel_name}}</a></h5>

                                                        <p class="text-muted"><i class="mdi mdi-map-marker-radius mr-1"></i>{{$motels->map}}</p>
                                                        <p class="text-muted">Diện Tích: <i class="mdi mdi-map-marker-radius mr-1"></i>{{$motels->area}}</p>
                                                    </div>
                                                </div>
                                                <a href="{{asset('motels/show')}}/{{$motels->id}}"><div class="btn btn-success">Xem sản phẩm</div></a>
                                                 <div class="float-right">
                                                        <a href="#" class="btn btn-light"><i class="far fa-heart"></i><span>Save</span></a>
                                                    </div>
                                               
                                                <!-- end. Card actions -->
                                            </div>
                                        </div>
                                        <!-- /col 8 -->
                                    </div>
                                    <!-- /inner row -->
                                </div>
                                <!-- End property item -->
                                @endforeach

                     
                            </div>
                            <!--END MAIN COL-8 -->

                            <div class="col-lg-4">
                                   <h5 class="text-uppercase mb-4 mt-0">Search</h5> 
                                <form role="Search" class="form-group search-box" method="get" action="{{asset('search-m/')}}" >
                                                <input  type="text" id="search-input" class="form-control" name="Key_search" placeholder="Search here...">
                                              <button type="submit" class="btn btn-search"><i class="fa fa-search"></i></button>
                                            </form>
                                <div class="">  
                                     <div class="row">
                                     <div class="col-lg-12"><h4>Danh mục</h4></div>
                                     
                                     <div class="col-lg-12">
                                    <ul class="blog-categories-list list-unstyled">
                                           @foreach($catelist as $cate)
                                           @if($cate->parent_id ==1 )
                                            <li><a href="{{asset('motels/list-user')}}/{{$cate->id}}">{{$cate->category_name}}</a></li>
                                            @else
                                        @endif
                                     @endforeach
                                        </ul>
                             
                                        <a class="btn btn-success" href="{{route('motel-page-add')}}">Tạo Phòng Cho Thuê Ngay</a>
                                   
                                     </div>
                                   
                                   
                                     <div class="col-lg-12">
                                        
                                    

                                        
                                    </form>
                                     </div>

                                    

                                </div>
                                <!-- end search-->
                            </div>
                            <!-- end col -->

                        </div>
                        <!-- end row -->

                    </div>
                    <!-- end container-fluid -->

                </div>
                <!-- end content -->

                


            </div>

@endsection