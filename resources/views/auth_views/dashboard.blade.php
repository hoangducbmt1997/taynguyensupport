@extends('layout-admin')
@section('content')
   
              
                    <div class="container">
                           <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Zircos</a></li>
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                                            <li class="breadcrumb-item active">Form Masks</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Hello {{auth()->user()->full_name}} </h4>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                        	<div class="col-xl-12">
                                <div class="card-box">
                                    <h4 class="header-title mb-4">User List</h4>

                                 
                                    <!-- table-responsive -->
                                       <div class="table-responsive">
                                        <table class="table table-hover table-centered m-0">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>User Name</th>
                                                    <th>Full name</th>
                                                    <th>sdt</th>
                                                    <th>email</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            	@foreach($user as $userAccount)
                                                <tr>
                                                    <th>
                                                        <span class="avatar-sm-box bg-success">L</span>
                                                    </th>
                                                    <td>
                                                        <h5 class="m-0 font-15">{{$userAccount->username}}</h5>
                                                        
                                                    </td>
                                                    <td>{{$userAccount->full_name}}</td>
                                                    <td>{{$userAccount->phone_number}}</td>
                                                    <td>{{$userAccount->email}}</td>
                                                </tr>
                                                @endforeach

                                               

                                            </tbody>
                                        </table>

                                    </div>
                                </div>
                                <!-- end card -->
                            </div>
                            
                        </div>
                        <div class="row">
                        	<div class="col-xl-12">
                                <div class="card-box">
                                    <h4 class="header-title mb-4">Admin List</h4>

                                 
                                    <!-- table-responsive -->
                                       <div class="table-responsive">
                                        <table class="table table-hover table-centered m-0">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>User Name</th>
                                                    <th>Full name</th>
                                                    <th>sdt</th>
                                                    <th>email</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            	@foreach($admin as $admins)
                                                <tr>
                                                    <th>
                                                        <span class="avatar-sm-box bg-success">L</span>
                                                    </th>
                                                    <td>
                                                        <h5 class="m-0 font-15">{{$admins->username}}</h5>
                                                        
                                                    </td>
                                                    <td>{{$admins->full_name}}</td>
                                                    <td>{{$admins->phone_number}}</td>
                                                    <td>{{$admins->email}}</td>
                                                </tr>
                                                @endforeach

                                               

                                            </tbody>
                                        </table>

                                    </div>
                                </div>
                                <!-- end card -->
                            </div>
                            
                        </div>
    
                     

                            

                            <!-- end col -->

                        </div>
            

        


                      
                        <!-- end row -->
@endsection