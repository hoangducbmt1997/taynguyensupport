@extends('layout')
@section('content')

<div class="content">
	
		<div class="container">
			  <div class="row">
               
               
                            <div class="col-sm-9">
                                <div class="card-box">
                                  
                                  <div class=" col-sm-8"> <h4 class="header-title mb-4">Top Sản Phẩm Hot Nhất</h4> <a href="{{route('product-page-add')}}" class="btn btn-success">Đăng tin</a></div>
                                  <br>
                                   


                                    <div class="table-responsive">

                                        <table class="table table-centered m-0">
                                            <thead class="thead-light">
                                                <tr>
                                                    <th></th>
                                                    <th>Tiêu đề</th>
                                                    <th>Danh mục</th>
                                                    <th>Giá</th>
                                                    <th></th>
                                                    
                                                    
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($productList as $pro)
                                                <tr>
                                                    <td>
                                                        <a href="{{asset('products/detail/').'/'.$pro->id}}"> <img class="rounded" alt="" src="{{asset('dataImg/product/').'/'.$pro->img}}" style="width: 240px;max-height: 200px;"> </a>
                                                    </td>

                                                    <td><a href="{{asset('products/detail/').'/'.$pro->id}}">{{$pro->product_name}}</a></td>
                                                    <td>{{$pro->category_id}}</td>
                                                    <td>{{$pro->price}} đ</td>
                                                    
                                                    <td><span class="badge badge-success"><a style="font-size:16px" href="{{asset('products/detail/').'/'.$pro->id}}">Xem Thêm</span></td>
                                                    @endforeach
                                               
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                             <div class="col-sm-3">
                                <div class="p-4">

                                    <div class="">
                                        <h5 class="text-uppercase mb-3">Search</h5>

                                        <form role="Search" class="form-group search-box" method="get" action="{{asset('search/')}}" >
                                            <input  type="text" id="search-input" class="form-control" name="Key_search" placeholder="Search here...">
                                          <button type="submit" class="btn btn-search"><i class="fa fa-search"></i></button>
                                        </form>
                                    </div>

                                    <div class="mt-4">
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
                                        <h5 class="text-uppercase mb-4">Latest Post</h5>

                                        @foreach($productdata as $proa)
                                        <div class="media latest-post-item mt-3">
                                            <div class="media-left mr-2">
                                                <a href="{{asset('products/detail/').'/'.$proa->id}}"> <img class="rounded" alt="64x64" src="{{asset('dataImg/product/').'/'.$proa->img}}" style="width: 180px; height: 120px;"> </a>
                                            </div>
                                            <div class="media-body">
                                                <h5 class="media-heading mt-0 mb-1"><a href="{{asset('products/detail/').'/'.$proa->id}}" class="text-muted font-15">{{$proa->title}}</a> </h5>
                                                <p class="font-12 text-muted">
                                                    {{$proa->updated_at}}
                                                </p>
                                                 <a href="{{asset('products/detail/').'/'.$proa->id}}"><p style="font-size: 12px;" class="btn btn-success">Xem Thêm</p></a>
                                            </div>

                                        </div>
                                        @endforeach

                                    </div>

                                 

                                </div>
                            </div>
             	</div>

		</div>
</div>

@endsection