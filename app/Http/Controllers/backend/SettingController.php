<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    //setting
    public function setting()
    {
        $setting = Setting::where('id',1)->first();
        return view('backEnd.setting.setting',compact('setting'));
    }
    //settingStore
    public function settingStore(Request $request)
    {
        $request->validate([
            'companyName' => 'required',
            'phone' => 'required',
            'email' => 'required',
        ]);
        $setting = Setting::where('id',1)->first();
        $setting->companyName = $request->companyName;
        $setting->phone = $request->phone;
        $setting->email = $request->email;
        $setting->city = $request->city;
        $setting->state = $request->state;
        $setting->country = $request->country;
        $setting->zipCode = $request->zipCode;
        if ($request->file('componyLogoMenu')) {
            $setting->componyLogoMenu = $this->componyLogoMenu($request);
        }
        if ($request->file('componyLogoFooter')) {
            $setting->componyLogoFooter = $this->componyLogoFooter($request);
        }
        $setting->save();
        return back()->with('message','Settings Stored Successfully');
    }
      //SaveImage
      public function componyLogoMenu($request){
        $image = $request->file('componyLogoMenu');
        $imageName = rand().'.'.$image->getClientOriginalExtension();
        $directory = 'backEndAsset/projectImg/componyLogoMenu-img/';
        $imageUrl = $directory.$imageName;
        $image->move($directory,$imageName);
        return $imageUrl;
    }
      //SaveImage
      public function componyLogoFooter($request){
        $image = $request->file('componyLogoFooter');
        $imageName = rand().'.'.$image->getClientOriginalExtension();
        $directory = 'backEndAsset/projectImg/componyLogoFooter-img/';
        $imageUrl = $directory.$imageName;
        $image->move($directory,$imageName);
        return $imageUrl;
    }
}
