<?php

namespace App\Http\Controllers\Panel;

use App\Models\PendidikanPeserta;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class PendidikanPesertaController extends Controller
{
    public function store(Request $request)
    {
        $pendidikan = new PendidikanPeserta;
        $pendidikan->user_id = Auth::id();
        $pendidikan->perguruan_tinggi_id = $request->perguruan_tinggi_id;
        $pendidikan->strata = $request->strata;
        $pendidikan->jurusan = $request->jurusan;
        $pendidikan->masuk = $request->masuk;
        $pendidikan->tamat = $request->tamat;
        $pendidikan->save();

        if ($pendidikan) {
            return redirect('panel/biodata')
                ->with([
                    'judul' => 'Simpan Data',
                    'success' => 'Sukses, Data Pendidikan Anda Berhasil disimpan !'
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
        $update_pendidikan = PendidikanPeserta::firstWhere('id', $id);
        $update_pendidikan->perguruan_tinggi_id = $request->perguruan_tinggi_id;
        $update_pendidikan->strata = $request->strata;
        $update_pendidikan->jurusan = $request->jurusan;
        $update_pendidikan->masuk = $request->masuk;
        $update_pendidikan->tamat = $request->tamat;
        $update_pendidikan->save();

        if ($update_pendidikan) {
            return redirect('panel/biodata')
                ->with([
                    'judul' => 'Ubah Data',
                    'success' => 'Sukses, Data Pekerjaan Anda Berhasil diubah !'
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
        $hapus_pendidikan = PendidikanPeserta::findOrFail($id);
        $hapus_pendidikan->delete();
        if ($hapus_pendidikan) {
            return redirect('panel/biodata')
                ->with([
                    'judul' => 'Hapus Data',
                    'success' => 'Sukses, Data Pekerjaan Anda Berhasil dihapus !'
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
}
