@extends('visitor-layout.main')

@section('content')

    <section id="banner-page" style="background-image: url('https://images.pexels.com/photos/416920/pexels-photo-416920.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'); background-size:cover; background-position: center;">
        <div class="container">
            <h4>
                Profile
            </h4>
        </div>
    </section>

    <section id="arti-lambang">
        <div class="container">
            <div class="section-title">
                Arti Lambang LSP-TRK
            </div>
            <img src="{{ asset('assets/admin/setting/'.$setting->logo) }}" style="width: 100px; height:100px"alt="">
        </div>
    </section>

    <section id="tentang">
        <div class="container">
            <div class="section-title">
                Siapa Kami?
            </div>
            <div class="row">
                <div class="col-lg-6">
                    {!! $setting->about !!}
                </div>
                <div class="col-lg-6">
                    <img src="{{ asset('assets/admin/setting/'.$setting->about_img) }}" alt="" style="width: 100%">
                </div>
            </div>
        </div>
    </section>

    <section id="visi_misi">
        <div class="container">
            <div class="row justify-content-evenly">
                <div class="col-lg-5">
                    <div class="section-title">
                        Visi
                    </div>
                    <i class="fas fa-clipboard-list"></i> <br>
                    {!! $setting->visi !!}
                </div>
                <div class="col-lg-5">
                    <div class="section-title">
                        Misi
                    </div>
                    <i class="fas fa-bullseye"></i> <br>
                    {!! $setting->misi !!}
                </div>
            </div>
        </div>
    </section>

    <section id="organisasi">
        <div class="container">
            <div class="section-title">
                Struktur Organisasi
            </div>
            -Organization Chart Here-
        </div>
    </section>
@endsection

@section('js')

@endsection
