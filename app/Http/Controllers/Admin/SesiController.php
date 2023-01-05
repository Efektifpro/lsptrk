<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Sesi;
use App\Models\TanggalUji;

class SesiController extends Controller
{
    public function index()
    {
        $tanggal = TanggalUji::with(['bidang_uji'])->get();
        $data = Sesi::with(['tanggal_uji'])->get();
        return view('admin-page.sesi.index', compact('data', 'tanggal'));
    }

    public function store(Request $request)
    {
        $sesi = new Sesi;
        $sesi->tanggal_id = $request->tanggal_id;
        $sesi->sesi = $request->sesi;
        $sesi->mulai = $request->mulai;
        $sesi->selesai = $request->selesai;
        $sesi->save();

        if ($sesi) {
            return redirect()
                ->route('sesi.index')
                ->with([
                    'success' => 'Data Berhasil ditambahkan'
                ]);
        } else {
            return redirect()
                ->back()
                ->withInput()
                ->with([
                    'error' => 'Gagal... Try Again!!'
                ]);
        }
    }

    public function update(Request $request, $id)
    {
        $sesi = Sesi::findOrFail($id);

        $sesi->tanggal_id = $request->tanggal_id;
        $sesi->sesi = $request->sesi;
        $sesi->mulai = $request->mulai;
        $sesi->selesai = $request->selesai;
        $sesi->save();

        if ($sesi) {
            return redirect()
                ->route('sesi.index')
                ->with([
                    'success' => 'Data Berhasil ditambahkan'
                ]);
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
        $sesi = Sesi::firstWhere('id',$id);
        $sesi->delete();

        return redirect()->back()->with(['success'=>'Data berhasil dihapus']);
    }
}
