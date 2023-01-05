@extends('admin-layout.main')

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Bidang Uji</h1>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <button type="button" data-toggle="modal" data-target="#tambahBidang" class="btn btn-primary m-b-sm"><i class="fa fa-plus"></i>Tambah Data</button>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                            <table class="table table-striped" id="tablePeserta">
                                <thead>
                                    <tr class="text-center">
                                        <th>#</th>
                                        <th>Bidang Uji</th>
                                        <th colspan="2" style="width:5%">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($bidang as $key => $i)
                                    <tr class="text-center">
                                        <td>{{ $key+1 }}</td>
                                        <td>{{ $i->nama }}</td>
                                        <td>
                                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editBidang{{$i->id}}" title="Edit">
                                                <span><i class="fas fa-edit"></i></span>
                                            </button>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#hapusBidang{{$i->id}}" title="Delete">
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

@include('admin-page.bidang.modal')

@endsection

@section('js')
<script>
    // $("#tablePeserta").dataTable({
    //     "columnDefs": [
    //         { "sortable": false, "targets": [1,6] }
    //     ]
    // });
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

        $("#bidang").validate({
            rules: {
                nama: {
                    required: true,
                    minlength: 5,
                    maxlength: 100
                }
            },
            messages: {
                nama: {
                    required: "Nama Bidang uji tidak boleh kosong !",
                    minlength: "Judul tidak boleh kurang dari 5 Karakter !" ,
                    maxlength: "Judul tidak boleh lebih dari 100 Karakter !" ,
                }
            }
        })
    })
</script>
@endsection
