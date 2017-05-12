<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use App\Post;
use App\Category;

class PostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('IsAdmin')->only('edit', 'update', 'destroy');
    }

    public function index()
    {
        if(auth()->user()->role == 2) {
            $posts = Post::where('user_id', auth()->user()->id)->paginate(6);
        } else {
        $posts = Post::latest()->paginate(6);
    	}
        return view('back.posts.index', compact('posts'));
    }

    public function create()
    {
    	$cats = Category::all();
    	return view('back.posts.create', compact('cats'));
    }

    public function store(PostRequest $request)
    {
    	if($request->file('image'))
    	{
    		$imageName = time().'.'.$request->file('image')->getClientOriginalExtension();
    		$location = public_path().'/front/post_images/'.$imageName;
    		upload($request->file('image'), 560, 450, $location);    		
    	} else {

	   $imageName = 'no-image-available.png';
        }
    	Post::create([
    		'user_id' => auth()->user()->id,
    		'category_id' => $request->category_id,
    		'title' => $request->title,
    		'body' => $request->body,
    		'status' => $request->status,
    		'image' => $imageName,

		]);

		session()->flash('msg', 'تم إضافة المقال بنجاح');
		return redirect('/admin/posts');
    }


    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();
        session()->flash('msg', 'تم حذف المقال بنجاح');
        return redirect()->back();
    }

    public function edit($id)
    {
        $cats = Category::all();
        $post = Post::find($id);
        return view('back.posts.edit', compact('post', 'cats'));
    }

    public function update(PostRequest $request, $id)
    {
        $post = Post::find($id);
        $imageName = Post::find($id)->image;
        if($request->file('image'))
        {
            $imageName = time().'.'.$request->file('image')->getClientOriginalExtension();
            $location = public_path().'/front/post_images/'.$imageName;
            upload($request->file('image'), 560, 450, $location);           
        }
    
        
        $post->update([
            'category_id' => $request->category_id,
            'title' => $request->title,
            'body' => $request->body,
            'status' => $request->status,
            'image' => $imageName,

        ]);
        session()->flash('msg', 'تم تعديل المقال بنجاح');
        return redirect()->back();
    }
}
