<?php

namespace App\Http\Controllers\Admin;

use File;
use DataTables;
use App\Models\Berita;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\KategoriBerita;
use App\Http\Controllers\Controller;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // if($request->ajax()) {
        //     $kat_berita = KategoriBerita::all();
        //     return Datatables::of($kat_berita)
        //             ->addIndexColumn()
        //             ->addColumn('action', function($row){
        //                 $btn = '<a href="#" role="button" class="btn btn-sm btn-primary" title="Edit"><i class="fa fa-edit"></i></button><span>';
        //                 $btn .= '<a href="#" role="button" class="btn btn-sm btn-danger" title="Delete"><i class="fa fa-trash"></i></button>';
        //                 return $btn;
        //             })
        //             ->rawColumns(['action'])
        //             ->make(true);
        // }
        $kat_berita = KategoriBerita::all();
        $berita = Berita::all();
        return view('admin-page.website-berita.index', get_defined_vars());
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'judul' => 'required|unique:berita|regex:/^[a-zA-ZÑñ\s]+$/',
            'isi' => 'required'
        ]);
        $data = $request->all();
        $file = $request->file('img');
        $name = time();
        $extension = $file->getClientOriginalExtension();
        $newName = $name . '.' . $extension;
        $path = $file->move('assets/admin/berita', $newName);

        $berita = new Berita;
        $berita->thumbnail = $newName;
        $berita->judul = $request->judul;
        $berita->slug = Str::slug($request->judul, '-');
        $berita->kategori_id = $request->kat_berita;
        $berita->isi = $request->isi;
        $berita->save();

        if($berita){
            toastr()->success('Data berhasil ditambahkan');
            return redirect()->route('berita.index');
        }
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
