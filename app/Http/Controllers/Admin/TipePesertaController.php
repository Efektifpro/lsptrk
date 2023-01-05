<?php

namespace App\Http\Controllers\Admin;

use App\Models\TipePeserta;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TipePesertaController extends Controller
{
    public function index()
    {
        $data = TipePeserta::all();
        return view('admin-page.tipe-peserta.index', compact('data'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'tipe' => 'required'
        ]);

        $tipe = TipePeserta::create([
            'tipe' => $request->tipe
        ]);

        if ($tipe) {
            toastr()->success('Data berhasil ditambah');
            return redirect()
                ->route('tipe-peserta.index');
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
            'tipe' => 'required'
        ]);
        $tipe = TipePeserta::findOrFail($id);

        $tipe->tipe = $request->tipe;
        $tipe->save();

        if ($tipe) {
            toastr()->success('Data berhasil diubah');
            return redirect()
                ->route('tipe-peserta.index');
        } else {
            toastr()->error('Gagal mengubah data');
            return redirect()
                ->back()
                ->withInput();
        }

    }

    public function destroy(TipePeserta $tipepeserta, $id)
    {
        $cari = $tipepeserta::firstWhere('id',$id);

        $cari->delete();
        if($cari){
            toastr()->success('Data berhasil dihapus');
            return redirect()->back();
        } else {
            toastr()->error('Gagal menghapus data');
            return redirect()->back();
        }
    }
}
