 
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
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Phòng Trọ</a></li>
                            
                                            <li class="breadcrumb-item active">Add</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Thêm sản phẩm </h4>
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
                                        <form action="{{route('add-motel')}}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                       <div class="form-group">
                                            <label>Tên Phòng Trọ</label>
                                            <input required type="text" class="form-control" data-toggle="input-mask" onkeyup="ChangeToSlug();" 
                                            name="motel_name" id="slug" data-mask-format="00/00/0000">
                                           
                                        </div>
                                        <div class="form-group">
                                            <input  type="text" hidden name="motel_slug" class="form-control" data-toggle="input-mask" id="convert_slug" data-mask-format="00:00:00">
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group mb-4">
                                                <label >Tiêu đề </label>
                                                <input type="text" name="title" class="form-control" id="exampleInputEmail1" placeholder="Enter title">
                                                </div>
                                            </div>
                                              <div class="col-lg-6">
                                                <div class="form-group mb-4">
                                                <label >Diện tích </label>
                                              <select required name="dientich" class="form-control">
                                                    <option value="15-25m²">15-25m²</option>
                                                    <option value="25-50m²">25-50m²</option>
                                                    <option value="50-75m²">50-75m²</option>
                                                    <option value="Lớn hơn 75m²">Lớn hơn 75m²</option>
                                                       </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                  <div class="form-group mb-4">
                                                <label class="mb-2">Danh mục</label>
                                                <br>
                                                <div class="radio radio-info form-check-inline pl-2">
                                                    <select required name="cate_id" class="form-control">
                                                    @foreach($catelist as $cate)
                                                    @if($cate->parent_id == 1)
                                                    <option value="{{$cate->id}}">{{$cate->category_name}} </option>
                                                    @else
                                                    @endif
                                                    @endforeach
                                                       </select>
                                                    </div>
                                                </div>
                                                </div>
                                                </div>
                                        
                                          
                                            <div class="form-group">
                                                <label>Mô tả sản phẩm</label>
                                                 <textarea  rows="8" class="form-control" name="description" id="editor1" placeholder="Nhập mô tả sản phẩm"></textarea>
                                                
                                            </div>
                                             <label >Hình ảnh</label>
                                              <img id="avatar" class="thumbnail" width="200px" src="">
                                            <div class="form-group ">
                                               
                                               
                                                <input  id="img" type="file" name="image" class="form-control" onchange="changeImg(this)">
                                                <input  id="img1" type="file" name="image1" class="form-control" onchange="changeImg(this)">
                                                <input  id="img2" type="file" name="image2" class="form-control" onchange="changeImg(this)">
                                                <input  id="img3" type="file" name="image3" class="form-control" onchange="changeImg(this)">
                                               
                                            </div>
                                            <div class="row">
                                             
                                                <div class="col-lg-3">
                                                      <div class="form-group mb-2">
                                                <label >Giá: </label>
                                                <input type="text" name="price" class="form-control" id="exampleInputEmail1" placeholder="Giá">
                                                </div>
                                                </div>
                                                
                                                     
                                        <div class="form-group mb-">
                                                <label >Địa chỉ: </label>
                                                <input type="text" name="map" class="form-control" id="exampleInputEmail1" placeholder="Địa chỉ">
                                        </div>
                                                </div>
                                            </div>
                                        
                                      <button type="submit" class="btn btn-success">Đăng bài</button>
                                            <a href="{{route('motel-page')}}" type="button" class="btn btn-danger">Trở lại</a>


                                          
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