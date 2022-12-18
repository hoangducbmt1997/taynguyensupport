@extends('layout-admin')
@section('content')
<div class="container">
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
                                                            @foreach($productdata as $pro)
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
@endsection