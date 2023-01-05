@extends('admin-layout.main')

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Tanggal Ujian</h1>
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
                        <button type="button" data-toggle="modal" data-target="#tambahTanggal" class="btn btn-primary m-b-sm"><i class="fa fa-plus"></i>Tambah Data</button>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                        <table class="table table-striped" id="tablePeserta">
                            <thead>
                                <tr class="text-center">
                                    <th>#</th>
                                    <th>Bidang</th>
                                    <th>Tanggal</th>
                                    <th colspan="2" style="width:4%">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $key => $i)
                                <tr class="text-center">
                                    <td>{{ $key+1 }}</td>
                                    <td>{{ $i->bidang_uji->nama }}</td>
                                    <td>{{ $i->tanggal }}</td>
                                    <td>
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editTanggal{{$i->id}}" title="Edit">
                                            <span><i class="fa fa-edit"></i></span>
                                        </button>
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#hapusTanggal{{$i->id}}" title="Hapus">
                                            <span><i class="fa fa-trash"></i></span>
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

@include('admin-page.tanggal.modal')

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
        $("#tanggal").validate({
            rules: {
                bidang_id: {
                    required: true
                },
                tanggal: {
                    required: true
                }
            },
            messages: {
                img: {
                    required: "Pilih Bidang Uji !"
                },
                tanggal: {
                    required: "Tanggal tidak boleh kosong !"
                }
            }
        })
    })
</script>
@endsection
