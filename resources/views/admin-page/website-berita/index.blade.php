@extends('admin-layout.main')

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>List Berita</h1>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-9">
                    <div class="card">
                        <div class="card-header">
                            <button type="button" class="btn btn-primary m-b-sm" data-toggle="modal" data-target="#modalBerita"><i class="fa fa-plus"></i> Tambah Berita</button>
                            <span> <button type="button" class="btn btn-primary m-b-sm" data-toggle="modal" data-target="#modalKategori"><i class="fa fa-plus"></i>Tambah Kategori Berita</button></span>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped" id="tableBerita">
                                    <thead>
                                        <tr class="text-center">
                                            <th>#</th>
                                            <th>Thumbnail</th>
                                            <th>Judul</th>
                                            <th>Kategori</th>
                                            <th>Tanggal</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($berita as $key => $i)
                                        <tr class="text-center">
                                            <td>
                                                {{ $key+1 }}
                                            </td>
                                            <td>
                                                <img src="{{ asset('assets/admin/berita/'.$i->thumbnail) }}" style="width: 100px; height:100px"alt="">
                                            </td>
                                            <td class="align-middle">
                                                {{ $i->judul }}
                                            </td>
                                            <td class="align-middle">
                                                Kategori
                                            </td>
                                            <td class="align-middle">
                                                {{ $i->created_at->isoFormat('D MMMM Y') }}
                                            </td>
                                            <td class="align-middle">
                                                <button type="button" class="btn btn-md btn-primary" title="Edit"><i class="fas fa-pen"></i></button>
                                                <span><button type="button" class="btn btn-md btn-info" title="Show"><i class="fas fa-eye"></i></button></span>
                                                <span><button type="button" class="btn btn-md btn-danger" title="Delete"><i class="fas fa-trash"></i></button></span>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card">
                        <div class="card-header">
                            <h4>Kategori Berita</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="katBerita">
                                    <thead class="text-center">
                                        <tr>
                                            <th>Kategori</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-center">
                                        @foreach ($kat_berita as $i)
                                        <tr>
                                            <td>{{ $i->nama }}</td>
                                            <td>
                                                <button type="button" class="btn btn-sm btn-primary" title="Edit"><i class="fa fa-edit"></i></button><span>
                                                <button type="button" class="btn btn-sm btn-danger" title="Delete"><i class="fa fa-trash"></i></button>
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

@include('admin-page.website-berita.modal')

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
        $("#berita").validate({
            rules: {
                img: {
                    required: true
                },
                judul: {
                    required: true,
                    minlength: 5,
                    maxlength: 50
                }
            },
            messages: {
                img: {
                    required: "Gambar tidak boleh kosong !"
                },
                judul: {
                    required: "Judul tidak boleh kosong !",
                    minlength: "Judul tidak boleh kurang dari 5 karakter !",
                    maxlength: "Judul tidak boleh lebih dari 50 karakter !"
                }
            }
        })
    })
</script>
@endsection
