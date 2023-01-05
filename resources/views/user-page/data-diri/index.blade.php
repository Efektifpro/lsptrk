@extends('user-layout.main')

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Detail Data Diri</h1>
        </div>

        @if (session('success'))
        <div class="alert alert-info text-dark" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <h4 class="alert-heading">{{ session('judul') }}</h4>
            <p>{{ session('success') }}</p>
        </div>
        @endif

        @if (session('error'))
        <div class="alert alert-error" role="alert">
            {{ session('error') }}
        </div>
        @endif

        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <ul class="nav nav-pills">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="pill" href="#data" role="tab" aria-controls="pills-data" aria-selected="true">Data Pribadi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="pill" href="#pekerjaan" role="tab" aria-controls="pills-pekerjaan" aria-selected="false">Data Pekerjaan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="pill" href="#pendidikan" role="tab" aria-controls="pills-pendidikan" aria-selected="false">Data Pendidikan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="pill" href="#dokumen" role="tab" aria-controls="pills-dokumen" aria-selected="false">Data Dokumen</a>
                        </li>
                    </ul>
                    <div class="tab-content mt-3">



                        {{-- Tab Data Pribadi start --}}
                        <div class="tab-pane fade show active" id="data" role="tabpanel" aria-labelledby="data-tab">
                            <form action="{{ route('biodata.store') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="card">
                                    <div class="card-header">
                                        <h4>Data Personal</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <input type="text" class="form-control" name="id" value="{{ Auth::user()->id }}">
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label>Nama</label>
                                                    <input type="text" class="form-control" placeholder="Nama Lengkap" name="nama" value="{{ Auth::user()->name }}" readonly>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label>Nomor KTP</label>
                                                    <input type="number" class="form-control" placeholder="No. KTP" name="identity" value="{{ Auth::user()->identity }}" readonly>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label>Jenis Kelamin</label>
                                                    <select name="jenkel" class="form-control" id="jenkel" required>
                                                        <option value="">- Pilih Jenis Kelamin -</option>
                                                        <option value="Laki-laki">Laki-laki</option>
                                                        <option value="Perempuan">Perempuan</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label>Tempat Lahir</label>
                                                    <input type="text" class="form-control" placeholder="Tempat Lahir" name="temp_lahir" value="{{ $data->temp_lahir }}" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label>Tanggal Lahir</label>
                                                    <input type="date" class="form-control" placeholder="Tanggal Lahir" name="tgl_lahir" value="{{ $data->tgl_lahir }}" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label>Kewarganegaraan</label>
                                                    <select name="kewarganegaraan" class="form-control" id="kewarganegaraan" required>
                                                        <option value="">- Pilih Kewarganegaraan -</option>
                                                        <option value="Warga Negara Indonesia">Warga Negara Indonesia</option>
                                                        <option value="Warga Negara Asing">Warga Negara Asing</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label>Alamat Lengkap</label>
                                                    <textarea class="form-control" placeholder="Alamat" name="alamat"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label>Nama Ibu Kandung</label>
                                                    <input type="text" class="form-control" placeholder="" name="ibu_kandung" required>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <h4>Kontak</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label>No.HP</label>
                                                    <input type="number" class="form-control" placeholder="" name="nohp" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label>Telepon Rumah</label>
                                                    <input type="number" class="form-control" placeholder="" name="telp" value="0">
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label>Email Aktif</label>
                                                    <input type="email" class="form-control" placeholder="" name="email" required>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <h4>Pekerjaan</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label>Tipe Peserta</label>
                                                    <select name="tipe" class="form-control" id="tipe">
                                                        <option selected="false">- Pilih Tipe Peserta -</option>
                                                        @foreach ($tipe as $tipe)
                                                        <option value="{{ $tipe->id }}">{{ $tipe->tipe }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label>Nama Institusi</label>
                                                    <select name="institusi_id" class="form-control" id="institusi_id" required>

                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label>No.ID Institusi</label>
                                                    <input type="number" class="form-control" placeholder="" name="nip_institusi" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label>Klasifikasi Pekerjaan</label>
                                                    <select name="klasifikasi_id" class="form-control" id="klasifikasi_id" required>
                                                        <option disabled>- Pilih Klasifikasi Pekerjaan -</option>
                                                        @foreach ($klasifikasi as $data)
                                                        <option value="{{ $data->id }}">{{ $data->nama }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label>Pendidikan Terakhir</label>
                                                    <select name="pend_terakhir" class="form-control" id="pend_terakhir" required>
                                                        <option selected="false">- Pilih Pendidikan Terakhir</option>
                                                        <option value="SD">SD</option>
                                                        <option value="SMP">SMP</option>
                                                        <option value="SMA">SMA/Sederajat</option>
                                                        <option value="D2">D2</option>
                                                        <option value="D3">D3</option>
                                                        <option value="D4">D4</option>
                                                        <option value="S1">S1</option>
                                                        <option value="S2">S2</option>
                                                        <option value="S3">S3</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-12">
                                                <button class="btn btn-primary">Submit</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        {{-- Tab Data Pribadi end --}}



                        {{-- Tab Pekerjaan start --}}
                        <div class="tab-pane fade" id="pekerjaan" role="tabpanel" aria-labelledby="pekerjaan-tab">
                            <div class="card">
                                <div class="card-header">
                                    <button class="btn btn-primary" data-toggle="modal" data-target="#modalPekerjaan"><i class="fas fa-plus-square mr-2"></i>Tambah Data Pekerjaan</button>
                                </div>
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
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            {{-- Loop start --}}
                                            @foreach ($pekerjaan_peserta as $key => $i)
                                            <tr class="text-center">
                                                <td>
                                                    {{ $key+1 }}
                                                </td>
                                                <td>
                                                    {{ $i->institusi->nama }}
                                                </td>
                                                <td class="align-middle">
                                                    {{ $i->posisi }}
                                                </td>
                                                <td class="align-middle">
                                                    {{ $i->dari }}
                                                </td>
                                                <td class="align-middle">
                                                    {{ $i->sampai }}
                                                </td>
                                                <td class="align-middle">
                                                    <button class="btn btn-warning" data-toggle="modal" data-target="#editPekerjaan{{ $i->id }}"><i class="fas fa-pencil-alt"></i> Edit</button>
                                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#hapusPekerjaan{{ $i->id }}" title="Hapus"><i class="fa fa-trash"></i> Hapus</button>
                                                </td>
                                            </tr>
                                            {{-- Loop end --}}
                                            @endforeach
                                        </tbody>
                                    </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- Tab Pekerjaan end --}}




                        {{-- Tab Pendidikan start --}}
                        <div class="tab-pane fade" id="pendidikan" role="tabpanel" aria-labelledby="pendidikan-tab">
                            <div class="card">
                                <div class="card-header">
                                    <button class="btn btn-primary" data-toggle="modal" data-target="#modalPendidikan"><i class="fas fa-plus-square mr-2"></i>Tambah Data Pendidikan</button>
                                </div>
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
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($pendidikan_peserta as $key => $j)
                                            {{-- Loop start --}}
                                            <tr class="text-center">
                                                <td>
                                                    {{ $key+1 }}
                                                </td>
                                                <td>
                                                    {{ $j->perguruan_tinggi->nama }}
                                                </td>
                                                <td class="align-middle">
                                                    {{ $j->jurusan }}
                                                </td>
                                                <td class="align-middle">
                                                    {{ $j->strata }}
                                                </td>
                                                <td class="align-middle">
                                                    {{ $j->masuk }}
                                                </td>
                                                <td class="align-middle">
                                                    {{ $j->tamat }}
                                                </td>
                                                <td class="align-middle">
                                                    <button class="btn btn-warning" data-toggle="modal" data-target="#editPendidikan{{ $j->id }}"><i class="fas fa-pencil-alt"></i> Edit</button>
                                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#hapusPendidikan{{ $j->id }}" title="Hapus"><i class="fa fa-trash"></i> Hapus</button>
                                                </td>
                                            </tr>
                                            {{-- Loop end --}}
                                            @endforeach
                                        </tbody>
                                    </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- Tab Pendidikan end --}}




                        {{-- Tab Dokumen start --}}
                        <div class="tab-pane fade" id="dokumen" role="tabpanel" aria-labelledby="dokumen-tab">
                            <div class="card">
                                <div class="card-body">
                                    Not Found
                                </div>
                            </div>
                        </div>
                        {{-- Tab Dokumend end --}}




                    </div>
                </div>
            </div>
        </div>
    </section>
</div>


@include('user-page.data-diri.modalPekerjaan')
@include('user-page.data-diri.modalPendidikan')


@endsection

@section('js')
<script>
    $("#tablePekerjaan").dataTable({
        "columnDefs": [
            { "sortable": false, "targets": [5] }
        ]
    });
</script>
<script>
    $("#tablePendidikan").dataTable({
        "columnDefs": [
            { "sortable": false, "targets": [6] }
        ]
    });
</script>

<script type="text/javascript">
    jQuery(document).ready(function()
    {
        jQuery('select[name="tipe"]').on('change', function()
        {
            var tipe_id = jQuery(this).val();
            // alert(jenis_id)
            if(tipe_id)
            {
                jQuery.ajax({
                    url : '/admin/getInstitusi/' +tipe_id,
                    type : "GET",
                    dataType : "json",
                    success:function(data)
                    {
                        jQuery('select[name="institusi_id"]').empty();
                        jQuery.each(data, function(key, value){
                            $('select[name="institusi_id"]').append('<option value="'+ key +'">'+ value + '</option>');
                        });
                    }
                });
            }
            else
            {
                $('select[name="institusi_id"]').empty();
            }
        });
    });
</script>

@endsection
