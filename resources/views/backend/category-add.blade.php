@extends('layout-admin')
@section('content')
 <div class="content-page">
                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                 
                                    <h4 class="page-title">Danh Mục </h4>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3"></div>
                            <div class="col-lg-6">
                                <div class="card-box">
                                    <h4 class="header-title">Thêm Danh Mục </h4>
                                    
                                   

                                    <form action="{{route('add-category')}}" method="post">
                                        @csrf
                                        <div class="form-group">
                                            <label>Tên Danh Mục Sản phẩm</label>
                                            <input required type="text" class="form-control" data-toggle="input-mask" onkeyup="ChangeToSlug();" name="category_name" id="slug" data-mask-format="00/00/0000">
                                           
                                        </div>
                                        <div class="form-group">
                                            <label>slug</label>
                                            <input  required type="text" name="category_slug" class="form-control" data-toggle="input-mask" id="convert_slug" data-mask-format="00:00:00">
                                           
                                        </div>
                                         
                                        
                                        <div class="row">
                                    <div class="col-sm-3"> Danh Mục <div class="radio radio-info form-check-inline pl-2">
                                                    <select  name="parent_id" class="form-control">
                                                    <option value="0">Mặc Định</option>
                                                    @foreach($catelist as $cate)
                                                      @if($cate->parent_id == 0)
                                                    <option  value="{{$cate->id}}">{{$cate->category_name}} </option>
                                                        @else
                                                        @endif

                                                    @endforeach
                                                   </select>
                                        </div></div>
                                  <div class="col-sm-6"><br> <input type="submit" name="" class="btn btn-primary">
                                            <a href="{{route('show-category')}}" class="btn btn-danger">Hủy bỏ</a></div>
                                </div>

                                      
                                           
                                    </form>

                                  
                                    
                                </div>
                                
                                <!-- end card-box -->
                            </div>
                           
                    </div>
                </div>
            </div>
        </div>
@endsection
   