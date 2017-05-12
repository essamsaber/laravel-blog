<?php

namespace App;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Http\Request;



class Mainsetting extends Model
{
    
    public function updateSettings()
    {
    	$settings = static::find(1);
   		$settings->logo = request('logo');

   		if(request()->file('new_logo'))
   		{
   			//$this->validate(request(), ['new_logo' => 'image']);
   			$filename = time(). '.' . request()->file('new_logo')->getClientOriginalExtension();
   			$location = public_path().'/front/images/'.$filename;
   			Image::make(request()->file('new_logo'))->resize(319,65)->save($location);
   			$pathToDelete = 'front/images/'.$settings->logo;
   			if(is_file($pathToDelete))
   			{
   				\File::delete($pathToDelete);
   			}
   			$settings->logo = $filename;
   		}

   		$settings->sitename = request()->sitename;
   		$settings->status = request()->status;
   		$settings->facebook = request()->facebook;
   		$settings->googleplus = request()->googleplus;
   		$settings->twitter = request()->twitter;
   		$settings->site_des = request()->site_des;
   		$settings->copyright = request()->copyright;
   		$settings->save();
    }
}
