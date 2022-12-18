     
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
                                            <form action="{{asset('home/edit/').'/'.$show_profile->id}}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                  <div class="row">
                                  
                                      <div class="col-lg-8">
                                                    <div class="form-group mb-4">
                                                    <label >Tên đầy đủ </label>
                                                    <input type="text" name="full_name"  class="form-control" id="exampleInputEmail1" value="{{$show_profile->full_name}}">
                                                    </div>
                                                </div>
                                        
                                            
                                                <div class="col-lg-8">
                                                    <div class="form-group mb-4">
                                                    <label >Email </label>
                                                    <input type="text" name="email" class="form-control" id="exampleInputEmail1" value="{{$show_profile->email}}">
                                                    </div>
                                                </div>
                                                <div class="col-lg-8">
                                                 <div class="form-group mb-4">
                                                    <label >Số điện thoại </label>
                                                    <input type="text" name="phone" class="form-control" id="exampleInputEmail1" value="{{$show_profile->phone}}">
                                                    </div>
                                                </div>
                                                    <div class="col-lg-8">
                                                    <div class="form-group mb-4">
                                                    <label >Giới Tính </label>
                                                  <select required name="sex" class="form-control">
                                                    @if($show_profile->sex == 'nam')
                                                        <option value="nam" checked>nam</option>
                                                        <option value="nu">Nữ</option>
                                                         <option value="khac">Khác</option>
                                                    @elseif($show_profile->sex == 'nu')
                                                        <option value="nam" >nam</option>
                                                        <option value="nu" checked>Nữ</option>
                                                         <option value="khac">Khác</option>
                                                    @else
                                                       <option value="nam" checked>nam</option>
                                                        <option value="nu">Nữ</option>
                                                         <option value="khac" checked>Khác</option>
                                                    @endif
                                                           </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-8">                         
                                                    <div class="form-group">
                                                    <label>Địa chỉ</label>
                                                    <input required type="text" class="form-control" data-toggle="input-mask"  
                                                    name="address"  value="{{$show_profile->address}}">
                                                    </div>
                                                </div>
                                                <div class="col-lg-8">    

                                                 <label >Hình ảnh</label>
                                                  <img id="avatar" class="thumbnail" width="200px" 
                                                  src="{{asset('img/profiles/').'/'.$show_profile->image}}">

                                                <div class="form-group ">
                                                    <input required  id="img" value="{{asset('img/profiles/').'/'.$show_profile->image}}" type="file" name="img" class="form-control" onchange="changeImg(this)">
                                                   
                                                </div>
                                                   </div>
                                                
                                                  <div class="col-lg-8">            
                                            <div class="form-group mb-">
                                                    <label >Công việc: </label>
                                                    <input type="text" name="job" class="form-control" id="exampleInputEmail1" value="{{$show_profile->jobs}}">
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