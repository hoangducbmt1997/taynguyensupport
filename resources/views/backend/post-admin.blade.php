@extends('layout-admin')
@section('content')
  <div class="container">
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
                                    </div>
@endsection