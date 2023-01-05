@extends('user-layout.main')

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Pendaftaran Ujian</h1>
        </div>
        @if ($data_isExist)
        <div>
            Data Sudah Lengkap
        </div>
        @else
        <div class="alert alert-warning">
            <strong>Silahkan lengkapi data diri anda terlebih dahulu !</strong>
        </div>
        @endif
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <ul class="row nav nav-pills">
                        <li class="col-3 nav-item">
                            <a class="nav-link active" data-toggle="pill" href="#data-diri" role="tab" aria-controls="pills-data-diri" aria-selected="true" id="button-datadiri">1. Data Diri</a>
                        </li>
                        <li class="col-3 nav-item">
                            <a class="nav-link" data-toggle="pill" href="#jadwal" role="tab" aria-controls="pills-jadwal" aria-selected="false" id="button-jadwal">2. Jadwal Ujian</a>
                        </li>
                        <li class="col-3 nav-item">
                            <a class="nav-link" data-toggle="pill" href="#assesment" role="tab" aria-controls="pills-assesment" aria-selected="false" id="button-assesment">3. Assesment Mandiri</a>
                        </li>
                        <li class="col-3 nav-item">
                            <a class="nav-link" data-toggle="pill" href="#selesai" role="tab" aria-controls="pills-selesai" aria-selected="false" id="button-selesai">4. Selesai</a>
                        </li>
                    </ul>

                    <div class="tab-content mt-3">

                        {{-- Tab Data Pribadi start --}}
                        <div class="tab-pane fade show active" id="data-diri" role="tabpanel" aria-labelledby="data-diri-tab">
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h4>Data Personal</h4>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <input type="hidden" class="form-control" placeholder="Nama Lengkap" name="user_id" value="{{ Auth::user()->id }}" disabled>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label>Nama</label>
                                                <input type="text" class="form-control" placeholder="Nama Lengkap" name="name" value="{{ $data->user->name }}" disabled>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label>Nomor KTP</label>
                                                <input type="number" class="form-control" placeholder="No. KTP" name="" value="{{ $data->user->identity }}" disabled>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label>Jenis Kelamin</label>
                                                <select name="" class="form-control" id="" disabled>
                                                    <option value="{{ $data->jenkel }}">{{ $data->jenkel }}</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label>Tempat Lahir</label>
                                                <input type="text" class="form-control" placeholder="" name="temp_lahir" value="{{ $data->temp_lahir }}" disabled>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label>Tanggal Lahir</label>
                                                <input type="date" class="form-control" placeholder="" name="tgl_lahir" value="{{ $data->tgl_lahir }}" disabled>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label>Kewarganegaraan</label>
                                                <select name="" class="form-control" id="" disabled>
                                                    <option class="text-center" value="" disabled>- Pilih Kewarganegaraan -</option>
                                                    <option value="{{ $data->kewarganegaraan }}">{{ $data->kewarganegaraan }}</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Alamat Lengkap</label>
                                                <input type="text" class="form-control" placeholder="" name="alamat" value="{{ $data->alamat }}" disabled>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Nama Ibu Kandung</label>
                                                <input type="text" class="form-control" placeholder="" name="" value="{{ $data->ibu_kandung }}" disabled>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h4>Kontak</h4>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label>No.HP</label>
                                                <input type="number" class="form-control" placeholder="" name="" value="{{ $data->nohp }}" disabled>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label>Telepon Rumah</label>
                                                <input type="number" class="form-control" placeholder="" name="" value="{{ $data->telp }}" disabled>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label>Email Aktif</label>
                                                <input type="email" class="form-control" placeholder="" name="" value="{{ $data->user->email }}" disabled>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h4>Pekerjaan</h4>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label>Tipe Peserta</label>
                                                <select name="" class="form-control" id="" disabled>
                                                    <option class="text-center" value="" disabled>- Pilih Tipe Peserta -</option>
                                                    <option value="{{ $data->institusi->tipe->id }}">{{ $data->institusi->tipe->tipe }}</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label>Nama Institusi</label>
                                                <select name="" class="form-control" id="" disabled>
                                                    <option class="text-center" value="" disabled>- Pilih Institusi -</option>
                                                    <option value="{{ $data->institusi->id }}">{{ $data->institusi->nama }}</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label>No.ID Institusi</label>
                                                <input type="number" class="form-control" placeholder="" name="nip_institusi" value="{{ $data->nip_institusi }}" disabled>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Klasifikasi Pekerjaan</label>
                                                <select name="" class="form-control" id="" disabled>
                                                    <option class="text-center" value="" disabled>- Pilih Klasifikasi Pekerjaan -</option>
                                                    <option value="{{ $data->klasifikasi->id }}">{{ $data->klasifikasi->nama }}</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Pendidikan Terakhir</label>
                                                <select name="" class="form-control" id="" disabled>>
                                                    <option value="{{ $data->pend_terakhir }}">{{ $data->pend_terakhir }}</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card card-primary">
                                <div class="card-body">
                                    <div class="table-responsive">
                                    <table class="table table-striped" id="tablePekerjaan">
                                        <thead>
                                        <tr class="text-center">
                                            <th>#</th>
                                            <th>Institusi</th>
                                            <th>Jabatan</th>
                                            <th>Bekerja Dari</th>
                                            <th>Bekerja Sampai</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($pekerjaan_peserta as $key => $pp)
                                            <tr class="text-center">
                                                <td>
                                                    {{ $key+1 }}
                                                </td>
                                                <td>
                                                    {{ $pp->institusi->nama }}
                                                </td>
                                                <td class="align-middle">
                                                    {{ $pp->posisi }}
                                                </td>
                                                <td class="align-middle">
                                                    {{ $pp->dari }}
                                                </td>
                                                <td class="align-middle">
                                                    {{ $pp->sampai }}
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    </div>
                                </div>
                            </div>
                            <div class="card card-primary">
                                <div class="card-body">
                                    <div class="table-responsive">
                                    <table class="table table-striped" id="tablePendidikan">
                                        <thead>
                                        <tr class="text-center">
                                            <th>#</th>
                                            <th>Institusi</th>
                                            <th>Jurusan</th>
                                            <th>Strata</th>
                                            <th>Tahun Masuk</th>
                                            <th>Tahun Lulus</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($pendidikan_peserta as $key => $pend)
                                            <tr class="text-center">
                                                <td>
                                                    {{ $key+1 }}
                                                </td>
                                                <td>
                                                    {{ $pend->perguruan_tinggi->nama }}
                                                </td>
                                                <td class="align-middle">
                                                    {{ $pend->jurusan }}
                                                </td>
                                                <td class="align-middle">
                                                    {{ $pend->strata }}
                                                </td>
                                                <td class="align-middle">
                                                    {{ $pend->masuk }}
                                                </td>
                                                <td class="align-middle">
                                                    {{ $pend->tamat }}
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-12 text-right">
                                            <button class="btn btn-primary" id="to-jadwal" style="width: 100%">Selanjutnya</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- Tab Data Pribadi end --}}

                        {{-- Tab Jadwal start --}}
                        <div class="tab-pane fade" id="jadwal" role="tabpanel" aria-labelledby="jadwal-tab">
                            <div class="card card-primary">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Kota</label>
                                                <select name="kota_id" class="form-control" id="kota_id" required>
                                                    <option value="">- Pilih Kota Ujian -</option>
                                                    @foreach ($kota as $k)
                                                    <option value="{{ $k->id }}">{{ $k->nama_kota }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Lokasi Uji</label>
                                                <select name="lokasi_id" class="form-control" id="lokasi_id" required>
                                                    <option value="" readonly>Pilih Kota Ujian terlebih Dahulu</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Bidang Uji</label>
                                                <select name="bidang_id" class="form-control" id="bidang_id" required>
                                                    <option value="">-= Pilih Bidang =-</option>
                                                    @foreach ($bidang as $b)
                                                    <option value="{{ $b->id }}">{{ $b->nama }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <label>Tanggal Uji</label>
                                                <select name="tanggal_id" class="form-control" id="tanggal_id" required>

                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <label>Sesi Uji</label>
                                                <select name="sesi_id" class="form-control" id="sesi_id" required>

                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label>Metode Pembayaran</label>
                                                <select name="metode_bayar" class="form-control" id="metode_bayar" required>
                                                    <option value="">- Pilih Metode Pembayaran -</option>
                                                    <option value="">Metode Pembayaran 1</option>
                                                    <option value="">Metode Pembayaran 2</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- <table class="table table-striped" id="tablePeserta">
                                        <thead>
                                            <tr class="text-center">
                                                <th>#</th>
                                                <th>Judul Kompetensi</th>
                                                <th>Pertanyaan</th>
                                                <th>Jawaban</th>
                                            </tr>
                                        </thead>
                                        <tbody class="assesment" id="assesment">

                                        </tbody>
                                    </table> --}}
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <div class="row justify-content-around">
                                        <div class="col-3">
                                            <button class="btn btn-primary" id="to-datadiri" style="width: 100%">Sebelumnya</button>
                                        </div>
                                        <div class="col-3">
                                            <button class="btn btn-primary" id="to-assesment" style="width: 100%">Selanjutnya</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- Tab Jadwal end --}}

                        {{-- Tab Assesment start --}}
                        <div class="tab-pane fade" id="assesment" role="tabpanel" aria-labelledby="assesment-tab">
                            <div class="card card-primary">
                                <div class="card-body" style="font-size: smaller; font-style: italic;">
                                    <p>
                                        Pada bagian ini, anda diminta untuk menilai diri sendiri terhadap unit (unit-unit) kompetensi yang akan di-ases.
                                        <ol>
                                            <li>
                                                Pelajari seluruh Unit Kompetensi, batasan variabel, panduan penilaian dan aspek kritis serta yakinkan bahwa anda sudah benar-benar memahami seluruh isinya.
                                            </li>
                                            <li>
                                                Laksanakan penilaian mandiri dengan mempelajari dan menilai kemampuan yang anda miliki secara obyektif terhadap seluruh daftar pertanyaan yang ada, serta tentukan apakah sudah kompeten (K) atau belum kompeten (BK) dengan mencantumkan tanda √ dan tuliskan bukti-bukti pendukung yang anda anggap relevan terhadap setiap unit kompetensi.
                                            </li>
                                            <li>
                                                Asesor dan Peserta menandatangani form Asesmen Mandiri
                                            </li>
                                            <li>
                                                Dengan menandatangani formulir ini, saya (pemohon sertifikasi) menyatakan bahwa : Saya telah mempelajari dan memahami dengan baik atas dokumen Asesmen Mandiri (APL 02) terhadap 10 (empat) Unit Kompetensi   yang akan diujikan.Saya Kompeten terhadap seluruh Unit Kompetensi dan siap untuk diuji. Asesmen Mandiri ini saya buat dan diisi dengan benar yang dilengkapi dengan bukti-bukti pendukung yang sesuai dengan dokumen APL 01 serta saya bersedia membuktikannya dengan dokumen asli kepada Asesor.
                                            </li>
                                            <li>
                                                Pernyataan ini saya buat dengan sesungguhnya, apabila dikemudian hari terdapat ketidaksesuaian terhadap data dan pernyataan ini, maka saya bersedia untuk diklarifikasi oleh LSP Perbankan guna mempertanggung jawabkan pernyataan ini
                                            </li>
                                        </ol>
                                    </p>
                                </div>
                            </div>
                            <div class="card card-primary">
                                <div class="card-header">
                                    Bidang Uji Yang Dipilih : {Nama Bidang Uji Yang Dipilih Sebelumnya}
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped" id="tablePeserta">
                                            <thead>
                                                <tr class="text-center">
                                                    {{-- <th>#</th> --}}
                                                    <th>Judul Kompetensi</th>
                                                    <th>Pertanyaan</th>
                                                    <th>Jawaban</th>
                                                </tr>
                                            </thead>
                                            <tbody class="asman" id="asman">

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="card">

                                <div class="card-body">
                                    <div class="row justify-content-around">
                                        <div class="col-3">
                                            <button class="btn btn-primary" id="to-jadwal" style="width: 100%">Seb</button>
                                        </div>
                                        <div class="col-3">
                                            <button type="submit" class="btn btn-primary" id="" style="width: 100%">Selanjutnya</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- Tab Assesment end --}}

                        {{-- Tab Selesai start --}}
                        <div class="tab-pane fade" id="selesai" role="tabpanel" aria-labelledby="selesai-tab" style="">
                            <form action="">
                                <div class="card card-primary">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-6">
                                                <h5>Foto KTP</h5>
                                                <input type="file" id="ktp" name="filename" required>
                                            </div>
                                            <div class="col-6">
                                                <h5>Dokumen Pendukung</h5>
                                                <input type="file" id="pendukung" name="filename">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card card-primary">
                                    <div class="card-body">
                                        <div class="row mb-3">
                                            <div class="col-12 text-center" style="font-size: larger; font-weight: bolder; color: black">
                                                Summary
                                            </div>
                                        </div>
                                        <div class="row justify-content-center">
                                            <div class="col-3">
                                                Bidang Uji
                                            </div>
                                            <div class="col-3">
                                                {Bidang Uji}
                                            </div>
                                        </div>
                                        <div class="row justify-content-center">
                                            <div class="col-3">
                                                Lokasi
                                            </div>
                                            <div class="col-3">
                                                {Jakarta} - {Online}
                                            </div>
                                        </div>
                                        <div class="row justify-content-center">
                                            <div class="col-3">
                                                Tanggal dan Waktu
                                            </div>
                                            <div class="col-3">
                                                {04-06-2022} / {Sesi 2 (10:30 - 12:00) WIB}
                                            </div>
                                        </div>
                                        <div class="row justify-content-center">
                                            <div class="col-3">
                                                Metode Pembayaran
                                            </div>
                                            <div class="col-3">
                                                {Metode}
                                            </div>
                                        </div>
                                        <div class="row justify-content-center mt-5">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label class="custom-switch">
                                                        <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input" required>
                                                        <span class="custom-switch-indicator"></span>
                                                        <span class="label-text ml-3">
                                                            Dengan ini saya menyatakan segala informasi dan dokumen yang saya lampirkan adalah benar dan dapat saya pertanggung jawabkan apabila dikemudian hari terdapat kesalahan atau tidak sesuai dengan
                                                            <a class="underline" href="https://sis.lspp.or.id/syarat-dan-ketentuan" target="_blank" style="font-weight: bolder">Syarat &amp; Ketentuan</a> Lembaga Sertifikasi Profesi Perbankan
                                                        </span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <button type="submit" class="btn btn-primary" id="" style="width: 100%">Daftar Uji Kompetensi</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        {{-- Tab Selesaid end --}}




                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection


