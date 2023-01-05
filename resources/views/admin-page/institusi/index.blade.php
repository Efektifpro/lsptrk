@extends('admin-layout.main')

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Daftar Institusi</h1>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                    <div class="card-header">
                        <button type="button" data-toggle="modal" data-target="#modalTambah" class="btn btn-primary m-b-sm"><i class="fa fa-plus"></i>Tambah Data</button>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                        <table class="table table-striped" id="tablePeserta">
                            <thead>
                                <tr class="text-center">
                                    <th>#</th>
                                    <th>Tipe Peserta Uji</th>
                                    <th>Institusi</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $key => $i)
                                <tr class="text-center">
                                    <td>{{ $key+1 }}</td>
                                    <td>{{ $i->tipe->tipe }}</td>
                                    <td>{{ $i->nama }}</td>
                                    <td>
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editInstitusi{{$i->id}}" title="Edit"><i class="fas fa-pen"></i></button>
                                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#hapusInstitusi{{$i->id}}" title="Hapus"><i class="fas fa-trash"></i></button>
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

@include('admin-page.institusi.modal')

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

        $("#institusi").validate({
            rules: {
                nama: {
                    required: true,
                    minlength: 3,
                    maxlength: 100
                }
            },
            messages: {
                nama: {
                    required: "Nama Institusi tidak boleh kosong !",
                    minlength: "Nama Institusi tidak boleh kurang dari 3 Karakter !" ,
                    maxlength: "Nama Institusi tidak boleh lebih dari 100 Karakter !" ,
                }
            }
        })
    })
</script>
@endsection
