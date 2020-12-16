<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Http\Requests\CategoryRequest;

class CategoryController extends Controller
{
    public function index(){
       
         $categories=Category::all();
        return view('category.category',compact('categories'));
    }

    public function store(Request $request){
       Category::create( [
            'catName'=>$request->catName,
            'catType'=>$request->catType,
            'parent_id'=>$request->parent_id
        ]);
        session()->flash('Add', 'تم اضافة القسم بنجاح');
        return back();
    }

    public function edit(Request $request){
      $id=$request->id;
        $category=Category::where('id',$id)->first();
        return view('category.category',compact('category')); 
    }

    public function update(Request $request){
       $id=$request->id;
        $category=Category::where('id',$id)->update($request->except(['_token']));

        session()->flash('Edit', 'تم تعديل القسم بنجاح');
        return back();
}

    public function destroy(Request $request,$id){
        $category=Category::where('id',$id)->delete();
        return redirect()->back()->with(['delete' => '   تم حذف العنصر بنجاح     ']);

    }
}
