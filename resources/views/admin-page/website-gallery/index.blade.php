@extends('admin-layout.main')

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>List Gallery</h1>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-3">
                    <div class="card">
                        <div class="card-body text-center">
                            <button class="btn btn-primary">Tambah Gallery</button>
                        </div>
                    </div>
                </div>
                {{-- Loop start --}}
                <div class="col-lg-3">
                    <div class="card">
                        <div class="card-body text-center">
                            <img src="https://images.pexels.com/photos/416320/pexels-photo-416320.jpeg?auto=compress&cs=tinysrgb&w=1600" alt="" style="width: 100%">
                            <button class="btn btn-danger mt-3">Hapus</button>
                        </div>
                    </div>
                </div>
                {{-- Loop end --}}
            </div>
        </div>
    </section>
</div>

@endsection

@section('js')
@endsection
