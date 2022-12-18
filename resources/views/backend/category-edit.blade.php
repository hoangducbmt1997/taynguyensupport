@extends('layout-admin')
@section('content')


                    <!-- Start Content-->
                    <div class="container">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                 
                                    <h4 class="page-title">Sản phẩm </h4>
                                     @if(session('error'))
                                    {{session('error')}}
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3"></div>
                            <div class="col-lg-6">
                                <div class="card-box">
                                    <h4 class="header-title">Sửa Danh Mục </h4>
                                    

                                    <form action="{{asset('administrator/edit-category/').'/'.$category->id}}" method="post">
                                        @csrf
                                        <div class="form-group">
                                            <label>Tên Danh Mục Sản phẩm</label>

                                            <input type="text" class="form-control" data-toggle="input-mask" name="category_name" value="{{$category->category_name}}" data-mask-format="00/00/0000">
                                           
                                        </div>
                                        <div class="form-group">
                                            <label>slug</label>
                                            <input type="text" name="category_slug" class="form-control" data-toggle="input-mask" value="{{$category->category_slug}}" data-mask-format="00:00:00">
                                           
                                        </div>
                                              <div class="row">
                                                    <div class="col-sm-3"> <div class="radio radio-info form-check-inline pl-2">
                                                    
                                                    <select  name="parent_id" class="form-control">
                                                    @foreach($category2 as $cate2)
                                                     @if($cate2->parent_id == 0 && $cate2->id == $category->parent_id)
                                                     <option selected value="{{$cate2->id}}">{{$cate2->category_name}} </option>
                                                     @elseif($cate2->parent_id == 0)
                                                      <option value="{{$cate2->id}}">{{$cate2->category_name}} </option> 
                                                        @else
                                                 
                                                    @endif
                                                    @endforeach
                                                   </select>
                                        </div>
                                         </div>
                                         <div> <input type="submit" name="" class="btn btn-primary" value="Sửa"> <a href="{{route('show-category')}}" class="btn btn-danger">Hủy bỏ</a></div>

                                            
                                          
                                    </form>
                                   
                                </div>
                                <!-- end card-box -->
                            </div>
                           
                    </div>
                </div>
          
@endsection
   