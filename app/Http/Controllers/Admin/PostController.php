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

    public function Edit(){
        $posts=Post::all();
        

        return view('posts.showPosts',compact('posts'));
    }

    public function update(Request $request,$id){
     
     $post=Post::find($id);
     if(!$post){
        session()->flash('Error', ' عذرا المقال غير موجود');
      
        return back();
     }
      $post->update([
        'title'=>$request->title,
        'content'=>$request->content,
      ]);
        session()->flash('Edit', 'تم تعديل المقال بنجاح');
      
      return back(); 
    }
    public function destroy(Request $request,$id){
        
       $post=Post::findOrFail($id)->first();
       $post->delete();
     
        session()->flash('delete', 'تم حذف المقال بنجاح');
        return back();
   
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
        $validator=Validator::make($request->all(),['post_link'=>'required']);
        if($validator->fails()){
            session()->flash('Error', 'عذرا يرجى ادخال الرابط');
            return redirect()->route('postMedia.get');
        }
        $data = [
          'post_link' => $request->post_link
        ];

        $post = socialMediaNews::create($data);
        session()->flash('Add', 'تم تخزين البوست بنجاح');
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
