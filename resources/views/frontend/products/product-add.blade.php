 
@extends('layout')
@section('content')
<link rel="shortcut icon" href="{{asset('assets\images\favicon.ico')}}">
 <link href="{{asset('assets\libs\dropify\dropify.min.css')}}" rel="stylesheet" type="text/css">

  <link href="{{asset('assets\libs\select2\select2.min.css')}}" rel="stylesheet" type="text/css">
        <!-- Summernote css -->
	<link href="{{asset('assets\libs\summernote\summernote-bs4.css')}}" rel="stylesheet" type="text/css">
<div class="container-fluid">


                        <!-- start page title -->
                      <div class="container">
                      	  <div class="row">
                        	
                            <div class="col-sm-10">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Products</a></li>
                                            <li class="breadcrumb-item active">Add</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Đăng Tin Mua- Bán </h4>
                                </div>
                            </div>
                        </div>
                      </div>
                        <!-- end page title -->
                        <div class="container">
                        	
                        	 <div class="row justify-content-center">
                            <div class="col-lg-12">
                                <div class="card-box">
                                    <div class="">
                                        <form action="{{route('add-product')}}" method="POST" enctype="multipart/form-data">
                                        	@csrf
                                             <div class="form-group">
                                            <label>Tên Danh Mục Sản phẩm</label>
                                            <input required type="text" class="form-control" data-toggle="input-mask" onkeyup="ChangeToSlug();" name="product_name" id="slug" data-mask-format="00/00/0000">
                                           
                                        </div>
                                        <div class="form-group">
                                            <input  type="text" hidden name="product_slug" class="form-control" data-toggle="input-mask" id="convert_slug" data-mask-format="00:00:00">
                                           
                                        </div>
                                            <div class="form-group mb-4">
                                                <label class="mb-2">Danh mục</label>
                                                <br>
                                                <div class="radio radio-info form-check-inline pl-2">
                                                    <select required name="cate_id" class="form-control">
                                                    @foreach($catelist as $cate)
                                                    @if($cate->parent_id ==2)
                                                    <option value="{{$cate->id}}">{{$cate->category_name}} </option>
                                                    @else
                                                    @endif
                                                    @endforeach
                                                   </select>
                                                </div>
                                            </div>
                                             <div class="form-group mb-4">
                                                <label >Giá sản phẩm </label>
                                                <input type="text" name="price" class="form-control" id="exampleInputEmail1" placeholder="Enter title">
                                            </div>

                                            <div class="form-group">
                                                <label>Mô tả sản phẩm</label>
                                                 <textarea  rows="8" class="form-control" name="description" id="editor1" placeholder="Nhập mô tả sản phẩm"></textarea>
                                                
                                            </div>
                                            <div class="form-group mb-4">
                                                <label >Hình ảnh</label>
                                                <input  id="img" type="file" name="image" class="form-control" onchange="changeImg(this)">
                                                <img id="avatar" class="thumbnail" width="200px" src="">
                                            </div>
                                             <div class="form-group mb-4">
                                                <label >Số điện thoại</label>
                                                <input type="text" class="form-control" name="phone" id="exampleInputEmail1" placeholder="Nhập số điện thoại">
                                            </div>
                                             <div class="form-group mb-4">
                                                <label >Liên hệ</label>
                                                <input type="text" name="address" class="form-control" id="exampleInputEmail1" placeholder="Nhập địa chỉ">
                                            </div>
                                           
                                            <button type="submit" class="btn btn-success">Đăng bài</button>
                                            <a href="{{route('product-page')}}" type="button" class="btn btn-danger">Trở lại</a>
                                        </form>
                                    </div>
                                </div>
                                <!-- end p-20 -->
                            </div>
                            <!-- end col -->
                        </div>
                        </div>
                       
                        <!-- end row -->

</div>
  	<script src="{{asset('assets\js\vendor.min.js')}}"></script>

        <script src="{{asset('assets\libs\select2\select2.min.js')}}"></script>

        <!-- Summernote js -->
        <script src="{{asset('assets\libs\summernote\summernote-bs4.min.js')}}"></script>

        <!-- Plugins js -->
        <script src="{{asset('assets\libs\dropify\dropify.min.js')}}"></script>

        <script src="{{asset('assets\js\pages\blog-add.init.js')}}"></script>

        <!-- App js -->	
        <script src="{{asset('assets\js\app.min.js')}}"></script>



@endsection