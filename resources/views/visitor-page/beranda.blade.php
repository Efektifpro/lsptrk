@extends('visitor-layout.main')

@section('content')
    <section id="banner" style="margin-bottom: var(--spacing)">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" style="background-color: white">
                    <img class="d-block w-100" src="{{asset('assets/img/banner/asuransi.png')}}" alt="First slide" style="width:100%; object-fit:cover">
                </div>
                <div class="carousel-item" style="background-color: white">
                    <img class="d-block w-100" src="{{asset('assets/img/banner/emoney.png')}}" alt="First slide" style="width:100%; object-fit:cover">
                </div>
                <div class="carousel-item" style="background-color: white">
                    <img class="d-block w-100" src="{{asset('assets/img/banner/fintech.png')}}" alt="First slide" style="width:100%; object-fit:cover">
                </div>
                <div class="carousel-item" style="background-color: white">
                    <img class="d-block w-100" src="{{asset('assets/img/banner/industri.png')}}" alt="First slide" style="width:100%; object-fit:cover">
                </div>
                <div class="carousel-item" style="background-color: white">
                    <img class="d-block w-100" src="{{asset('assets/img/banner/moneychanger.png')}}" alt="First slide" style="width:100%; object-fit:cover">
                </div>
                <div class="carousel-item" style="background-color: white">
                    <img class="d-block w-100" src="{{asset('assets/img/banner/multi.png')}}" alt="First slide" style="width:100%; object-fit:cover">
                </div>
                <div class="carousel-item" style="background-color: white">
                    <img class="d-block w-100" src="{{asset('assets/img/banner/sekuritas.png')}}" alt="First slide" style="width:100%; object-fit:cover">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>
    <section id="intro">
        <div class="container text-center">
            <h2>SELAMAT DATANG DI LSP-TRK</h2>
            <h4>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis, labore.</h4>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iure aspernatur possimus tempora quisquam nihil aut ratione, voluptatem tenetur quaerat assumenda. Dolor incidunt quam molestias, quos expedita quasi quod culpa, sunt enim exercitationem amet est assumenda maxime labore ipsam distinctio blanditiis nesciunt quidem doloremque eligendi a repellendus vitae provident. Culpa, repellat!</p>
        </div>
    </section>
    <section id="informasi-umum">
        <div class="container">
            <h4 class="section-title">Berita Umum</h4>
            <div class="row">
                @foreach ($berita as $i)
                <div class="col-lg-12">
                    <a href="#">
                        <div class="card-lsp">
                            <img src="{{ asset('assets/admin/berita/'.$i->thumbnail) }}" style="width: 250px; height:250px" class="text-center" alt="">
                            <div class="info">
                                <div class="bag">
                                    <div class="judul">
                                        {{ $i->judul }}
                                    </div>
                                    <div class="keterangan">
                                        <div class="tanggal">
                                            <i class="fas fa-calendar-alt" style="margin-right: 5px"></i>{{ $i->created_at->isoFormat('dddd, D MMMM Y') }}
                                        </div>
                                        <div class="reader">
                                            <i class="fas fa-eye"></i> 99
                                        </div>
                                        <div class="penulis">
                                            <i class="fas fa-pencil-alt"></i> by xxx
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="isi">
                                        {!! Str::limit($i->isi,1000) !!}<a href="" title="Lanjutkan membaca" style="color: #0800ff;"><i>Lanjutkan membaca</i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <section id="informasi-umum">
        <div class="container">
            <h4 class="section-title">Berita Analisis</h4>
            <div class="row">
                @foreach ($berita as $i)
                <div class="col-lg-12">
                    <a href="#">
                        <div class="card-lsp">
                            <img src="{{ asset('assets/admin/berita/'.$i->thumbnail) }}" style="width: 250px; height:250px" class="text-center" alt="">
                            <div class="info">
                                <div class="bag">
                                    <div class="judul">
                                        {{ $i->judul }}
                                    </div>
                                    <div class="keterangan">
                                        <div class="tanggal">
                                            <i class="fas fa-calendar-alt" style="margin-right: 5px"></i>{{ $i->created_at->isoFormat('dddd, D MMMM Y') }}
                                        </div>
                                        <div class="reader">
                                            <i class="fas fa-eye"></i> 99
                                        </div>
                                        <div class="penulis">
                                            <i class="fas fa-pencil-alt"></i> by xxx
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="isi">
                                        {!! Str::limit($i->isi,1000) !!}...<a href="" title="Lanjutkan membaca" style="color: #0800ff;"><i>Lanjutkan membaca</i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <section id="partner">
        <div class="container">
            <h4 class="section-title">Partner</h4>
            <div class="owl-carousel my-carousel">
                <div class="my-carousel-item">
                    <img src="https://efektifpro.com/assets/img/partner/lspp.png.png.png" alt="">
                </div>
                <div class="my-carousel-item">
                    <img src="https://efektifpro.com/assets/img/partner/ppkijk.png.png" alt="">
                </div>
                <div class="my-carousel-item">
                    <img src="https://efektifpro.com/assets/img/partner/bsmr.png.png.png" alt="">
                </div>
            </div>
        </div>
    </section>
@endsection

@section('js')
    <script>
        $(document).ready(function(){
            $('.my-carousel').owlCarousel({
                loop: true,
                autoplay: true,
                dots: true,
                merge:true,
                nav: true,
                navText: ["<span class='nav-main-slider-btn fa fa-chevron-left'></span>","<span class='nav-main-slider-btn fa fa-chevron-right'></span>"],
                responsive:{
                    0:{
                        items: 3
                    },
                    600:{
                        items: 3
                    }
                }
            });
        })
    </script>
@endsection
