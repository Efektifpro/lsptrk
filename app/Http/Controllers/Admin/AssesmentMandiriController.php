<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AssesmentMandiri;
use App\Models\BidangUji;

class AssesmentMandiriController extends Controller
{
    public function index()
    {
        $bidang = BidangUji::all();
        $data = AssesmentMandiri::with(['bidang_uji'])->get();
        return view('admin-page.assesment-mandiri.index', compact('data', 'bidang'));
    }

    public function store(Request $request)
    {
        $asman = new AssesmentMandiri;
        $asman->bidang_id = $request->bidang_id;
        $asman->judul = $request->judul;
        $asman->pertanyaan = $request->pertanyaan;
        $asman->save();

        if ($asman) {
            toastr()->success('Data berhasil ditambahkan');
            return redirect()
                ->route('assesment_mandiri.index');
        } else {
            toastr()->error('Gagal menambah data');
            return redirect()->back()->withInput();
        }
    }

    public function update(Request $request, $id)
    {
        $asman = AssesmentMandiri::findOrFail($id);

        $asman->bidang_id = $request->bidang_id;
        $asman->judul = $request->judul;
        $asman->pertanyaan = $request->pertanyaan;
        $asman->save();

        if ($asman) {
            toastr()->success('Data berhasil diubah');
            return redirect()
                ->route('assesment_mandiri.index');
        } else {
            toastr()->error('Gagal mengubah data');
            return redirect()->back()->withInput();
        }
    }

    public function destroy($id)
    {
        $asman = AssesmentMandiri::firstWhere('id',$id);
        $asman->delete();

        if($asman){
            toastr()->success('Data berhasil dihapus');
            return redirect()->back();
        } else {
            toastr()->error('Gagal menghapus data');
            return redirect()->back()->withInput();
        }
    }
}
