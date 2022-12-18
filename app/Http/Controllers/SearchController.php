<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\frontend\Posts;
use App\Models\frontend\Motels;
class SearchController extends Controller
{
    //


    public function getSearch(Request $request){
        $result =$request->result;
        $result = str_replace(' ','%',$result);
        $product['products_search'] =Product::where('product_name','like','%'.$request->Key_search.'%')
                                                            ->orWhere('price',$request->Key_search)
                                                            ->get();
        return view('frontend.products.product-search',$product)->with('Key_search',$request->Key_search);
    }
    public function getSearchM(Request $request){
         $result =$request->result;
        $result = str_replace(' ','%',$result);
         $motel['motel_search'] =Motels::where('motel_name','like','%'.$request->Key_search.'%')
                                                            ->orWhere('price',$request->Key_search)
                                                            ->get();
        return view('frontend.motels.motel-search',$motel)->with('Key_search',$request->Key_search);

    }
    public function getSearchP(Request $request){
         $result =$request->result;
        $result = str_replace(' ','%',$result);
         $post['post_search'] =Posts::where('post_name','like','%'.$request->Key_search.'%')->get();
                                                            
                                                            
        return view('frontend.posts.post-search',$post)->with('Key_search',$request->Key_search);

    }
}
