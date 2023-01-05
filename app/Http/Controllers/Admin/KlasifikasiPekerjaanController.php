<?php

namespace App\Http\Controllers\Admin;

use App\Models\Klasifikasi;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class KlasifikasiPekerjaanController extends Controller
{
    public function index()
    {
        $data = Klasifikasi::all();
        return view('admin-page.klasifikasi.index', compact('data'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required'
        ]);

        $klasifikasi = Klasifikasi::create([
            'nama' => $request->nama
        ]);

        if ($klasifikasi) {
            toastr()->success('Data berhasil ditambah');
            return redirect()
                ->route('klasifikasi.index');
        } else {
            toastr()->error('Gagal menambah data');
            return redirect()
                ->back()
                ->withInput();
        }
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nama' => 'required'
        ]);
        $klasifikasi = Klasifikasi::findOrFail($id);

        $klasifikasi->nama = $request->nama;
        $klasifikasi->save();

        if ($klasifikasi) {
            toastr()->success('Data berhasil diubah');
            return redirect()
                ->route('klasifikasi.index');
        } else {
            toastr()->error('Gagal mengubah data');
            return redirect()
                ->back()
                ->withInput();
        }

    }

    public function destroy(Klasifikasi $klasifikasi)
    {
        $klasifikasi->delete();
        if($klasifikasi){
            toastr()->success('Data berhasil dihapus');
            return redirect()->back();
        } else {
            toastr()->error('Gagal menghapus data');
            return redirect()->back();
        }
    }
}
