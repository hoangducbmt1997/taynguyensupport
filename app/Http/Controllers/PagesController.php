<?php

namespace App\Http\Controllers;
use Auth;
use App\Models\backend\Category;
use App\Models\Product;
use Illuminate\Support\ServiceProvider;
use App\Models\frontend\Posts;
use App\Models\frontend\userProfiles;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Comment;
use App\Models\Status;


class PagesController extends Controller
{
     public function pages(){
        $data['post_trend'] = Posts::where('trending',1)->where('action',1)->paginate(4);
        $data1['post_trending'] = Posts::where('trending',1)->where('action',1)->paginate(6); 
         return view('frontend.page',$data,$data1);
    }

}
