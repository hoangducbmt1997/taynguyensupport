<?php
namespace App\Http\Controllers;
use App\Models\backend\Category;
use App\Models\Product;
use Illuminate\Support\ServiceProvider;
use App\Models\frontend\Posts;
use App\Models\frontend\userProfiles;
use App\Models\frontend\Motels;
use Illuminate\Http\Request;

class DuyetBaiController extends Controller
{
    public function showTT(){
        $data['productss'] =Product::paginate(6);
        $data1['pos'] =Posts::paginate(6);
        return view('backend.product-post-motel',$data,$data1);
    }
    public function showproduct(){
       
        
        return view('backend.product-admin');
    }
    public function showPost(){
      
        return view('backend.post-admin');
    }
    public function showMotel(){
        
        return view('backend.motel-admin');
    }
    public function destroy($id){
        Product::destroy($id);
        return back();
    }
     public function destroyPost($id){
        Posts::destroy($id);
        return back();
    }
     public function destroyMotel($id){
        Motels::destroy($id);
        return back();
    }
    public function showEditProduct($id){
        $data['products_edit'] =Product::find($id);
        return view('backend.form-edit-product',$data)->with('id_request',$id);
    }
     public function showEditPost($id){
        $data['post_edits'] =Posts::find($id);
        return view('backend.form-edit-post',$data)->with('id_request',$id);
    }
     public function showEditMotel($id){
        $data['motel_edit'] =Motels::find($id);
        return view('backend.form-edit-motel',$data)->with('id_request',$id);
    }
     public function showEditProfiles($id){
        $data['profiles_edit'] =userProfiles::find($id);
        return view('backend.form-edit-profiles',$data)->with('id_request',$id);
    }
    public function editproduct($id, Request $request){
        $pro = Product::find($id);
        $pro->action = $request->action;
        $pro->trending =$request->trending;
        $pro->update();
        return redirect()->route('duyet-bai');

    }
    public function editPost($id, Request $request){
        $pro = Posts::find($id);
        $pro->action = $request->action;
        $pro->trending =$request->trending;
        $pro->update();
        return redirect()->route('duyet-bai');

    }
    public function editMotel($id, Request $request){
        $pro = Motels::find($id);
        $pro->action = $request->action;
        $pro->trending =$request->trending;
        $pro->update();
        return redirect()->route('duyet-bai');

    }
     public function editProfiles($id, Request $request){
        $pro = userProfiles::find($id);
        $pro->trending =$request->trending;
        $pro->ban=$request->banned;
        $pro->update();
        return redirect()->route('duyet-bai');

    }

    

}
