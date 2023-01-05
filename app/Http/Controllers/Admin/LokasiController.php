<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\LokasiUjian;
use App\Models\Kota;

class LokasiController extends Controller
{
    public function index()
    {
        $kota = Kota::all();
        $data = LokasiUjian::with(['kota'])->get();
        return view('admin-page.lokasi.index', compact('data', 'kota'));
    }

    public function store(Request $request)
    {
        $lokasi = new LokasiUjian;
        $lokasi->kota_id = $request->kota_id;
        $lokasi->nama_lokasi = $request->nama_lokasi;
        $lokasi->save();

        if ($lokasi) {
            toastr()->success('Data berhasil ditambahkan');
            return redirect()
                ->route('lokasi.index');
        } else {
            toastr()->error('Gagal menambahkan data');
            return redirect()
                ->back()
                ->withInput();
        }
    }

    public function update(Request $request, $id)
    {
        $lokasi = LokasiUjian::findOrFail($id);

        $lokasi->kota_id = $request->kota_id;
        $lokasi->nama_lokasi = $request->nama_lokasi;
        $lokasi->save();

        if ($lokasi) {
            toastr()->success('Data berhasil diubah');
            return redirect()
                ->route('lokasi.index');
        } else {
            toastr()->error('Gagal mengubah data');
            return redirect()
                ->back()
                ->withInput();
        }
    }

    public function destroy($id)
    {
        $lokasi = LokasiUjian::firstWhere('id',$id);
        $lokasi->delete();

        if($lokasi){
            toastr()->success('Data berhasil dihapus');
            return redirect()->back();
        } else {
            toastr()->error('Gagal menghapus data');
            return redirect()->back();
        }
    }
}
