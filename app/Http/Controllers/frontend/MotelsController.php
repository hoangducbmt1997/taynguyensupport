<?php

namespace App\Http\Controllers\frontend;
use App\Models\frontend\Motels;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Comment;

class MotelsController extends Controller
{
   
   public function motelPage(){
    $data['motel']=Motels::all()->where('action',1);
    return view('frontend.motels.motel-page',$data);
   }
   public function motelAdd(){
    return view('frontend.motels.motel-add');
   }
   public function motelShow($id){
      $data['motel'] = Motels::find($id);
        $data1['motel1'] = Motels::paginate(3);

    return view('frontend.motels.motel-show', $data, $data1)->with('id_request',$id);
   }
   public function motelList($id){
   $data['motel']=Motels::all()->where('action',1);
   return view('frontend.motels.motel-list',$data)->with('id_request',$id);
   }
   public function store(Request $request){
        $filename = $request->image->getClientOriginalName();
        $filename1 = $request->image1->getClientOriginalName();
        $filename2 = $request->image2->getClientOriginalName();
        $filename3 = $request->image3->getClientOriginalName();
       $motel = new Motels();
        $motel->motel_name  = $request->motel_name;
        $motel->motel_slug  = $request->motel_slug;
        $motel->title = $request->title;
        $motel->area = $request->dientich;
        $motel->price = $request->price;
        $motel->map = $request->map;
        $motel->img  =$filename;
        $motel->img1  =$filename1;
        $motel->img2  =$filename2;
        $motel->img3  =$filename3;
        $motel->id_category  =$request->cate_id;
        $motel->description  =$request->description;
        $motel->trending =0;
        $motel->action  = 0;
        $motel->id_user  = auth()->user()->id;
        $motel->save();
      $getImg =$request->image;
       $getImg->move('img/motel/',$filename);
      $getImg1 =$request->image1;
      $getImg2 =$request->image2;
      $getImg3 =$request->image3;
     
      $getImg1->move('img/motel/',$filename1);
      $getImg2->move('img/motel/',$filename2);
      $getImg3->move('img/motel/',$filename3);
      return redirect()->route('motel-page');

   }
   public function update(){

   }
   public function destroy($id){
      Motels::find($id)->delete();
        return redirect()->route('motel-page');
   }
    public function addCommentMotel($id,Request $request){
      $comment =  new Comment();
      $comment->comment = $request ->message;
      $comment->user_id= $request->id_user;
    $comment->stt=$request ->stt;
      $comment->category_id=1;
      $comment->parent_comment =0;
      $comment->save();
     return redirect()->route('motel-page-show',['id'=>$id]);
    }
}
