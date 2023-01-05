@extends('admin-layout.main')

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Daftar Perguruan Tinggi</h1>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-12">
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
                    <div class="card">
                        <div class="card-header">
                            <button type="button" data-toggle="modal" data-target="#tambahPT" class="btn btn-primary m-b-sm"><i class="fa fa-plus"></i>Tambah Data</button>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                            <table class="table table-striped" id="tablePeserta">
                                <thead>
                                    <tr class="text-center">
                                        <th>#</th>
                                        <th>Perguruan Tinggi</th>
                                        <th colspan="2" style="width:4%">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $key => $i)
                                    <tr class="text-center">
                                        <td>{{ $key+1 }}</td>
                                        <td>{{ $i->nama }}</td>
                                        <td>
                                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editPT{{$i->id}}" title="Edit">
                                                <span><i class="fas fa-pen"></i></span>
                                            </button>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#hapusPT{{$i->id}}" title="Hapus">
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

@include('admin-page.perguruan-tinggi.modal')

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

        $("#perguruan-tinggi").validate({
            rules: {
                nama: {
                    required: true,
                    minlength: 3,
                    maxlength: 100
                }
            },
            messages: {
                nama: {
                    required: "Nama Perguruan Tinggi tidak boleh kosong !",
                    minlength: "Nama Perguruan Tinggi tidak boleh kurang dari 3 Karakter !" ,
                    maxlength: "Nama Perguruan Tinggi tidak boleh lebih dari 100 Karakter !" ,
                }
            }
        })
    })
</script>
@endsection
