<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Biodata;
use App\Models\Kota;
use App\Models\Sesi;
use App\Models\BidangUji;
use App\Models\TanggalUji;
use App\Models\LokasiUjian;
use App\Models\AssesmentMandiri;
use App\Models\PekerjaanPeserta;
use App\Models\PendidikanPeserta;
use Illuminate\Support\Facades\Auth;

class PendaftaranujianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function getLokasi($id)
    {
        $lokasi = LokasiUjian::where('kota_id', $id)->pluck("nama_lokasi", "id");
        // die($lokasi);
        return json_encode($lokasi);
    }

    public function getTanggal($id)
    {
        $tanggal = TanggalUji::where('bidang_id', $id)->pluck("tanggal", "id");
        // die($lokasi);
        return json_encode($tanggal);
    }

    public function getSesi($id)
    {
        $sesi = Sesi::where('tanggal_id', $id)->pluck("sesi", "id");
        // die($sesi);
        return json_encode($sesi);
    }

    public function getAssesmentMandiri($id)
    {
        $asman = AssesmentMandiri::where('bidang_id', $id)->get();
        return json_encode($asman);
    }

    public function index(Request $request)
    {
        $data_isExist = Biodata::where('user_id', Auth::id())->count() > 0;
        // dd($data_isExist);
        $kota = Kota::all();
        $bidang = BidangUji::all();
        $pekerjaan_peserta = PekerjaanPeserta::where('user_id', Auth::id())
                    ->with(['user', 'institusi'])->get();
        $pendidikan_peserta = PendidikanPeserta::where('user_id', Auth::id())
                    ->with(['user', 'perguruan_tinggi'])->get();
        $data = Biodata::where('user_id', Auth::id())
                ->with([
                    'user', 'klasifikasi', 'institusi' => function($query) {
                        return $query->with(['tipe']);
                    }
                ])->first();
        return view('user-page.pendaftaran-ujian.index', compact('data', 'pekerjaan_peserta', 'pendidikan_peserta', 'kota', 'bidang', 'data_isExist'));
    }

    public function createStepOne(Request $request)
    {
        $pendaftaran = $request->session()->get('pendaftaran');
        $data_isExist = Biodata::where('user_id', Auth::id())->count() > 0;
        $data = Biodata::where('user_id', Auth::id())
                ->with([
                    'user', 'klasifikasi', 'institusi' => function($query) {
                        return $query->with(['tipe']);
                    }
                ])->first();
        $pekerjaan_peserta = PekerjaanPeserta::where('user_id', Auth::id())
                ->with(['user', 'institusi'])->get();
        $pendidikan_peserta = PendidikanPeserta::where('user_id', Auth::id())
                ->with(['user', 'perguruan_tinggi'])->get();
        return view('user-page.pendaftaran-ujian.create_step_one', compact('pendaftaran', 'data_isExist', 'data', 'pekerjaan_peserta', 'pendidikan_peserta'));
    }

    public function postCreateStepOne(Request $request)
    {
        $validatedData = $request->validate([
            'user_id' => 'required',
            'name' => 'required',
        ]);


        if(empty($request->session()->get('pendaftaran_ujian'))){
            $pendaftaran = new PendaftaranUjian();
            $pendaftaran->user_id = $request->user_id;
            $pendaftaran->name = $request->name;
            $request->session()->put('pendaftaran', $pendaftaran);
        }else{
            $pendaftaran = $request->session()->get('pendaftaran');
            $pendaftaran->fill($validatedData);
            $request->session()->put('pendaftaran', $pendaftaran);
        }
        dd($request->session()->put('pendaftaran', $pendaftaran));
        return redirect()->route('pendaftaran.step_two');
    }

    public function createStepTwo(Request $request)
    {
        $kota = Kota::all();
        $bidang = BidangUji::all();
        $pendaftaran = $request->session()->get('pendaftaran');
        return view('user-page.pendaftaran-ujian.create_step_two', compact('pendaftaran', 'kota', 'bidang'));
    }

    public function postCreateStepTwo(Request $request)
    {
        $validatedData = $request->validate([
            'kota_id' => 'required',
            'lokasi_id' => 'required',
            'sesi_id' => 'required',
            'metode_bayar' => 'required',
        ]);

        $pendaftaran = $request->session()->get('pendaftaran');
        $pendaftaran->fill($validatedData);
        $request->session()->put('pendaftaran', $pendaftaran);
        return redirect()->route('pendaftaran.step_three');
    }

    public function createStepThree(Request $request)
    {
        $pendaftaran = $request->session()->get('pendaftaran');
        return view('user-page.pendaftaran-ujian.create_step_three', compact('pendaftaran'));
    }

    public function postCreateStepThree(Request $request)
    {
        $validatedData = $request->validate([
            'assesment_id' => 'required',
            'jawaban' => 'required',
        ]);

        $pendaftaran = $request->session()->get('pendaftaran');
        $pendaftaran->fill($validatedData);
        $request->session()->put('pendaftaran', $pendaftaran);
        return redirect()->route('pendaftaran.step_four');
    }

    public function createStepFour(Request $request)
    {
        $pendaftaran = $request->session()->get('pendaftaran');
        return view('user-page.pendaftaran-ujian.create_step_four', compact('pendaftaran'));
    }

    public function postCreateStepFour(Request $request)
    {
        $validatedData = $request->validate([
            'photo_ktp' => 'required',
            'doc_pendukung' => 'required',
        ]);

        $pendaftaran = $request->session()->get('pendaftaran');
        $pendaftaran->fill($validatedData);
        $request->session()->put('pendaftaran', $pendaftaran);
        return redirect()->route('pendaftaran.bukti_daftar');
    }

    public function buktiDaftar()
    {

    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
