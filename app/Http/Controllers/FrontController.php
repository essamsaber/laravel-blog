<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slider;
use App\Post;
use App\Comment;

class FrontController extends Controller
{
    public function index()
    {
    	$posts = Post::latest()->paginate(6);


    	// if($month = request('month')) {
    	// 	$posts->whereMonth('created_at', $month);
    	// }
    	// if($year = request('year')) {
    	// 	$posts->whereYear('created_at', $year);
    	// }
    	return view('welcome', compact('posts'));
    }

    public function show($slug)
    {
    	$post = Post::where('slug', $slug)->firstOrFail();
        $comments = $post->comments()->where('status', 1)->get();
    	return view('front.posts.show', compact('post', 'comments'));
    }

    public function store(Request $request)
    {

    	Comment::create(['post_id' => $request->post_id,'author' => $request->author, 'body' => $request->body]);
    	session()->flash('msg', 'تم إرسال التعليق بنجاح ولكن سيتم مراجعته من قبل الإدارة أولا');
    	return redirect()->back();
    }

    public function catPosts($id)
    {
        $posts = Post::where('category_id', $id)->paginate(6);
        return view('welcome', compact('posts'));
    }

    public function contactUs()
    {
        return view('contact');
    }
}
