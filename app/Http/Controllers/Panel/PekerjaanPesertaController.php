<?php

namespace App\Http\Controllers\Panel;

use Illuminate\Http\Request;
use App\Models\PekerjaanPeserta;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class PekerjaanPesertaController extends Controller
{
    public function index()
    {

    }

    public function store(Request $request)
    {
        $pekerjaan_peserta = new PekerjaanPeserta;
        $pekerjaan_peserta->user_id = Auth::id();
        $pekerjaan_peserta->institusi_id = $request->institusi_id;
        $pekerjaan_peserta->posisi = $request->posisi;
        $pekerjaan_peserta->dari = $request->dari;
        $pekerjaan_peserta->sampai = $request->sampai;
        $pekerjaan_peserta->save();

        if ($pekerjaan_peserta) {
            return redirect('panel/biodata')
                ->with([
                    'judul' => 'Simpan Data',
                    'success' => 'Sukses, Data Pekerjaan Anda Berhasil disimpan !'
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
        $update_pekerjaan = PekerjaanPeserta::firstWhere('id', $id);
        $update_pekerjaan->institusi_id = $request->institusi_id;
        $update_pekerjaan->posisi = $request->posisi;
        $update_pekerjaan->dari = $request->dari;
        $update_pekerjaan->sampai = $request->sampai;
        $update_pekerjaan->save();

        if ($update_pekerjaan) {
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
        $hapus_pekerjaan = PekerjaanPeserta::findOrFail($id);
        $hapus_pekerjaan->delete();
        if ($hapus_pekerjaan) {
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
