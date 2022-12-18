@extends('layout')
@section('content')
<div class="container">
    <div class="row">  
      
                             <h5 class="mt-0 text-uppercase mb-4"> Danh sách phòng trọ </h5>

                        
                                       <div class="col-sm-12">

                                           
                                           <div class="row">
                                             @foreach($motel as $mt)
                                               @if($mt->id_category == $id_request)
                                                   <div class="col-sm-4 ">
                                                    <div class="property-card card">
                                                        <div class="property-image" style="overflow: hidden;">
                                                             <a href="{{asset('motels/show')}}/{{$mt->id}}"><img style="max-height: 250px; max-width: 120%;" src="{{asset('img/motel/')}}/{{$mt->img}}">
                                                            <span class="property-label badge badge-warning">Nhà ở</span>
                                                        </a>
                                                        </div>

                                                        <div class="property-content card-body">
                                                            <div class="listingInfo">
                                                                <div class="">
                                                                    <h5 class="font-18 text-success mt-0">${{$mt->price}}</h5>
                                                                </div>
                                                                <div class="">
                                                                    <h5 class="text-overflow"><a href="#" class="text-dark">{{$mt->motel_name}}</a></h5>
                                                                    <p class="text-muted text-overflow"><i class="mdi mdi-map-marker-radius mr-2"></i>{{$mt->map}}</p>

                                                          

                                                                    <div class="mt-3">
                                                                         <a href="{{asset('motels/show')}}/{{$mt->id}}">
                                                                        <button type="button" class="btn btn-success btn-block waves-effect waves-light">View Detail</button>
                                                                    </a>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                            <!-- end. Card actions -->
                                                        </div>
                                                        <!-- /inner row -->
                                                    </div>
                                                    <!-- End property item -->
                                                </div>
                                                @else
                                                @endif
                                                   @endforeach
                                           </div>
                                       </div>
           
                                                <!-- end col -->

                                       
                                     
    </div>
</div>


        



@endsection