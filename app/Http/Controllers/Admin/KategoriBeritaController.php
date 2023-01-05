<?php

namespace App\Http\Controllers\Admin;

use toastr;
use Illuminate\Http\Request;
use App\Models\KategoriBerita;
use App\Http\Controllers\Controller;

class KategoriBeritaController extends Controller
{
    public function store(Request $request)
    {
        $kat_berita = new KategoriBerita;
        $kat_berita->nama = $request->nama;
        $kat_berita->save();
        if($kat_berita) {
            toastr()->success('Data berhasil ditambahkan');
            return redirect()->route('berita.index');
        } else {
            toastr()->error('Gagal.. Try Again !s');
            return redirect()->back()->withInput();

        }
    }

    public function update(Request $request, $id)
    {
        $kat_berita = KategoriBerita::findOrFail($id);

        $kat_berita->nama = $request->nama;
        $kat_berita->save();

        if ($kat_berita) {
            toastr()->success('Data berhasil diubah');
            return redirect()->route('berita.index');
        } else {
            return redirect()
                ->back()
                ->withInput()
                ->with([
                    'error' => 'Gagal... Try Again!!'
                ]);
        }
    }

    public function destroy($id)
    {
        $kat_berita = KategoriBerita::firstWhere('id',$id);
        $kat_berita->delete();

        return redirect()->back()->with(['success'=>'Data berhasil dihapus']);
    }
}
