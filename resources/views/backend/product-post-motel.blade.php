@extends('layout-admin')
@section('content')


                    <!-- Start Content-->
                    <div class="container">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                    
                                    </div>
                                    <h4 class="page-title">Danh Mục </h4>
                                    @if(session('editsucces'))
                                    {{session('editsucces')}}
                                    @endif
                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                           <div class="col-lg-1"></div>
                                           <div class="col-lg-10">
                                                            <div class="demo-box p-2">
                                                                <h4 class="header-title">Sản Phẩm</h4>
                                                               

                                                <div class="table-responsive">
                                                    <table class="table m-0">

                                                        <thead>
                                                            <tr>
                                                                <th>ID</th>
                                                                <th>Tên Sản Phẩm</th>
                                                                <th>Duyệt bài</th>
                                                                <th>HOT</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach($productss as $pro)
                                                            <tr>
                                                                <th scope="row">{{$pro->id}}</th>
                                                                <td>{{$pro->product_name}}</td>
                                                                <td>
                                                                    @if($pro->action==1)
                                                                    <p>Đã Duyệt</p>
                                                                    @else
                                                                    <p>Không</p>
                                                                    @endif
                                                                </td>
                                                                <td> @if($pro->trending==1)
                                                                    <p>trending</p>
                                                                    @else
                                                                    <p>Không</p>
                                                                 @endif
                                                             </td>

                                                                 <td><a href="{{asset('administrator/deleteData'.'/'.$pro->id)}}"class="btn btn-danger">Xóa</a>
                                                                <a href="{{asset('administrator/editProduct'.'/'.$pro->id)}}"class="btn btn-danger">Sửa</a>
                                                              </td>
   
                                                            </tr>

                                                             @endforeach
                                                           
                                                        </tbody>
                                                    </table>
                                                </div>
                                                
                                            </div>
                                        </div>
                           
                    </div>
                      <h4 class="page-title">Danh Mục </h4>
                      <div class="row">
                           <div class="col-lg-1"></div>
                           <div class="col-lg-10">
                                            <div class="demo-box p-2">
                                                <h4 class="header-title">Bài viết</h4>
                                               

                                                <div class="table-responsive">
                                                    <table class="table m-0">

                                                        <thead>
                                                            <tr>
                                                                <th>ID</th>
                                                                <th>Tên Sản Phẩm</th>
                                                                <th>Duyệt bài</th>
                                                                <th>HOT</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach($postdata as $pro)
                                                            <tr>
                                                                <th scope="row">{{$pro->id}}</th>
                                                                <td style="width: 30%">{{$pro->post_name}}</td>
                                                                <td>
                                                                    @if($pro->action==1)
                                                                    <p>Đã duyệt</p>
                                                                    @else
                                                                    <p>Không</p>
                                                                    @endif
                                                                </td>
                                                                <td> @if($pro->trending==1)
                                                                    <p>trending</p>
                                                                    @else
                                                                    <p>Không</p>
                                                                 @endif
                                                             </td>

                                                                 <td><a href="{{asset('administrator/deleteDataPost'.'/'.$pro->id)}}"class="btn btn-danger">Xóa</a>
                                                                <a href="{{asset('administrator/editPost'.'/'.$pro->id)}}"class="btn btn-danger">Sửa</a>
                                                              </td>
   
                                                            </tr>

                                                             @endforeach
                                                           
                                                        </tbody>
                                                    </table>
                                                </div>
                                                
                                            </div>
                                        </div>

                           
                    </div>
                      <h4 class="page-title">Danh Mục </h4>
                    <div class="row">
                          <div class="col-lg-1"></div>
                           <div class="col-lg-10">
                                            <div class="demo-box p-2">
                                                <h4 class="header-title">Phòng trọ</h4>
                                               

                                                <div class="table-responsive">
                                                    <table class="table m-0">

                                                        <thead>
                                                            <tr>
                                                                <th>ID</th>
                                                                <th>Tên Sản Phẩm</th>
                                                                <th>Trending</th>
                                                                <th>Trạng thái</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach($moteldata as $pro)
                                                            <tr>
                                                                <th scope="row">{{$pro->id}}</th>
                                                                <td>{{$pro->motel_name}}</td>
                                                                <td> @if($pro->trending==1)
                                                                    <p>trending</p>
                                                                    @else
                                                                    <p>Không</p>
                                                                 @endif
                                                             </td>
                                                                <td>
                                                                    @if($pro->action==1)
                                                                    <p>Đã Duyệt</p>
                                                                    @else
                                                                    <p>Không</p>
                                                                    @endif
                                                                </td>
                                                            

                                                                 <td><a href="{{asset('administrator/deleteDataMotel'.'/'.$pro->id)}}"class="btn btn-danger">Xóa</a>
                                                                <a href="{{asset('administrator/editMotel'.'/'.$pro->id)}}"class="btn btn-danger">Sửa</a>
                                                              </td>
   
                                                            </tr>

                                                             @endforeach
                                                           
                                                        </tbody>
                                                    </table>
                                                </div>
                                                
                                            </div>
                                        </div>
                    </div>
                     <h4 class="page-title">Danh Mục </h4>
                    <div class="row">
                          <div class="col-lg-1"></div>
                           <div class="col-lg-10">
                                            <div class="demo-box p-2">
                                                <h4 class="header-title">User</h4>
                                               

                                                <div class="table-responsive">
                                                    <table class="table m-0">

                                                        <thead>
                                                            <tr>
                                                                <th>ID</th>
                                                                <th>Tên User</th>
                                                                <th>Nổi bật</th>
                                                                <th>Banned</th>
                                                                <th>Hành động</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach($profiles as $pro)
                                                            <tr>
                                                                <td>{{$pro->id}}</td>
                                                                <th scope="row">{{$pro->full_name}}</th>
                                                            
                                                            
                                                                
                                                                <td> @if($pro->trending==1)
                                                                    <p>trending</p>
                                                                    @else
                                                                    <p>Không</p>
                                                                 @endif
                                                             </td>
                                                             <td> @if($pro->ban ==0)
                                                                    <p>Sẵn sàng</p>
                                                                    @else
                                                                    <p>banned</p>
                                                                 @endif
                                                             </td>

                                                                 <td>
                                                                <a href="{{asset('administrator/editprofiles'.'/'.$pro->id)}}"class="btn btn-danger">Sửa</a>
                                                              </td>
   
                                                            </tr>

                                                             @endforeach
                                                           
                                                        </tbody>
                                                    </table>
                                                </div>
                                                
                                            </div>
                                        </div>
                    </div>

                </div>
      
@endsection
