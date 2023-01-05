@extends('admin-layout.main')

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>List Banner</h1>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <button type="button" class="btn btn-primary m-b-sm" data-toggle="modal" data-target="#modalBanner"><i class="fa fa-plus"></i>Tambah Banner</button>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                            <table class="table table-striped" id="tableBanner">
                                <thead>
                                <tr class="text-center">
                                    <th>#</th>
                                    <th>Image</th>
                                    <th>Urutan ke-</th>
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
                                            <img src="https://images.pexels.com/photos/245240/pexels-photo-245240.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="" style="height: 200px">
                                        </td>
                                        <td class="align-middle">
                                            1
                                        </td>
                                        <td class="align-middle">
                                            <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modalBanner" title="Edit"><i class="fa fa-pencil"></i> Edit</button>
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
            </div>
        </div>
    </section>
</div>

@include('admin-page.website-banner.modal')

@endsection

@section('js')
<script>
    $("#tableBanner").dataTable({
        "columnDefs": [
            { "sortable": false, "targets": [1,3] }
        ]
    });
</script>
@endsection
