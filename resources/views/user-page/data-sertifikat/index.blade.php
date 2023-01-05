@extends('user-layout.main')

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Dashboard</h1>
        </div>
        <div class="section-body">
            <div class="row">

                {{-- Start loop (if null) --}}
                <div class="col-3">
                    <div class="card">
                        <div class="card-body text-center">
                            <img src="https://assets.pikiran-rakyat.com/crop/0x0:0x0/x/photo/2021/08/17/1019155014.jpg" alt="" style="width: 100%">
                            <a class="btn btn-primary mt-4 " href="" download="https://assets.pikiran-rakyat.com/crop/0x0:0x0/x/photo/2021/08/17/1019155014.jpg">
                                <i class="fas fa-download"></i> Download
                            </a>
                        </div>
                    </div>
                </div>
                {{-- End loop --}}

                {{-- If null
                <div class="col-3">
                    <div class="card">
                        <div class="card-body text-center">
                            <b>Anda belum memiliki sertifikat</b> <br>
                            <a class="btn btn-primary mt-3" href="">Daftar Sekarang</a>
                        </div>
                    </div>
                </div> --}}
                
            </div>
        </div>
    </section>
</div>

@endsection

@section('js')
@endsection
