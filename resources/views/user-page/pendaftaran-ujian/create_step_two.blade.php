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
                            <a class="nav-link active" data-toggle="pill" href="#jadwal" role="tab" aria-controls="pills-jadwal" aria-selected="false" id="button-jadwal">2. Jadwal Ujian</a>
                        </li>
                        <li class="col-3 nav-item">
                            <a class="nav-link" data-toggle="pill" href="#assesment" role="tab" aria-controls="pills-assesment" aria-selected="false" id="button-assesment">3. Assesment Mandiri</a>
                        </li>
                        <li class="col-3 nav-item">
                            <a class="nav-link" data-toggle="pill" href="#selesai" role="tab" aria-controls="pills-selesai" aria-selected="false" id="button-selesai">4. Selesai</a>
                        </li>
                    </ul>

                    <div class="tab-content mt-3">
                        <form action="{{ route('pendaftaran.save_step_two') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            {{-- Tab Jadwal start --}}
                            <div class="tab-pane fade show active" id="jadwal" role="tabpanel" aria-labelledby="jadwal-tab">
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
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row justify-content-around">
                                            <div class="col-3">
                                                <button class="btn btn-primary" id="to-datadiri" style="width: 100%">Sebelumnya</button>
                                            </div>
                                            <div class="col-3">
                                                <button class="btn btn-primary" type="submit" style="width: 100%">Selanjutnya</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- Tab Jadwal end --}}
                        </form>
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
