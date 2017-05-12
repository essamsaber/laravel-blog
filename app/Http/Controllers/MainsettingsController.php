<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mainsetting;
use App\Slider;
use Intervention\Image\ImageManagerStatic as Image;


class MainsettingsController extends Controller
{
    public function __construct()
    {
        $this->middleware('IsAdmin')->only('edit', 'update', 'destroy');
    }
   
   public function main() 
   {
   	$settings = Mainsetting::find(1);
   	return view('back.main.settings', compact('settings'));
   }

   public function update()
   {
   		
   		$update = new Mainsetting;
   		$update->updateSettings();

   		session()->flash('msg', 'تم حفظ الإعدادات بنجاح');
   		return redirect()->back();

   }


   public function showSlider()
   {
      $sliders = Slider::all();
      return view('back.main.slider', compact('sliders'));
   }

   public function deleteSlide($id)
   {
      $slide = Slider::find($id);
      $slideToDelete = 'front/images/'.$slide->url;
      if(is_file($slideToDelete))
      {
         \File::delete($slideToDelete);
      }
      $slide->delete();
      session()->flash('msg', 'تم حذف الصورة بنجاح');
      return redirect()->back();
   }

   public function uploadSlide()
   {
      if(request()->file('new_slide'))
      {
         $this->validate(request(),[
            'new_slide' => 'image'
         ]);
         $slidename = time().'.'.request()->file('new_slide')->getClientOriginalExtension();
         $slideLocation = public_path().'/front/slider/'.$slidename;
         Slider::create(['url' => $slidename]);
         Image::make(request()->file('new_slide'))->resize(962,462)->save($slideLocation);
         session()->flash('msg', 'تم رفع الشريحة بنجاح');
         return redirect()->back();
      }
   }
}
