<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;

class CommentsController extends Controller
{
    public function index()
    {
    	$comments = Comment::all();
    	return view('back.comments.index', compact('comments'));
    }

    public function update($id)
    {
    	$comment = Comment::find($id);
    	if($comment->status == 0)
    	{
    		$comment->status = 1;
    		session()->flash('msg', 'تمت الموافقة على التعليق');
    	} else {
    		$comment->status = 0;
    		session()->flash('msg', 'تمت الغاء نشر التعليق');
    	}
    	$comment->save();
    	return back();
    }

    public function deleteComment($id)
    {
		$comment = Comment::find($id);
		$comment->delete();
		session()->flash('msg', 'تم حذف التعليق');
		return back();
    }
}
