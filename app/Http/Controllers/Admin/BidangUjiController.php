<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BidangUji;

class BidangUjiController extends Controller
{
    public function index()
    {
        $bidang = BidangUji::all();
        return view('admin-page.bidang.index', compact('bidang'));
    }

    public function store(Request $request)
    {
        $bidang = new BidangUji;
        $bidang->nama = $request->nama;
        $bidang->save();

        if ($bidang) {
            toastr()->success('Data berhasil ditambahkan');
            return redirect()
                ->route('bidang.index');
        } else {
            toastr()->error('Gagal menambahkan data');
            return redirect()
                ->back()
                ->withInput();
        }
    }

    public function update(Request $request, $id)
    {
        $bidang = BidangUji::findOrFail($id);

        $bidang->nama = $request->nama;
        $bidang->save();

        if ($bidang) {
            toastr()->success('Data berhasil diubah');
            return redirect()
                ->route('bidang.index');
        } else {
            toastr()->error('Gagal mengubah data');
            return redirect()
                ->back()
                ->withInput();
        }
    }

    public function destroy($id)
    {
        $bidang = BidangUji::firstWhere('id',$id);
        $bidang->delete();

        if($bidang){
            toastr()->success('Data berhasil dihapus');
            return redirect()->back();
        } else {
            toastr()->error('Gagal menghapus data');
            return redirect()->back()->withInput();
        }
    }
}
