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
                            <a class="nav-link" data-toggle="pill" href="#assesment" role="tab" aria-controls="pills-assesment" aria-selected="false" id="button-assesment">3. Assesment Mandiri</a>
                        </li>
                        <li class="col-3 nav-item">
                            <a class="nav-link active" data-toggle="pill" href="#selesai" role="tab" aria-controls="pills-selesai" aria-selected="false" id="button-selesai">4. Selesai</a>
                        </li>
                    </ul>

                    <div class="tab-content mt-3">
                        {{-- Tab Selesai start --}}
                        <div class="tab-pane fade show active" id="selesai" role="tabpanel" aria-labelledby="selesai-tab" style="">
                            <form action="{{ route('pendaftaran.save_step_four') }}" method="POST" enctype="multipart/form-data">
                                @csrf
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
