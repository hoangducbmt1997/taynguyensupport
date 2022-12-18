<?php

namespace App\Http\Controllers\frontend;
use App\Models\Comment;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\frontend\Posts;
use App\Models\User;
use App\Models\backend\Category;
class PostsController extends Controller
{
    public function postPage(){
        $data1['users']=User::all();
        $data['post']=Posts::all()->where('action',1);
        
        return view('frontend.posts.post-page',$data,$data1);
    }
     public function postAdd(){
         return view('frontend.posts.post-add');
    }
     public function listpostDetail($id){
        $data['post']=Posts::all()->where('id_category',$id)->where('action',1);
        return view('frontend.posts.list-user',$data)->with('id_request',$id);
    }
     public function store(Request $request){
    $filename = $request->image->getClientOriginalName();
       $post = new Posts();
        $post->post_name  = $request->post_name;
        $post->post_slug  = $request->post_slug;
        $post->title= $request->title;
        $post->id_category  =$request->id_category;
        $post->img  =$filename;
        $post->description  =$request->description;
        $post->action  = 0;
        $post->trending =0;
        $post->id_user  = auth()->user()->id;
        $post->save();
      $getImg =$request->image;
      $getImg->move('img/post/',$filename);
      return redirect()->route('post-page');
    }
    public function postShow($id){      
         $data['post']=Posts::find($id);   
        return view('frontend.posts.post-showss',$data)->with('id_request',$id);
    }

    public function update($id){
    
        
    }
      public function addCommentPost($id,Request $request){
      $comment =  new Comment();
      $comment->comment = $request ->message;
      $comment->user_id= $request->id_user;
    $comment->stt=$request ->stt;
      $comment->category_id=3;
      $comment->parent_comment =0;
      $comment->save();
     return redirect()->route('post-page-show',['id'=>$id]);
    }
     public function destroy($id){
        Posts::find($id)->delete();
        return redirect()->route('post-page');
    }
    
}
