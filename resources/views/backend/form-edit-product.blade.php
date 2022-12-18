@extends('layout-admin')
@section('content')


                    <!-- Start Content-->
                    <div class="container">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                 
                                    <h4 class="page-title">Sản Phẩm </h4>
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
                                    

                                    <form action="{{asset('administrator/edit-Product/').'/'.$id_request}}" method="post">
                                        @csrf
                                        <div class="form-group">
                                            <label>Tên Danh Mục Sản phẩm</label>

                                            <input type="text" class="form-control" data-toggle="input-mask" name="" value="{{$products_edit->product_name}}" data-mask-format="00/00/0000">
                                           
                                        </div>
                                        <div class="form-group">
                                            <label>Trending :  </label>
                                           <select name="trending" class="form-control">
                                            @if($products_edit->trending == 1)
                                                 <option value="1" selected>trending</option>
                                                <option  value="0" >Không</option>
                                            @else
                                             <option  value="1">trending</option>
                                            <option value="0" selected>Không</option>
                                            @endif
                                           </select>
                                          
                                        </div>
                                         <div class="form-group" >
                                            <label>Duyệt bài  :  </label>
                                           <select name="action" class="form-control">
                                            @if($products_edit->action == 1)
                                                 <option value="1" selected>Đã Duyệt</option>
                                                  <option value="0"  >Không</option>
                                            @elseif($products_edit->action == 0)
                                             <option value="1" >Đã Duyệt</option>
                                                  <option value="0" selected>Không</option>
                                            @endif
                                           </select>
                                          
                                        </div>
                                              <div class="row">
                                                    <div class="col-sm-3">
                                         </div>
                                         <div> <input type="submit" name="" class="btn btn-primary" value="Sửa">
                                          <a href="{{route('duyet-bai')}}" class="btn btn-danger">Hủy bỏ</a></div>

                                            
                                          
                                    </form>
                                   
                                </div>
                                <!-- end card-box -->
                            </div>
                           
                    </div>
                </div>
          
@endsection
   