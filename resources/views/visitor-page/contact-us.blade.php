@extends('visitor-layout.main')

@section('content')

    <section id="banner-page" style="background-image: url('https://images.pexels.com/photos/416920/pexels-photo-416920.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'); background-size:cover; background-position: center;">
        <div class="container">
            <h4>
                Contact Us
            </h4>
        </div>
    </section>

    <section id="contact_us">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="card-contact">
                                <i class="fas fa-location-arrow"></i>
                                <div class="bag">
                                    <div class="title">
                                        Location :
                                    </div>
                                    <div class="info">
                                        {!! $setting->alamat !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="card-contact">
                                <i class="fas fa-phone"></i>
                                <div class="bag">
                                    <div class="title">
                                        Phone :
                                    </div>
                                    <div class="info">
                                        {{ $setting->telp }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="card-contact">
                                <i class="fas fa-fax"></i>
                                <div class="bag">
                                    <div class="title">
                                        Fax :
                                    </div>
                                    <div class="info">
                                        {{ $setting->fax }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="card-contact">
                                <i class="fas fa-envelope"></i>
                                <div class="bag">
                                    <div class="title">
                                        Email :
                                    </div>
                                    <div class="info">
                                        {{ $setting->email }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3966.1593412677553!2d106.7810975!3d-6.2427208!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f11768911619%3A0x70d80dcb6eab1da3!2sGandaria%208%20Office%20Tower!5e0!3m2!1sid!2sid!4v1613959473083!5m2!1sid!2sid" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </section>
@endsection

@section('js')

@endsection
