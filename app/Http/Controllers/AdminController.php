<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Category;
use App\Post;
use App\Comment;

class AdminController extends Controller
{

    public function index() {
    	$users = User::count();
    	$cats = Category::count();
    	$posts = Post::count();
    	$comments = Comment::count();
    	return view('back.main.index', compact('users', 'cats', 'posts', 'comments'));
    }

    public function showProfile($id)
    {
    	$user = User::find($id);
    	return view('back.profile.show', compact('user'));
    }

    public function saveProfile($id)
    {
    	if(request('password') != null) {
    		$this->validate(request(), [
    			'password' => 'confirmed'
			]);
    	}
    	$user = User::find($id);
    	$user->name = request('name');
    	$user->uinfo->ufirst_name = request('ufirst_name');
    	$user->uinfo->ulast_name = request('ulast_name');
    	$user->email = request('email');
    	$user->uinfo->u_country = request('u_country');
    	$user->password = bcrypt(request('password'));
    	if(request('password') == null) {
    		$user->password = request('old_password');
    	}
    	$user->save();
    	$user->uinfo->save();
    	session()->flash('msg', 'تم تعديل بيناتاك بنجاح');
    	return back();
    }
}
