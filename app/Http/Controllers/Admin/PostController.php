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
use App\Models\socialMediaNews;
use App\Models\Media;
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
        $post->addMedia($file)
        ->preservingOriginal()
        ->toMediaCollection('images');
      // $image=$post->addMedia($file)->toMediaCollection('images');
    
        
       }
       return redirect()->back()->with(['Add' => 'تم اضافه المقال بنجاح ']);
    }

    public function show(Request $request){
        $posts=Post::all();
      
        return view('front.news',compact('posts'));
    }
    public function Edit(Request $request){
        $posts=Post::get();
        return view('posts.showPosts',compact('posts'));
    }

    public function update(Request $request,$id){
       
        $posts=Post::where('id',$id)->update($request->except(['_token','id']));

        session()->flash('Edit', 'تم تعديل المقال بنجاح');
        return redirect()->back();
       
    }
    public function destroy(Request $request,$id){
        $posts=Post::where('id',$id)->delete();
        return redirect()->back()->with(['delete' => '   تم حذف العنصر بنجاح     ']);

    }

    public function getId(Request $request){
        $id=$request->id;
        $post=Post::where('id',$id)->first();
        $media=Media::first();
          return view('posts.showPosts',compact('post','media')); 
      }
    public function displayPosts($id){
        $post=Post::where('id',$id)->first();
        return view('front.posts.content',compact('post')); 
    }
   
    public function dataFace(){
        return view('front.news');
    }

    public function get_links_from_socialMedia(){
        return view('facebook.socialMedia');
    }

    public function store_links_from_socialMedia(Request $request){
        $data = [
          'post_link' => $request->post_link
        ];

        $post = socialMediaNews::create($data);
        return redirect()->route('postMedia.get');
    }

    public function fetch_links(){
        $links = socialMediaNews::select('post_link')->get();
        return response()->json([
            'message' => 'Done!',
            'data' => $links
        ]);
    }
}
