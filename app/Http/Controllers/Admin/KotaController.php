<?php

namespace App\Http\Controllers\Admin;

use App\Models\Kota;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KotaController extends Controller
{
    public function index()
    {
        $kota = Kota::all();
        return view('admin-page.kota.index', compact('kota'));
    }

    public function store(Request $request)
    {
        $kota = new Kota;
        $kota->nama_kota = $request->nama_kota;
        $kota->provinsi = $request->provinsi;
        $kota->save();

        if ($kota) {
            toastr()->success('Data berhasil ditambahkan');
            return redirect()->route('kota.index');
        } else {
            toastr()->success('Gagal menambahkan data');
            return redirect()
                ->back()
                ->withInput();
        }
    }

    public function update(Request $request, $id)
    {
        $kota = Kota::findOrFail($id);
        $kota->update([
            'nama_kota' => $request->nama_kota,
            'provinsi' => $request->provinsi
        ]);

        $kota->nama_kota = $request->nama_kota;
        $kota->provinsi = $request->provinsi;
        $kota->save();

        if ($kota) {
            toastr()->success('Data berhasil diubah');
            return redirect()->route('kota.index');
        } else {
            toastr()->success('Gagal mengubah data');
            return redirect()
                ->back()
                ->withInput();
        }
    }

    public function destroy($id)
    {
        $kota = Kota::firstWhere('id',$id);
        $kota->delete();

        if($kota){
            toastr()->success('Data berhasil dihapus');
            return redirect()->back();
        } else {
            toastr()->error('Gagal menghapus data');
            return redirect()->back();
        }
    }
}