@section('js')

<script>
    $("#to-datadiri").click(function(){
        $("#button-datadiri").click();
        return false;
    });

    $("#to-jadwal").click(function(){
        $("#button-jadwal").click();
        return false;
    });

    $("#to-assesment").click(function(){
        $("#button-assesment").click();
        return false;
    });

    $("#to-selesai").click(function(){
        $("#button-selesai").click();
        return false;
    });
</script>

<script type="text/javascript">
    jQuery(document).ready(function()
    {
        // get Lokasi Ujian
        jQuery('select[name="kota_id"]').on('change', function()
        {
            var kota_id = jQuery(this).val();
            // alert(kota_id)
            if(kota_id)
            {
                jQuery.ajax({
                    url : '/admin/getLokasi/' +kota_id,
                    type : "GET",
                    dataType : "json",
                    success:function(data)
                    {
                        jQuery('select[name="lokasi_id"]').empty();
                        jQuery.each(data, function(key, value){
                            $('select[name="lokasi_id"]').append('<option value="'+ key +'">'+ value + '</option>');
                        });
                    }
                });
            }
            else
            {
                $('select[name="lokasi_id"]').empty();
            }
        });

        // get Tanggal Ujian
        jQuery('select[name="bidang_id"]').on('change', function()
        {
            var bidang_id = jQuery(this).val();
            // alert(kota_id)
            if(bidang_id)
            {
                jQuery.ajax({
                    url : '/admin/getTanggal/' +bidang_id,
                    type : "GET",
                    dataType : "json",
                    success:function(data)
                    {
                        jQuery('select[name="tanggal_id"]').empty();
                        jQuery.each(data, function(key, value){
                            $('select[name="tanggal_id"]').append('<option value="'+ key +'">'+ value + '</option>');
                        });
                    }
                });
            }
            else
            {
                $('select[name="tanggal_id"]').empty();
            }
        });

        //get Sesi Ujian
        jQuery('select[name="tanggal_id"]').on('change', function()
        {
            var tanggal_id = jQuery(this).val();
            // alert(tanggal_id)
            if(tanggal_id)
            {
                jQuery.ajax({
                    url : '/admin/getSesi/' +tanggal_id,
                    type : "GET",
                    dataType : "json",
                    success:function(data)
                    {
                        jQuery('select[name="sesi_id"]').empty();
                        jQuery.each(data, function(key, value){
                            $('select[name="sesi_id"]').append(
                                '<option value="'+ key +'">'+ value + '</option>'
                                );
                        });
                    }
                });
            }
            else
            {
                $('select[name="sesi_id"]').empty();
            }
        });

        // get Assesment Mandiri
        jQuery('select[name="bidang_id"]').on('change', function()
        {
            var bidang_id = jQuery(this).val();
            // alert(bidang_id)
            if(bidang_id)
            {
                jQuery.ajax({
                    url : '/admin/getAssesmentMandiri/' +bidang_id,
                    type : "GET",
                    dataType : "json",
                    success:function(data)
                    {
                        // jQuery('select[name="tanggal_id"]').append('<option value="">-= Pilih Tanggal Ujian =-</option>');
                        jQuery.each(data, function(key, value){
                            // alert(value);
                            $('#asman').append('<tr><td>'+ value.judul + '</td><td>'+ value.pertanyaan +'</td></tr>');
                        });
                    }
                });
            }
            else
            {
                $('select[name="tanggal_id"]').empty();
            }
        });
    });
</script>


@endsection
