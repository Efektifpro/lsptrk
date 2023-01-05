<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BidangUji;
use App\Models\TanggalUji;

class TanggalUjiController extends Controller
{
    public function index()
    {
        $bidang = BidangUji::all();
        $data = TanggalUji::with(['bidang_uji'])->get();
        return view('admin-page.tanggal.index', compact('data', 'bidang'));
    }

    public function store(Request $request)
    {
        $tanggal = new TanggalUji;
        $tanggal->bidang_id = $request->bidang_id;
        $tanggal->tanggal = $request->tanggal;
        $tanggal->save();

        if ($tanggal) {
            toastr()->success('Data berhasil ditambahkan');
            return redirect()->route('tanggal.index');
        } else {
            toastr()->error('Gagal menambahkan data');
            return redirect()
                ->back()
                ->withInput();
        }
    }

    public function update(Request $request, $id)
    {
        $tanggal = TanggalUji::findOrFail($id);

        $tanggal->bidang_id = $request->bidang_id;
        $tanggal->tanggal = $request->tanggal;
        $tanggal->save();

        if ($tanggal) {
            toastr()->success('Data berhasil diubah');
            return redirect()->route('tanggal.index');
        } else {
            toastr()->error('Gagal mengubah data');
            return redirect()
                ->back()
                ->withInput();
        }
    }

    public function destroy($id)
    {
        $tanggal = TanggalUji::firstWhere('id',$id);
        $tanggal->delete();

        if($tanggal){
            toastr()->success('Data berhasil dihapus');
            return redirect()->back();
        } else {
            toastr()->error('Gagal menghapus data');
            return redirect()->back()->withInput();
        }
    }
}
