@extends('user-layout.main')

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Dashboard</h1>
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
        @if ($data_isExist)
        <div>
            Data Sudah Lengkap
        </div>
        @else
        <div class="alert alert-warning">
            <strong>Silahkan lengkapi data diri anda terlebih dahulu !</strong>
        </div>
        @endif
        <div class="section-body">
            <div class="row">
            <div class="col-12">
                <div class="card">
                <div class="card-header">
                    <a class="btn btn-primary" href="">Tambah Menu</a>
                </div>
                <div class="card-body">
                    test
                </div>
                </div>
            </div>
            </div>
        </div>
    </section>
</div>

@endsection

@section('js')
@endsection
