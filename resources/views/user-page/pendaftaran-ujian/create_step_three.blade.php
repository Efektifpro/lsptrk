@extends('user-layout.main')

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Pendaftaran Ujian</h1>
        </div>
        {{-- @if ($data_isExist)
        <div>
            Data Sudah Lengkap
        </div>
        @else
        <div class="alert alert-warning">
            <strong>Silahkan lengkapi data diri anda terlebih dahulu !</strong>
        </div>
        @endif --}}
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <ul class="row nav nav-pills">
                        <li class="col-3 nav-item">
                            <a class="nav-link" data-toggle="pill" href="#data-diri" role="tab" aria-controls="pills-data-diri" aria-selected="true" id="button-datadiri">1. Data Diri</a>
                        </li>
                        <li class="col-3 nav-item">
                            <a class="nav-link" data-toggle="pill" href="#jadwal" role="tab" aria-controls="pills-jadwal" aria-selected="false" id="button-jadwal">2. Jadwal Ujian</a>
                        </li>
                        <li class="col-3 nav-item">
                            <a class="nav-link active" data-toggle="pill" href="#assesment" role="tab" aria-controls="pills-assesment" aria-selected="false" id="button-assesment">3. Assesment Mandiri</a>
                        </li>
                        <li class="col-3 nav-item">
                            <a class="nav-link" data-toggle="pill" href="#selesai" role="tab" aria-controls="pills-selesai" aria-selected="false" id="button-selesai">4. Selesai</a>
                        </li>
                    </ul>

                    <div class="tab-content mt-3">
                        <form action="{{ route('pendaftaran.save_step_three') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            {{-- Tab Assesment start --}}
                            <div class="tab-pane fade show active" id="assesment" role="tabpanel" aria-labelledby="assesment-tab">
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
