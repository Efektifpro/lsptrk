<section id="link-head">
    <div class="container d-flex justify-content-between">
        <a href="">
            <i class="fas fa-envelope"></i> {{ $setting->email }}
        </a>
        <a href="">
            <i class="fas fa-phone"></i> {{ $setting->telp }}
        </a>
    </div>
</section>

<section id="top-nav">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">
            <a class="navbar-brand" href="#"><b>LSP-TRK</b></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" aria-current="page" href="/">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('profile') ? 'active' : '' }}" href="/profile">Profile</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle {{ Request::is(['login'],['register'],['jadwal']) ? 'active' : '' }}" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Sertifikasi
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item {{ Request::is('register') ? 'active' : '' }}" href="{{ url('register') }}">Registrasi</a></li>
                            <li><a class="dropdown-item {{ Request::is('login') ? 'active' : '' }}" href="{{ url('login') }}">Login</a></li>
                            <li><a class="dropdown-item {{ Request::is('jadwal') ? 'active' : '' }}" href="/jadwal">Jadwal</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle {{ Request::is(['berita-umum'],['berita-analisis']) ? 'active' : '' }}" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Berita
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item {{ Request::is('berita-umum') ? 'active' : '' }}" href="/berita-umum">Berita Umum</a></li>
                            <li><a class="dropdown-item {{ Request::is('berita-analisis') ? 'active' : '' }}" href="/berita-analisis">Berita Analisis</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('gallery') ? 'active' : '' }}" href="/gallery">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('contact-us') ? 'active' : '' }}" href="/contact-us">Contact Us</a>
                    </li>
                </ul>
            </div>
            </div>
        </nav>
    </div>
</section>
