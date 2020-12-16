<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Http\Requests\CategoryRequest;
use Illuminate\Support\Facades\Auth;
use App\Models\Category;
use App\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
class PostController extends Controller
{
    public function index(){
        $categories=Category::all();
      
        return view('posts.addPost',compact('categories'));
       
    }

    public function store(Request $request){
       $validator=Validator::make($request->all(),[
        'title'=>'required',
        'content'=>'required',
        'cat_id'=>'required',

       ]);
  
       if ($request->hasFile('pic')) {
       $file=$request->file('pic');
    
      $file_ext=$file->getClientOriginalExtension();
      $file_name=time().'.'.$file_ext;
     
       $post=Post::create([
            'title'=>$request->title,
            'content'=>$request->content,
            'cat_id'=>$request->cat_id,
            'image'=>$file_name,
            'Created_by'=>(Auth::user()->name)
           
        ]);
        
       $image=$post->addMedia($file)->toMediaCollection('images');
    
        
       }
       return redirect()->back()->with(['Add' => 'تم اضافه المقال بنجاح ']);
    }

    public function show(Request $request){
        $posts=Post::all();
        // dd($posts);
        return view('front.news',compact('posts'));
    }
    public function Edit(Request $request){
        $posts=Post::get();
        return view('posts.showPosts',compact('posts'));
    }

    public function update(Request $request){
        $id=$request->id;
        $posts=Post::where('id',$id)->update($request->except(['_token']));

        session()->flash('Edit', 'تم تعديل المقال بنجاح');
        return back();
       
    }
    public function destroy(Request $request,$id){
        $posts=Post::where('id',$id)->delete();
        return redirect()->back()->with(['delete' => '   تم حذف العنصر بنجاح     ']);

    }

    public function getId(Request $request){
        $id=$request->id;
        $post=Post::where('id',$id)->first();
          return view('posts.showPosts',compact('post')); 
      }
    public function displayPosts($id){
        $post=Post::where('id',$id)->first();
        return view('front.posts.content',compact('post')); 
    }
 
}
