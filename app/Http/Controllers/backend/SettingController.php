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
        $setting = Setting::where('id', 1)->first();
        return view('backEnd.setting.setting', compact('setting'));
    }
    //settingStore
    public function settingStore(Request $request)
    {
        $request->validate([
            'company_name' => 'required',
            'phone' => 'required',
            'email' => 'required',
        ]);
        $setting = Setting::where('id', 1)->first();
        $setting->company_name = $request->company_name;
        $setting->phone = $request->phone;
        $setting->email = $request->email;
        $setting->city = $request->city;
        $setting->state = $request->state;
        $setting->country = $request->country;
        $setting->zip_code = $request->zip_code;
        if ($request->file('compony_logo_menu')) {
            $setting->compony_logo_menu = $this->componyLogoMenu($request);
        }
        if ($request->file('compony_logo_footer')) {
            $setting->compony_logo_footer = $this->componyLogoFooter($request);
        }
        $setting->save();
        return back()->with('message', 'Settings Stored Successfully');
    }
    //SaveImage
    public function componyLogoMenu($request)
    {
        $image = $request->file('compony_logo_menu');
        $imageName = rand() . '.' . $image->getClientOriginalExtension();
        $directory = 'backEndAsset/projectImg/componyLogoMenu-img/';
        $imageUrl = $directory . $imageName;
        $image->move($directory, $imageName);
        return $imageUrl;
    }
    //SaveImage
    public function componyLogoFooter($request)
    {
        $image = $request->file('compony_logo_footer');
        $imageName = rand() . '.' . $image->getClientOriginalExtension();
        $directory = 'backEndAsset/projectImg/componyLogoFooter-img/';
        $imageUrl = $directory . $imageName;
        $image->move($directory, $imageName);
        return $imageUrl;
    }
}