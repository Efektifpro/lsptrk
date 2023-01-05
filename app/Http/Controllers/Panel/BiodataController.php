<?php

namespace App\Http\Controllers\Panel;

use App\Models\Biodata;
use App\Models\Institusi;
use App\Models\Klasifikasi;
use App\Models\TipePeserta;
use App\Models\PerguruanTinggi;
use App\Models\PekerjaanPeserta;
use App\Models\PendidikanPeserta;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class BiodataController extends Controller
{
    public function check()
    {
        $data_isExist = Biodata::where('id', Auth::id())->count() > 0;
        // die($data_isExist);
        return view('user-page.dashboard.index', compact('data_isExist'));
    }

    public function getInstitusi($id)
    {
        $institusi = Institusi::where('tipe_id', $id)->pluck("nama", "id");
        return json_encode($institusi);
    }

    public function index()
    {
        $data = Biodata::where('user_id', Auth::id())
                ->with([
                    'user', 'klasifikasi', 'institusi' => function($query) {
                        return $query->with(['tipe']);
                    }
                ])->first();
        $klasifikasi = Klasifikasi::all();
        $tipe = TipePeserta::all();
        $institusi = Institusi::all();
        $pekerjaan_peserta = PekerjaanPeserta::where('user_id', Auth::id())
                    ->with(['user', 'institusi'])->get();
        $perguruan_tinggi = PerguruanTinggi::all();
        $pendidikan_peserta = PendidikanPeserta::where('user_id', Auth::id())
                    ->with(['user', 'perguruan_tinggi'])->get();
        return view('user-page.data-diri.index', compact('data', 'klasifikasi', 'tipe', 'institusi', 'pekerjaan_peserta', 'perguruan_tinggi', 'pendidikan_peserta'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'jenkel' => 'required',
            'nip_institusi' => 'required'
        ]);

        $email = $request->email;

        DB::table('users')
            ->where('id', Auth::id())
            ->update(['email' => $email]);

        $biodata = new Biodata;
        $biodata->user_id = Auth::id();
        $biodata->jenkel = $request->jenkel;
        $biodata->temp_lahir = $request->temp_lahir;
        $biodata->tgl_lahir = $request->tgl_lahir;
        $biodata->kewarganegaraan = $request->kewarganegaraan;
        $biodata->alamat = $request->alamat;
        $biodata->ibu_kandung = $request->ibu_kandung;
        $biodata->nohp = $request->nohp;
        $biodata->telp = $request->telp;
        $biodata->institusi_id = $request->institusi_id;
        $biodata->nip_institusi = $request->nip_institusi;
        $biodata->klasifikasi_id = $request->klasifikasi_id;
        $biodata->pend_terakhir = $request->pend_terakhir;
        $biodata->save();

        if ($biodata) {
            return redirect('panel')
                ->with([
                    'success' => 'Sukses, Data Anda Berhasil diperbarui !'
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
