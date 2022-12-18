<?php

namespace App\Http\Controllers;
use App\Models\backend\Category;
use App\Models\Product;
use Illuminate\Support\ServiceProvider;
use App\Models\frontend\Posts;
use App\Models\frontend\userProfiles;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Comment;
use App\Models\Status;
use App\Models\Friends;
use App\Models\Messages;
use Auth;

class userProfilesController extends Controller
{

    public function getHomePage($id){
      //kt data profiles
        $isExist = userProfiles::select("*")
        ->where('user_id',$id)
        ->exists();
         if($isExist){
         $dataprofiles['profile_data']=userProfiles::get()->where('user_id',$id) ; 
        }else{
          $dataprofiles['profile_data'] = 0;
        }
        $k = 0;
        if(Auth::check()){
           $k = auth()->user()->id;
        }
        $count = Friends::where('id_user',$k)->where('friend_id',$id)->get()->count();
        $id_friendss = Friends::where('id_user',$k)->where('friend_id',$id)->first();
        $datafriend['friends_data'] = Friends::where('id_user',$id)->paginate(16);

        return view('frontend.home.home-page',$dataprofiles,$datafriend)->with('id_request',$id)->with('count_limit',$count)->with('id_friendss',$id_friendss);
    }
    public function updateProfiles($id){
      return view('frontend.home.capnhat');
    }

    public function updateProfilesHome(Request $request, $id){
        $filename = $request->img->getClientOriginalName();
        $profile =  new userProfiles();
        $profile->full_name=$request->full_name;
        $profile->email=$request->email;
        $profile->phone =$request->phone;
        $profile->sex =$request->sex;
        $profile->address =$request->address;
        $profile->image =$filename;
        $profile->trending =0;
        $profile->ban =0;
        $profile->jobs =$request->job;
        $profile->user_id =$id;
        $profile->save();
        $getImg =$request->img;
        $getImg->move('img/profiles/',$filename);
        return redirect()->route('home-pages',['id'=>$id])->with('update','Cập nhật thành công');
    }
    public function showEditProfiles($id){
      $data['show_profile']=userProfiles::find($id);
      return view('frontend.home.edit-profiles',$data);
    }
    public function editProfiles(Request $request,$id){
        $k = auth()->user()->id;
        $profiles = userProfiles::find($id);
        $filename = $request->img->getClientOriginalName();
        $profiles->full_name=$request->full_name;
        $profiles->email=$request->email;
        $profiles->phone =$request->phone;    
        $profiles->sex =$request->sex;
        $profiles->address =$request->address;
        $profiles->image =$filename;
        $profiles->jobs =$request->job;
        
        $profiles->user_id =auth()->user()->id;
        $profiles->update();
        $getImg =$request->img;
        $getImg->move('img/profiles/',$filename);
        return redirect()->route('home-pages',[$k])->with('edit success','Sửa thành công');
    }
    public function addStatus($id,Request $request){
      $status =  new status();
      $status->status = $request ->message_post;
      $status->user_id= $id;
      $status->comment_id=$id;
      $status->save();
     return redirect()->route('home-pages',['id'=>$id]);
    }
    
}
