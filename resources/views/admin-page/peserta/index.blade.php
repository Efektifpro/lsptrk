@extends('admin-layout.main')

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>List Peserta</h1>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                    {{-- <div class="card-header">
                        <button type="button" class="btn btn-primary m-b-sm"><i class="fa fa-plus"></i>Tambah Berita</button>
                    </div> --}}
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped" id="tablePeserta">
                                <thead>
                                <tr class="text-center">
                                    <th>#</th>
                                    <th>Profile Picture</th>
                                    <th>Nama Peserta</th>
                                    <th>No.KTP</th>
                                    <th>Kontak</th>
                                    <th>Institusi</th>
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
                                            <img src="https://images.pexels.com/photos/4185952/pexels-photo-4185952.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="" style="height: 100px;">
                                        </td>
                                        <td class="align-middle">
                                            Rudye Tabutie
                                        </td>
                                        <td class="align-middle">
                                            3214521524133331
                                        </td>
                                        <td class="align-middle">
                                            [Emai@email.com]
                                            <br>
                                            [081312341234]
                                        </td>
                                        <td class="align-middle">
                                            BUMN
                                        </td>
                                        <td class="align-middle">
                                            <a class="btn btn-info" href="{{route('peserta.show')}}"><i class="fas fa-search"></i></a>
                                            {{-- <button type="button" class="btn btn-warning"><i class="fas fa-pencil-alt"></i></button> --}}
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
