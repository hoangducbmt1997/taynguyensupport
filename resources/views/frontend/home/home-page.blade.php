@extends('layout')
@section('content')
  <!-- //layout admin -->
   <link href="{{asset('assets\css\bootstrap.min.css')}}" rel="stylesheet" type="text/css" id="bootstrap-stylesheet">
        <link href="{{asset('assets\css\icons.min.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('assets\css\app.min.css')}}" rel="stylesheet" type="text/css" id="app-stylesheet">

 <div id="wrapper">

        
                <div class="content">

                    <!-- Start Content-->
                   
                    <div class="container">
                        <div class="row">
                             

                           
                            <div class="col-sm-4">
                                     <div class="">

                                  
                                           
                                            <div class="text-center card-box shadow-none border border-secoundary">
                                              
                                                <div class="member-card">
                                                      @if(!$profile_data)
                                         <p>Tài khoản chưa cập nhật profiles</p>
                                          @if(Auth::check() && auth()->user()->id == $id_request)
                                                          <a class="btn btn-success" href="{{asset('home/add/').'/'.auth()->user()->id}}">Cập nhật thông tin</a>
                                                           @else

                                                           @endif
                                            <?php else: ?>
                                           @foreach($profile_data as $pro)

                                                    <div style="overflow: hidden;" class="avatar member-thumb mx-auto d-block">
                                                        <img style="max-width: 120%; max-height: 140px;" src="{{asset('img/profiles/')}}/{{$pro->image}}" class=" img-thumbnail" alt="profile-image">
                                                        <i class="mdi mdi-star-circle member-star text-success" title="verified user"></i>
                                                    </div>
                                                    <hr>
                                                 
                                                    <div class="text-left">
                                                        <p class="text-muted font-13"><strong>Full Name:</strong> <span class="ml-2">{{$pro->full_name}}</span></p>

                                                        <p class="text-muted font-13"><strong>Mobile:</strong><span class="ml-2">{{$pro->phone}}</span></p>

                                                        <p class="text-muted font-13"><strong>Email:</strong> <span class="ml-2">{{$pro->email}}</span></p>

                                                    </div>
                                               
                                            @endforeach
                                             @endif
                                               <hr>

                                         
                                             @if(Auth::check())
                                           
                                            <!-- Kiểm tra đăng nhập -->

                                            @if($count_limit == 0 && !$id_friendss && $id_request != auth()->user()->id)
                                         
                                               <a href="{{asset('home/follow/').'/'.$id_request}}"  class="btn btn-success btn-sm width-sm waves-effect mt-2 waves-light">Follow</a>
                                                 <a href="{{route('messages')}}" type="button" class="btn btn-danger btn-sm width-sm waves-effect mt-2 waves-light">Message</a>
                                         
                                           @elseif($count_limit == 0 && $id_request == auth()->user()->id)
                                           @elseif($count_limit == 1 && $id_friendss->accept == 0) 
                                            <a href="{{asset('home/followN/').'/'.$id_friendss->id}}"  class="btn btn-success btn-sm width-sm waves-effect mt-2 waves-light">Follow</a>
                                                 <button type="button" class="btn btn-danger btn-sm width-sm waves-effect mt-2 waves-light">Message</button>
                                           @elseif($count_limit == 1 && $id_friendss->accept == 1)
                                              
                                                        <a href="{{asset('home/unfollow/').'/'.$id_friendss->id}}"  class="btn btn-success btn-sm width-sm waves-effect mt-2 waves-light">unfollow</a>

                                                    <button type="button" class="btn btn-danger btn-sm width-sm waves-effect mt-2 waves-light">Message</button>
                                             
                                            @endif

                                             @else
                                             <p style="display:inline-block; float: left;">Vui lòng <a href="{{route('form-login-user')}}"  >Đăng Nhập</a> để tham gia...</p>

                                             @endif
                                          
                                                 
                                                   <br>
                                                  

                                                  
                                                </div>


                                            </div>
                                          
                                            <!-- end card-box -->

                                        </div>
                                <div class="mails card-box">

                                    <div class="table-box">
                                        <div class="table-detail">
                                         
                                            <div class="p-4" style="min-width: 250px;">
                                                <a  class="btn btn-success btn-rounded width-lg" style="color: white ;">Trạng thái</a>
                                                <p style="display: inline-block; padding: 10px 10px;">Chưa cập nhật trạng thái vui lòng chờ phiên bản tiếp theo...</p>
                                              
                                                <div class="list-group mail-list mt-3">
                                                    <a href="#" class="list-group-item border-0 text-success"></i>Danh sách follows gần đây <b>(8)</b></a>
                                                 
                                                    
                                                </div>

                                                <h5 class="mt-4 text-uppercase hidden-xxs">Bài viết đánh giá cao</h5>

                                                <div class="list-group border-0 mail-list hidden-xxs">
                                                    <a href="#" class="list-group-item border-0"><span class="fa fa-circle text-info mr-2"></span>Người này chưa có bài viết...</a>
                                                  
                                                </div>

                                                <h5 class="mt-4 text-uppercase hidden-xxs">Chat</h5>

                                                <div class="chat-widget hidden-xxs">
                                                    <a href="#">
                                                        <div class="chat-item">
                                                            <div class="chat-item-img"><img src="assets\images\users\avatar-1.jpg" class="rounded-circle" alt=""></div>
                                                            <div class="chat-right-text">
                                                                <p class="chat-item-author">Sang</p>
                                                                <p class="chat-item-text">Hey! there I'm available...</p>
                                                            </div>
                                                        </div>
                                                    </a>

                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                 <div class="col-lg-8">
                                <div class="card-box">
                                    <h4 class="header-title mb-4" style="display: block; text-align: right;">Xin Chào</h4>

                                    <ul class="nav nav-tabs tabs-bordered nav-justified" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="home-b2-tab" data-toggle="tab" href="#home-b2" role="tab" aria-controls="home-b2" aria-selected="true">
                                                <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                                                <span class="d-none d-sm-block">Trạng thái</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="profile-b2-tab" data-toggle="tab" href="#profile-b2" role="tab" aria-controls="profile-b2" aria-selected="false">
                                                <span class="d-block d-sm-none"><i class="fas fa-user"></i></span>
                                                <span class="d-none d-sm-block">Thông Tin</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="message-b2-tab" data-toggle="tab" href="#message-b2" role="tab" aria-controls="message-b2" aria-selected="false">
                                                <span class="d-block d-sm-none"><i class="far fa-envelope"></i></span>
                                                <span class="d-none d-sm-block">Danh mục</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="setting-b2-tab" data-toggle="tab" href="#setting-b2" role="tab" aria-controls="setting-b2" aria-selected="false">
                                                <span class="d-block d-sm-none"><i class="fas fa-cog"></i></span>
                                                <span class="d-none d-sm-block">Theo dõi</span>
                                      </a>
                                        </li>
                                    </ul>
                                    <div class="tab-content">

                                         <div class="tab-pane" id="setting-b2" role="tabpanel" aria-labelledby="setting-b2-tab">
                                        
                                          

                                            
                                             <div class="col-xl-8">
                                                      <h3>Danh sách bạn Follows</h3>

                                                    <div class="inbox-widget">
                                                        <div>

                                         @foreach($profiles as $pr)
                                           @foreach($friends_data as $fr)
                                            @if($pr->user_id == $fr->friend_id)
                                                            <div class="inbox-item">
                                                                <div class="inbox-item-img"><img src="{{asset('img/profiles/').'/'.$pr->image}}" class="rounded-circle" alt=""></div>
                                                                <p class="inbox-item-author">{{$pr->full_name}}</p>
                                                                <p class="inbox-item-text">{{$pr->jobs}}</p>
                                                                <p class="inbox-item-date">
                                                                    <a href="{{asset('home/page/').'/'.$pr->user_id}}" class="btn btn-success">Tới trang cá nhân</a>
                                                                </p>
                                                            </div>
                                                             @else
                                            @endif
                                              @endforeach
                                              @endforeach
                                                        </div>
                                                     
                                                        </div>
                                                    </div>

                                                </div>

                                        

                                             
                                        <div class="tab-pane active" id="home-b2" role="tabpanel" aria-labelledby="home-b2-tab">
                                        @if(!$profile_data)
                                        @if(Auth::check() && auth()->user()->id ==$id_request)
                                         <a class="btn btn-success" href="{{asset('home/add/').'/'.auth()->user()->id}}">Vui lòng cập nhật thông tin trước....</a>
                                        @else
                                        Tài khoản chưa cập nhật trạng thái
                                        @endif
                                             
                                             @else                           
                                               <h3>Trạng thái</h3>
                                               @if(Auth::check() && auth()->user()->id ==$id_request)

                                               <form action="{{asset('home/addstatus/').'/'.auth()->user()->id}}" method="POST">
                                                @csrf
                                                 <div class="form-group">
                                                        <textarea class="form-control" id="message2" name="message_post" rows="3" placeholder="Message" required=""></textarea>
                                                    </div>
                                                    <input type="submit" class="btn btn-success" >
                                                </form>
                                                @else
                                                @endif

                                                <br>

                                                @foreach($statusdata as $status )
                                                <div class="row">
                                                    <div class="col-sm-12">

                                                @foreach($profile_data as $sta)
                                                        @if($status->user_id == $sta->user_id && $status->user_id == $id_request)
                                                    <ul class="media-list pl-0">
                                                    <li class="media">
                                                        <a class="mr-2" href="#">
                                                            <img style="max-width: 120px; max-height: 100px;" class="media-object rounded-circle"
                                                             src="{{asset('img/profiles/').'/'.$sta->image}}" alt="img">
                                                        </a>
                                                        <div class="media-body">
                                                            <h5 class="font-18 media-heading mt-0">{{$sta->full_name}} <p>{{$status->updated_at}}</p></h5>
                                                           
                                                             <p>{{$status->status}}</p>
                                                             <!-- <a href="#" id="myBtn" class="text-success"><i class="mdi mdi-reply"></i>&nbsp; Reply</a> -->
                                                        </div>
                                                       
                                                        
                                                             
                                                               
                                                    </li>
                                                </ul>
                                                @else
                                                @endif
                                                @endforeach 
                                                                </div>
                                                </div>
                                                @endforeach
                                                @endif

                                             

                                                    
                                          
                                        </div>
                                        <div class="tab-pane show " id="profile-b2" role="tabpanel" aria-labelledby="profile-b2-tab">
                                                
                                        <div class="row">
                                            <h3>Thông tin chi tiết</h3>
                                          
                                     
                                          
                                          
                                             <div class="col-lg-10">
                                          <table class="table">
                                           

                                         @if(!$profile_data)
                                         <p>Tài khoản chưa cập nhật profiles</p>
                                          @if(Auth::check() && auth()->user()->id == $id_request)
                                                          <a class="btn btn-success" href="{{asset('home/add/').'/'.auth()->user()->id}}">Cập nhật thông tin</a>
                                                           @else

                                                           @endif
                                            @else

                                                      @foreach($profile_data as $pr)

                                                        <tbody>
                                                             <tr class="table-light">
                                                              
                                                                <td>Họ và tên:</td>
                                                                <td>{{$pr->full_name}}</td>
                                                             
                                                            </tr>
                                                            <tr class="table-light">
                                                              
                                                                <td>Email:</td>
                                                                <td>{{$pr->email}}</td>
                                                             
                                                            </tr>

                                                            <tr class="table-light">
                                                            
                                                                <td>Phone:</td>
                                                                <td>{{$pr->phone}}</td>
                                                            </tr>

                                                            <tr class="table-light">
                                                             
                                                                <td>Giới tính: </td>
                                                                <td>{{$pr->sex}}</td>
                                                            </tr>

                                                            <tr class="table-light">
                                                                
                                                                <td>Công việc:</td>
                                                                <td>{{$pr->jobs}}</td>
                                                            </tr>

                                                            <tr class="table-light">
                                                               
                                                                <td>Địa chỉ: </td>
                                                                <td>{{$pr->address}}</td> 
                                                            </tr>
                                                           <tr>
                                                               <td>   
                                                             
                                                            @if(Auth::check() && auth()->user()->id == $pr->user_id)
                                                          <a class="btn btn-success" href="{{asset('home/edit/').'/'.$pr->id}}">Cập nhật thông tin</a>
                                                           @else
                                                           @endif
                                                            </td>
                                                           </tr>                                                   
                                                     </tbody>
                                                         @endforeach
                                                         @endif
                             
                                                    </table>


                                        </div>

                                        </div>
                                        </div>
                                        <div class="tab-pane" id="message-b2" role="tabpanel" aria-labelledby="message-b2-tab">
                                           <h3>Danh mục</h3>
                                                <div class="col-xl-12">
                                             <div class="card-box">
                                                 <h4 class="header-title mb-4">Bài Viết</h4>
                                                
                                            @foreach($postdata as $posttt)
                                               @if($posttt->id_user == $id_request)
                                                <div class="media latest-post-item mt-3">
                                                    <div class="media-left mr-2">

                                                        <a href="{{asset('posts/show/').'/'.$posttt->id}}"><img class="rounded" alt="" src="{{asset('img/post/').'/'.$posttt->img}}" style="max-width: 160px;height: 120px;"> </a>
                                                    </div>
                                                    <div class="media-body">
                                                        <h5 class="media-heading mt-0 font-16"><a href="{{asset('posts/show/').'/'.$posttt->id}}" class="text-muted">{{$posttt->post_name}} </a> </h5>
                                                        <p class="font-13 text-muted">
                                                            {{$posttt->updated_at}}  |
                                                        </p>
                                                    </div>
                                                </div>
                                            @else
                                            
                                            @endif
                                                
                                            @endforeach
                                              
                                            </div> 

                                              <div class="card-box">
                                                 <h4 class="header-title mb-4">Phòng trọ</h4>
                                            @foreach($moteldata as $mt)
                                            @if($mt->id_user == $id_request)
                                                <div class="media latest-post-item mt-3">
                                                    <div class="media-left mr-2">
                                                        <a href="{{asset('motels/show/').'/'.$mt->id}}"><img class="rounded" alt="" src="{{asset('img/motel/').'/'.$mt->img}}" style="max-width: 160px;height: 120px;"> </a>
                                                    </div>
                                                    <div class="media-body">
                                                        <h5 class="media-heading mt-0 font-16"><a href="{{asset('motels/show/').'/'.$mt->id}}" class="text-muted">{{$mt->motel_name}} </a> </h5>
                                                        <p class="font-13 text-muted">
                                                            {{$mt->updated_at}}  |
                                                        </p>
                                                    </div>
                                                </div>
                                            @else
                                           
                                            @endif
                                                
                                            @endforeach
                                              
                                            </div> 
                                              <div class="card-box">
                                                 <h4 class="header-title mb-4">Sản phẩm</h4>
                                              
                                                
                                        @foreach($productdata as $prod)
                                            @if($prod->id_user == $id_request)
                                                <div class="media latest-post-item mt-3">
                                                    <div style="overflow: hidden;"  class="media-left mr-2">
                                                        <a  href="{{asset('products/detail/').'/'.$prod->id}}"> <img class="rounded" alt="" src="{{asset('dataImg/product/').'/'.$prod->img}}" style="max-width: 160px;height: 120px;"> </a>
                                                    </div>
                                                    <div class="media-body">
                                                        <h5 class="media-heading mt-0 font-16"><a href="{{asset('products/detail/').'/'.$prod->id}}" class="text-muted">{{$prod->product_name}}</a> </h5>
                                                        <p class="font-13 text-muted">
                                                            {{$prod->updated_at}}  | John Deo
                                                        </p>
                                                    </div>
                                                </div>
                                            @else
                                           
                                            @endif
                                                
                                            @endforeach
                                              
                                            </div> 
                                      
                                        </div>
                                    
                                   
                                       
                                   
                                  

                                </div>
                            </div>

                       </div>
                       </div>
                   </div>
                    
       
</div>        

   
@endsection