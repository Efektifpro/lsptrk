@extends('admin-layout.main')

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Detail Peserta</h1>
        </div>
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
                        <div class="tab-pane fade show active" id="data" role="tabpanel" aria-labelledby="data-tab">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Data Personal</h4>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label>Nama</label>
                                                <input type="text" class="form-control" placeholder="Nama Lengkap" name="" disabled>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label>Nomor KTP</label>
                                                <input type="number" class="form-control" placeholder="No. KTP" name="" disabled>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label>Jenis Kelamin</label>
                                                <select name="" class="form-control" id="" disabled>
                                                    <option value="">Laki-laki</option>
                                                    <option value="">Perempuan</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label>Tempat Lahir</label>
                                                <input type="text" class="form-control" placeholder="" name="" disabled>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label>Tanggal Lahir</label>
                                                <input type="date" class="form-control" placeholder="" name="" disabled>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label>Kewarganegaraan</label>
                                                <select name="" class="form-control" id="" disabled>
                                                    <option value="">Warga Negara Indonesia</option>
                                                    <option value="">Warga Negara Asing</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Alamat Lengkap</label>
                                                <input type="text" class="form-control" placeholder="" name="" disabled>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Nama Ibu Kandung</label>
                                                <input type="text" class="form-control" placeholder="" name="" disabled>
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
                                                <input type="number" class="form-control" placeholder="" name="" disabled>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label>Telepon Rumah</label>
                                                <input type="number" class="form-control" placeholder="" name="" disabled>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label>Email Aktif</label>
                                                <input type="email" class="form-control" placeholder="" name="" disabled>
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
                                                <select name="" class="form-control" id="" disabled>
                                                    <option value="">Pegawai Bank</option>
                                                    <option value="">Pegawai Non Bank</option>
                                                    <option value="">Mahasiswa</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label>Nama Institusi</label>
                                                <select name="" class="form-control" id="" disabled>
                                                    <option value="">Institusi satu</option>
                                                    <option value="">Institusi dua</option>
                                                    <option value="">Institusi tiga</option>
                                                    <option value="">Institusi empat</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label>No.ID Institusi</label>
                                                <input type="number" class="form-control" placeholder="" name="" disabled>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Klasifikasi Pekerjaan</label>
                                                <select name="" class="form-control" id="" disabled>
                                                    <option value="">Klasifikasi satu</option>
                                                    <option value="">Klasifikasi dua</option>
                                                    <option value="">Klasifikasi tiga</option>
                                                    <option value="">Klasifikasi empat</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Pendidikan Terakhir</label>
                                                <select name="" class="form-control" id="" disabled>
                                                    <option value="">SD</option>
                                                    <option value="">SMP</option>
                                                    <option value="">SMA/Sederajat</option>
                                                    <option value="">D2</option>
                                                    <option value="">D3</option>
                                                    <option value="">D4</option>
                                                    <option value="">S1</option>
                                                    <option value="">S2</option>
                                                    <option value="">S3</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pekerjaan" role="tabpanel" aria-labelledby="pekerjaan-tab">
                            <div class="card">
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
                                            <tr class="text-center">
                                                <td>
                                                    1
                                                </td>
                                                <td>
                                                    PT Efektifpro
                                                </td>
                                                <td class="align-middle">
                                                    Project Manager
                                                </td>
                                                <td class="align-middle">
                                                    dd MMM yyy
                                                </td>
                                                <td class="align-middle">
                                                    dd MMM yyy
                                                </td>
                                                <td class="align-middle">
                                                    {{-- <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modalBanner" title="Edit"><i class="fa fa-pencil"></i> Edit</button> --}}
                                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#hapus" title="Hapus"><i class="fa fa-trash"></i> Hapus</button>
                                                </td>
                                            </tr>
                                            {{-- Loop end --}}
                                        </tbody>
                                    </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pendidikan" role="tabpanel" aria-labelledby="pendidikan-tab">
                            <div class="card">
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
                                            {{-- Loop start --}}
                                            <tr class="text-center">
                                                <td>
                                                    1
                                                </td>
                                                <td>
                                                    Gunadarma
                                                </td>
                                                <td class="align-middle">
                                                    Sistem Informasi
                                                </td>
                                                <td class="align-middle">
                                                    S1
                                                </td>
                                                <td class="align-middle">
                                                    2015
                                                </td>
                                                <td class="align-middle">
                                                    2019
                                                </td>
                                                <td class="align-middle">
                                                    {{-- <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modalBanner" title="Edit"><i class="fa fa-pencil"></i> Edit</button> --}}
                                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#hapus" title="Hapus"><i class="fa fa-trash"></i> Hapus</button>
                                                </td>
                                            </tr>
                                            {{-- Loop end --}}
                                        </tbody>
                                    </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="dokumen" role="tabpanel" aria-labelledby="dokumen-tab">
                            <div class="card">
                                <div class="card-body">
                                    Not Found
                                </div>
                            </div>
                        </div>
                    </div>        
                </div>
            </div>
        </div>
    </section>
</div>


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
@endsection
