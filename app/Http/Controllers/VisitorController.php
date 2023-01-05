<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Setting;
use Illuminate\Http\Request;

class VisitorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function beranda()
    {
        $berita = Berita::all();
        $setting = Setting::first();
        return view('visitor-page.beranda', get_defined_vars());
    }


    public function profile()
    {
        $setting = Setting::first();
        return view('visitor-page.profile', get_defined_vars());
    }


    public function registrasi()
    {
        $setting = Setting::first();
        return view('visitor-page.registrasi', get_defined_vars());
    }


    public function login()
    {
        $setting = Setting::first();
        return view('visitor-page.login', get_defined_vars());
    }


    public function jadwal()
    {
        $setting = Setting::first();
        return view('visitor-page.jadwal', get_defined_vars());
    }


    public function berita_umum()
    {
        $setting = Setting::first();
        return view('visitor-page.berita', get_defined_vars());
    }


    public function berita_analisis()
    {
        $setting = Setting::first();
        return view('visitor-page.berita', get_defined_vars());
    }


    public function gallery()
    {
        $setting = Setting::first();
        return view('visitor-page.gallery', get_defined_vars());
    }


    public function contact()
    {
        $setting = Setting::first();
        return view('visitor-page.contact-us', get_defined_vars());
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
