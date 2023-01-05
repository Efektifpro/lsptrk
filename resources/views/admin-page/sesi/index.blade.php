@extends('admin-layout.main')

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Sesi Ujian</h1>
        </div>
        @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif

        @if (session('error'))
        <div class="alert alert-error">
            {{ session('error') }}
        </div>
        @endif
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                    <div class="card-header">
                        <button type="button" data-toggle="modal" data-target="#tambahSesi" class="btn btn-primary m-b-sm"><i class="fa fa-plus"></i>Tambah Data</button>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                        <table class="table table-striped" id="tablePeserta">
                            <thead>
                                <tr class="text-center">
                                    <th>#</th>
                                    <th>Tanggal</th>
                                    <th>Sesi</th>
                                    <th>Mulai</th>
                                    <th>Selesai</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $key => $i)
                                <tr class="text-center">
                                    <td>{{ $key+1 }}</td>
                                    <td>{{ $i->tanggal_uji->tanggal }}</td>
                                    <td>{{ $i->sesi }}</td>
                                    <td>{{ $i->mulai }}</td>
                                    <td>{{ $i->selesai }}</td>
                                    <td>
                                        <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#editSesi{{$i->id}}" title="Edit">Edit</button>
                                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#hapusSesi{{$i->id}}" title="Hapus">Hapus</button>
                                    </td>
                                </tr>
                                @endforeach
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

@include('admin-page.sesi.modal')

@endsection


@section('js')
<script>
    $("#tablePeserta").dataTable({
        "columnDefs": [
            { "sortable": false, "targets": [1,6] }
        ]
    });
</script>
@endsection
