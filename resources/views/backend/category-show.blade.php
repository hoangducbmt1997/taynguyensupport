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
                                                <h4 class="header-title">Danh Mục</h4>
                                               

                                                <div class="table-responsive">
                                                    <table class="table m-0">

                                                        <thead>
                                                            <tr>
                                                                <th>ID</th>
                                                                <th>First Name</th>
                                                                <th>Last Name</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach($catelist as $cate)
                                                            <tr>
                                                                <th scope="row">{{$cate->id}}</th>
                                                                <td>{{$cate->category_name}}</td>
                                                                <td>{{$cate->category_slug}}</td>
                                                              <td><a href="{{asset('administrator/show-edit-categories/'.$cate->id)}}"class="btn btn-primary">Sửa</a> 
                                                                <a href="{{asset('administrator/delete-category'.'/'.$cate->id)}}"class="btn btn-danger">Xóa</a>
                                                              </td>
                                                             

                                                            </tr>
                                                             @endforeach
                                                           
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <a href="{{route('form-category')}}" class="btn btn-success">Thêm Danh mục</a>
                                            </div>
                                        </div>
                           
                    </div>
                </div>
      
@endsection
   