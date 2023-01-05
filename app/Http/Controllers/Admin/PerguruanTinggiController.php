<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PerguruanTinggi;

class PerguruanTinggiController extends Controller
{
    public function index()
    {
        $data = PerguruanTinggi::all();
        return view('admin-page.perguruan-tinggi.index', compact('data'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required'
        ]);

        $save = new PerguruanTinggi;
        $save->nama = $request->nama;
        $save->save();

        if ($save) {
            toastr()->success('Data berhasil ditambah');
            return redirect()
                ->route('perguruan-tinggi.index');
        } else {
            toastr()->error('Gagl menambah data');
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
        $ubah = PerguruanTinggi::findOrFail($id);

        $ubah->nama = $request->nama;
        $ubah->save();

        if ($ubah) {
            toastr()->success('Data berhasil diubah');
            return redirect()
                ->route('perguruan-tinggi.index');
        } else {
            toastr()->error('Gagal mengubah data');
            return redirect()
                ->back()
                ->withInput();
        }

    }

    public function destroy($id)
    {
        $hapus = PerguruanTinggi::firstWhere('id',$id);
        $hapus->delete();

        if($hapus){
            toastr()->success('Data berhasil dihapus');
            return redirect()->back();
        } else {
            toastr()->error('Gagal menghapus data');
            return redirect()->back();
        }
    }
}
