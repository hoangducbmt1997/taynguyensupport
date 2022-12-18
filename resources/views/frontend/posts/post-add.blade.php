 
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
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Bài Viết</a></li>
                                            <li class="breadcrumb-item active">Thêm </li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Tạo bài viết </h4>
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
                                        <form action="{{route('add-post')}}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                              <div class="form-group">
                                            <label>Bài Viết</label>
                                            <input required type="text" class="form-control" data-toggle="input-mask" onkeyup="ChangeToSlug();" name="post_name" id="slug" data-mask-format="00/00/0000">     
                                        </div>
                                        <div class="form-group">
                                            <input  type="text"  name="post_slug" class="form-control" data-toggle="input-mask" id="convert_slug" data-mask-format="00:00:00">
                                        </div>
                                         <div class="form-group mb-4">
                                                <label >Tiêu đề</label>
                                                <input type="text" class="form-control" name="title" id="exampleInputEmail1" placeholder="Enter title">
                                            </div>
                                              <div class="form-group mb-4">
                                                <label >Hình ảnh</label>
                                                <input required id="img" type="file" name="image" class="form-control" onchange="changeImg(this)">
                                                <img id="avatar" class="thumbnail" width="200px" src="">
                                            </div>
                                            <div class="form-group">
                                                <label>Bài viết</label>
                                                 <textarea cols="30" rows="8" class="form-control" name="description" id="editor2" placeholder="Nhập mô tả sản phẩm"></textarea>                                             
                                            </div>
                                             <div class="form-group mb-4">
                                                <label class="mb-2">Danh mục</label>
                                                <br>
                                                <div class="radio radio-info form-check-inline pl-2">
                                                    <select required name="id_category" class="form-control">
                                                   @foreach($catelist as $cate)
                                                    @if( $cate->parent_id ==3)
                                                    <option value="{{$cate->id}}">{{$cate->category_name}} </option>
                                                    @else
                                                    @endif
                                                    @endforeach
                                                   </select>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-success">Đăng bài</button>
                                             <a href="{{route('post-page')}}">
                                                <div class="btn btn-primary"> Quay lại</div>
                                                </a>
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