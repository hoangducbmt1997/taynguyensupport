     
    @extends('layout')
    @section('content')
    <link rel="shortcut icon" href="{{asset('assets\images\favicon.ico')}}">
     <link href="{{asset('assets\libs\dropify\dropify.min.css')}}" rel="stylesheet" type="text/css">

      <link href="{{asset('assets\libs\select2\select2.min.css')}}" rel="stylesheet" type="text/css">
            <!-- Summernote css -->
        <link href="{{asset('assets\libs\summernote\summernote-bs4.css')}}" rel="stylesheet" type="text/css">
    <div class="container-fluid">

                            <div class="container">
                                
                                 <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <div class="card-box">
                                        <div class="">
                                            <form action="{{asset('home/update/').'/'.auth()->user()->id}}" 
                                                method="POST" enctype="multipart/form-data">
                                                @csrf
                                                  <div class="row">
                                  
                                      <div class="col-lg-8">
                                                    <div class="form-group mb-4">
                                                    <label >Tên đầy đủ </label>
                                                    <input type="text" name="full_name" class="form-control" id="exampleInputEmail1" placeholder="Enter title">
                                                    </div>
                                                </div>
                                        
                                            
                                                <div class="col-lg-8">
                                                    <div class="form-group mb-4">
                                                    <label >Email </label>
                                                    <input type="text" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter title">
                                                    </div>
                                                </div>
                                                <div class="col-lg-8">
                                                 <div class="form-group mb-4">
                                                    <label >Số điện thoại </label>
                                                    <input type="text" name="phone" class="form-control" id="exampleInputEmail1" placeholder="Enter title">
                                                    </div>
                                                </div>
                                                    <div class="col-lg-8">
                                                    <div class="form-group mb-4">
                                                    <label >Giới Tính </label>
                                                  <select required name="sex" class="form-control">
                                                        <option value="nam">nam</option>
                                                        <option value="nu">Nữ</option>
                                                        <option value="khac">Khác</option>
                                                           </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-8">                         
                                                    <div class="form-group">
                                                    <label>Địa chỉ</label>
                                                    <input required type="text" class="form-control" data-toggle="input-mask"  
                                                    name="address"  data-mask-format="00/00/0000">
                                                    </div>
                                                </div>
                                                <div class="col-lg-8" style="overflow:hidden;">    

                                                 <label >Hình ảnh</label>
                                                  <img id="avatar" class="thumbnail" src="" style="max-height: 120px; max-width: 120%;">

                                                <div class="form-group ">

                                                    <input  id="img" type="file" name="img" class="form-control" onchange="changeImg(this)">
                                                   
                                                </div>
                                                   </div>
                                                
                                                  <div class="col-lg-8">            
                                            <div class="form-group mb-">
                                                    <label >Công việc: </label>
                                                    <input type="text" name="job" class="form-control" id="exampleInputEmail1" placeholder="Công việc">
                                            </div>
                                            </div> 
                                                   
                                                </div>
                                                  <div class="col-lg-8">   
                                            
                                          <button type="submit" class="btn btn-success">Cập nhật</button>
                                               

                                            </div>
                                                
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