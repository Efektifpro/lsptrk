@extends('admin-layout.main')

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Daftar Lokasi Ujian</h1>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                    <div class="card-header">
                        <button type="button" data-toggle="modal" data-target="#tambahLokasi" class="btn btn-primary m-b-sm"><i class="fa fa-plus"></i>Tambah Data</button>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                        <table class="table table-striped" id="tablePeserta">
                            <thead>
                                <tr class="text-center">
                                    <th>#</th>
                                    <th>Kota Uji</th>
                                    <th>Lokasi Ujian</th>
                                    <th colspan="2" style="width:4%">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $key => $i)
                                <tr class="text-center">
                                    <td>{{ $key+1 }}</td>
                                    <td>{{ $i->kota->nama_kota }}</td>
                                    <td>{{ $i->nama_lokasi }}</td>
                                    <td>
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editLokasi{{$i->id}}" title="Edit">
                                            <span><i class="fas fa-pen"></i></span>
                                        </button>
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#hapusLokasi{{$i->id}}" title="Hapus">
                                            <span><i class="fas fa-trash"></i></span>
                                        </button>
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

@include('admin-page.lokasi.modal')

@endsection


@section('js')
<script>
    $(document).ready(function(){
        $.validator.setDefaults({
            errorClass: 'error-msg',
            highlight: function(element) {
                $(element)
                    .closest('.form-control')
                    .addClass('is-invalid');
            },
            unhighlight: function(element) {
                $(element)
                    .closest('.form-control')
                    .removeClass('is-invalid')
                    .addClass('is-valid');
            }
        })

        $("#lokasi").validate({
            rules: {
                nama_lokasi: {
                    required: true,
                    minlength: 3,
                    maxlength: 100
                }
            },
            messages: {
                nama_lokasi: {
                    required: "Lokasi tidak boleh kosong !",
                    minlength: "Lokasi tidak boleh kurang dari 3 Karakter !" ,
                    maxlength: "Lokasi tidak boleh lebih dari 100 Karakter !" ,
                }
            }
        })
    })
</script>
@endsection
