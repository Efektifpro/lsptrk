<?php

namespace App\Http\Controllers\Admin;

use File;
use App\Models\Setting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SettingController extends Controller
{
    public function index()
    {
        return view('admin-page.setting.index');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $logo = $request->file('logo');
        $about_img = $request->file('about_img');
        $logoName = 'logo-'.time();
        $aboutName = 'about-'.time();
        $extension_logo = $logo->getClientOriginalExtension();
        $extension_about = $about_img->getClientOriginalExtension();
        $newLogo = $logoName . '.' . $extension_logo;
        $newAbout = $aboutName . '.' . $extension_about;
        $pathLogo = $logo->move('assets/admin/setting', $newLogo);
        $pathAbout = $about_img->move('assets/admin/setting', $newAbout);

        $setting = new Setting;
        $setting->logo = $newLogo;
        $setting->alamat = $request->alamat;
        $setting->telp = $request->telp;
        $setting->fax = $request->fax;
        $setting->email = $request->email;
        $setting->visi = $request->visi;
        $setting->misi = $request->misi;
        $setting->welcome_msg = $request->welcome_msg;
        $setting->about = $request->about;
        $setting->about_img = $newAbout;
        $setting->save();

        if($setting) {
            toastr()->success('Pengaturan Aplikasi berhasil ditambahkan');
            return redirect()->route('setting.index');
        }
    }
}
