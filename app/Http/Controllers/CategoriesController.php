<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
class CategoriesController extends Controller
{
    public function __construct()
    {
        $this->middleware('IsAdmin');
    }
    public function index()
    {
    	$categories = Category::all();
    	return view('back.cats.index', compact('categories'));
    }

    public function create()
    {
    	return view('back.cats.create');
    }


    public function edit($id)
    {
    	$cat = Category::find($id);
    	return view('back.cats.edit', compact('cat'));
    }

   
    public function update($id)
    {	
    	$this->validate(request(), [
    		'cat_name' => 'required'
		]);
    	Category::find($id)->update(['name' => request('cat_name')]);
    	session()->flash('msg', 'تم تعديل اسم القسم بنجاح');
    	return redirect()->back();
    }

    public function store()
    {
    	$this->validate(request(), 
    		['cat_name' => 'required']
		);
		Category::create(['name' => request('cat_name')]);
		session()->flash('msg', 'تم إضافة القسم بنجاح');
		return redirect()->back();
    }


    public function destroy($id)
    {
    	$category = Category::find($id);
    	$category->delete();
    	$category->posts()->delete();
    	session()->flash('msg', 'تم حذف القسم بنجاح');
    	return redirect()->back();
    }
}
