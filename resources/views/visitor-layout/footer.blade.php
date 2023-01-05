<section id="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="section-title">
                    LSP-TRK
                </div>
                <div>
                    {!! $setting->welcome_msg !!}
                </div>
            </div>
            <div class="col-lg-3 text-center">
                <div class="section-title">
                    Menu
                </div>
                <ul>
                    <li>
                        <a href="">Beranda</a>
                    </li>
                    <li>
                        <a href="">Profile</a>
                    </li>
                    <li>
                        <a href="">Registrasi</a>
                    </li>
                    <li>
                        <a href="">Login</a>
                    </li>
                    <li>
                        <a href="">Jadwal</a>
                    </li>
                    <li>
                        <a href="">Knowledge</a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-3">
                <div class="section-title">
                    Kontak Kami
                </div>
                <div>
                    {!! $setting->alamat !!}
                </div>
                <br>
                <div>
                    <b>Phone :</b> {{ $setting->telp }} <br>
                    <b>Email :</b> {{ $setting->email }}
                </div>
            </div>
        </div>
    </div>
</section>

<section id="copyright">
    2022 <i class="far fa-copyright"></i> LSP-TRK
</section>
