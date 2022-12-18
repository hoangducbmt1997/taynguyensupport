<?php

namespace App\Http\Controllers\backend;
use App\Models\backend\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['catelist']=Category::all();
       return view('backend.category-show',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.category-add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $category = new Category;
        $category->category_name=$request->category_name;
        $category->category_slug=$request->category_slug;
        $category->parent_id =$request->parent_id;
        $category->save();
        return redirect()->route('show-category');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $data['category']=Category::find($id);
        $data2['category2']=Category::all();
       return view('backend.category-edit',$data,$data2);
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       $category =  Category::find($id);
        $category->category_name=$request->category_name;
        $category->category_slug=$request->category_slug;
        $category->parent_id =$request->parent_id;
        $category->save();
        return redirect()->route('show-category')->with('editsucces','Sửa thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Category::destroy($id);
         return back()->with('error','Chức năng đang bảo trì vui lòng chờ admin cho phép...');
    }
}
