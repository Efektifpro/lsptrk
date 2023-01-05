<?php

namespace App\Http\Controllers\Admin;

use App\Models\Institusi;
use App\Models\TipePeserta;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class InstitusiController extends Controller
{
    public function index()
    {
        $data = Institusi::orderBy('id', 'ASC')
                ->with(['tipe'])
                ->get();
        // dd($data);
        $tipe = TipePeserta::all();

        return view('admin-page.institusi.index', compact('data', 'tipe'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required'
        ]);

        $institusi = new Institusi;
        $institusi->nama = $request->nama;
        $institusi->tipe_id = $request->tipe_id;
        $institusi->save();

        if ($institusi) {
            toastr()->success('Data berhasil ditambah');
            return redirect()
                ->route('institusi.index');
        } else {
            toastr()->error('Gagal menambah data');
            return redirect()
                ->back()
                ->withInput();
        }
    }

    public function update(Request $request, Institusi $institusi)
    {
        $this->validate($request, [
            'nama' => 'required'
        ]);

        $institusi->nama = $request->nama;
        $institusi->tipe_id = $request->tipe_id;
        $institusi->save();

        if ($institusi) {
            toastr()->success('Data berhasil diubah');
            return redirect()
                ->route('institusi.index');
        } else {
            toastr()->error('Gagal mengubah data');
            return redirect()
                ->back()
                ->withInput();
        }
    }

    public function destroy(Institusi $institusi)
    {
        $institusi->delete();
        if($institusi){
            toastr()->success('Data berhasil dihapus');
            return redirect()->back();
        } else {
            toastr()->error('Gagal menghapus data');
            return redirect()->back();
        }
    }
}
