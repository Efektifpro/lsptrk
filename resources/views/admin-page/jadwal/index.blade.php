@extends('admin-layout.main')

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Jadwal Uji</h1>
        </div>
        <div class="section-body">
            <div class="row">
            <div class="col-12">
                <div class="card">
                <div class="card-header">
                    <button type="button" data-toggle="modal" data-target="#tambahJadwal" class="btn btn-primary m-b-sm"><i class="fa fa-plus"></i>Tambah Jadwal</button>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped" id="tableJadwal">
                            <thead>
                            <tr class="text-center">
                                <th>#</th>
                                <th>Bidang Uji</th>
                                <th>Tanggal Uji</th>
                                <th>Sesi Uji</th>
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
                                        Bidang
                                    </td>
                                    <td class="align-middle">
                                        {ddMMMyyyy}
                                    </td>
                                    <td class="align-middle">
                                        {3214521524133331}
                                    </td>
                                    <td class="align-middle">
                                        {{-- <a class="btn btn-info" href="{{route('peserta.show')}}"><i class="fas fa-search"></i></a> --}}
                                        <button type="button" data-toggle="modal" data-target="#tambahJadwal" class="btn btn-primary"><i class="fa fa-plus"></i>Tambah Jadwal</button>
                                        <button type="button" class="btn btn-warning"><i class="fas fa-pencil-alt"></i></button>
                                        <button type="button" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                    </td>
                                </tr>
                                {{-- Loop end --}}
                            </tbody>
                        </table>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
    </section>
</div>
@include('admin-page.jadwal.modal')
@endsection

@section('js')
<script>
    $("#tableJadwal").dataTable({
        "columnDefs": [
            { "sortable": false, "targets": [4] }
        ]
    });
</script>
@endsection
