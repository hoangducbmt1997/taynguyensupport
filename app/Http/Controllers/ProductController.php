<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\backend\Category;
use App\Models\frontend\userProfiles;
use App\Models\Comment;
class ProductController extends Controller
{
    public function productPage(){
        
        $data['productList']=Product::all()->where('action',1);
        return view('frontend.products.product-page',$data);
    }
    public function productAdd(Request $request){
       
        return view('frontend.products.product-add');
    }
    public function productDetail($id){
         $data['products']=Product::find($id);
         return view('frontend.products.product-detail',$data)->with('id_request',$id);
    }
    public function store(Request $request){
        $filename = $request->image->getClientOriginalName();
       $product = new Product();
        $product->product_name  = $request->product_name;
        $product->product_slug  = $request->product_slug;
        $product->price= $request->price;
        $product->img  =$filename;
        $product->description = $request->description;
        $product->phone  = $request->phone;
        $product->category_id  = $request->cate_id;
        $product->cate_child_id  = 1;
        $product->trending =0;
        $product->address  = $request->address;
        $product->id_user  = auth()->user()->id;
        $product->action  = 0;
        $getImg =$request->image;
        $getImg->move('dataImg/product/',$filename);
        $product->save();
      return redirect()->route('product-page');
    }
    public function listProductDetail($id){
        $data['productList']=Product::all()->where('category_id',$id)->where('action',1);
        return view('frontend.products.list-user',$data);
       
    }
    public function destroy($id){
        Product::find($id)->delete();
        return redirect()->route('product-page');
    }
    public function addCommentProduct($id,Request $request){
      $comment =  new Comment();
      $comment->comment = $request ->message;
      $comment->user_id= $request->id_user;
    $comment->stt=$request ->stt;
      $comment->category_id=2;
      $comment->parent_comment =0;
      $comment->save();
     return redirect()->route('product-page-detail',['id'=>$id]);
    }
    public function repCommentProduct($id,Request $request){
      $comment =  new Comment();
      $comment->comment = $request ->message;
      $comment->user_id= $id;
      $comment->stt=$request ->stt;
      $comment->category_id=$id;
      $comment->parent_comment =$id;
      $comment->save();
      return redirect()->route('product-page-detail',['id'=>$id]);
      
    }
}
