@extends('admin-layout.main')

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Assesment</h1>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <button type="button" data-toggle="modal" data-target="#tambahAsman" class="btn btn-primary m-b-sm"><i class="fa fa-plus"></i> Tambah Data</button>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped" id="tablePeserta">
                                    <thead>
                                        <tr class="text-center">
                                            <th>#</th>
                                            <th>Bidang</th>
                                            <th>Judul</th>
                                            <th>Pertanyaan</th>
                                            <th colspan="2">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data as $key => $i)
                                        <tr class="text-center">
                                            <td>{{ $key+1 }}</td>
                                            <td>{{ $i->bidang_uji->nama }}</td>
                                            <td>{{ $i->judul }}</td>
                                            <td>{!! $i->pertanyaan !!}</td>
                                            <td>
                                                <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#editAsman{{$i->id}}" title="Edit">
                                                    <span><i class="fas fa-edit"></i></span>
                                                </button>
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#hapusAsman{{$i->id}}" title="Hapus">
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

@include('admin-page.assesment-mandiri.modal')

@endsection


@section('js')
{{-- <script>
    $("#tablePeserta").dataTable({
        "columnDefs": [
            { "sortable": false, "targets": [1,6] }
        ]
    });
</script> --}}

<script type="text/javascript">
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
        $("#asman").validate({
            rules: {
                judul: {
                    required: true,
                    minlength: 5,
                    maxlength: 100
                },
                pertanyaan: {
                    required: true,
                    minlength: 10
                }
            },
            messages: {
                judul: {
                    required: "Judul tidak boleh kosong !",
                    minlength: "Judul tidak boleh kurang dari 5 Karakter !" ,
                    maxlength: "Judul tidak boleh lebih dari 100 Karakter !" ,
                },
                pertanyaan: {
                    required: "Pertanyaan tidak boleh kosong !",
                    minlength: "Pertanyaan tidak boleh kurang dari 10 Karakter !"
                }
            }
        })
    })
</script>
@endsection
