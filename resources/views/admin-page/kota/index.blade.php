@extends('admin-layout.main')

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Daftar Kota Ujian</h1>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <button type="button" data-toggle="modal" data-target="#tambahKota" class="btn btn-primary m-b-sm"><i class="fa fa-plus"></i> Tambah Data</button>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                            <table class="table table-striped" id="tablePeserta">
                                <thead>
                                    <tr class="text-center">
                                        <th>#</th>
                                        <th>Kota Ujian</th>
                                        <th>Provinsi</th>
                                        <th colspan="2" style="width: 4%">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($kota as $key => $i)
                                    <tr class="text-center">
                                        <td>{{ $key+1 }}</td>
                                        <td>{{ $i->nama_kota }}</td>
                                        <td>{{ $i->provinsi }}</td>
                                        <td>
                                            <button tye="button" class="btn btn-primary" data-toggle="modal" data-target="#editKota{{$i->id}}" title="Edit">
                                                <span><i class="fas fa-pen"></i></span>
                                            </button>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#hapusKota{{$i->id}}" title="Hapus">
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

@include('admin-page.kota.modal')

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

        $("#kota").validate({
            rules: {
                nama_kota: {
                    required: true,
                    minlength: 3,
                    maxlength: 100
                },
                provinsi: {
                    required: true,
                    minlength: 3,
                    maxlength: 100
                }
            },
            messages: {
                nama_kota: {
                    required: "Nama Kota tidak boleh kosong !",
                    minlength: "Nama Kota tidak boleh kurang dari 3 Karakter !" ,
                    maxlength: "Nama Kota tidak boleh lebih dari 100 Karakter !" ,
                },
                provinsi: {
                    required: "Nama Provinsi tidak boleh kosong !",
                    minlength: "Nama Provinsi tidak boleh kurang dari 3 Karakter !" ,
                    maxlength: "Nama Provinsi tidak boleh lebih dari 100 Karakter !" ,
                }
            }
        })
    })
</script>
@endsection
