<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Uinfo;
use App\Http\Requests\UserRequest;

class UsersController extends Controller
{
    public function __construct()
    {
        $this->middleware('IsAdmin');
    }
    
    public function index()
    {
    	$users = User::all();
    	return view('back.users.index', compact('users'));
    }

    public function create()
    {
    	return view('back.users.create');
    }

    public function store(UserRequest $request)
    {
    	$user = new User();
    	$user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
    	$user->role = $request->role;
    	$user->save();

    	$uinfo = new Uinfo();
    	$uinfo->ufirst_name = $request->ufirst_name;
    	$uinfo->ulast_name = $request->ulast_name;
    	$uinfo->u_country = $request->u_country;


    	$user->uinfo()->save($uinfo);

    	session()->flash('msg', 'تم إضافة مستخدم جديد بنجاح');
    	return redirect('/admin/users');


    	
    }

    public function edit($id)
    {
    	$user = User::find($id);
    	return view('back.users.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
    	$user = User::find($id);
    	
    	$user->name = $request->name;
        $user->email = $request->email;
    	$user->role = $request->role;
    	$user->password = bcrypt($request->new_password);
    	if($request->new_password == null)
    	{
    		$user->password = $request->password;
    	}
    	$user->save();

        $user->uinfo->ulast_name = $request->ulast_name;
        $user->uinfo->ufirst_name = $request->ufirst_name;
    	$user->uinfo->u_country = $request->u_country;
        $user->uinfo->save();
    	

    	session()->flash('msg', 'تم تعديل بيانات المستخدم بنجاح');
    	return redirect('/admin/users');
    }

    public function destroy($id)
    {
    	$user = User::find($id);
    	$user->delete();
    	$user->uinfo()->delete();
    	$user->posts()->delete();
    	session()->flash('msg', 'تم حذف المستخدم بنجاح');
    	return redirect('/admin/users');
    }
}
