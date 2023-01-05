@extends('visitor-layout.main')

@section('content')
    <section id="form-login">
        <div class="container">
            <div class="section-title">
                <b>Masuk</b> <br>
                <i style="font-size: 17px">Login</i>
            </div>
            <div class="row">
                <div class="col-lg-6" style="display: flex; justify-content: center; align-items: center">
                    <div class="text-center">
                        <b>Logo</b> <br>
                        LSP - TRK
                    </div>
                </div>
                <div class="col-lg-6">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="mb-4">
                            <label for="number" class="form-label"><b>Nomor KTP atau Paspor</b></label>
                            <input type="text" class="form-control @error('identity') is-invalid @enderror" id="identity" name="identity">
                            <div id="" class="form-text"><i>Identification number or passport number (non citizen)</i></div>
                            <div id="" class="form-text">
                                <i>
                                    @error('identity')
                                        <strong>{{ $message }}</strong>
                                    @enderror
                                </i>
                            </div>
                        </div>
                        <div class="mb-4">
                            <label for="pass" class="form-label"><b>Kata Sandi</b></label>
                            <input type="password" class="form-control" id="password" name="password">
                            <div id="" class="form-text"><i>Password</i></div>
                        </div>
                        <button type="submit" class="btn btn-primary" style="width: 100%; font-weight: bolder; background-color: var(--primary)"><i class="fas fa-sign-in-alt"></i> Masuk / Login</button>
                    </form>
                    <div style="text-align: right">
                        <a href="{{ route('password.request') }}">
                            <b>Lupa Kata Sandi?</b> <br>
                            <i style="font-size: 15px">Forgot Password?</i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center my-5">
                <div class="col-lg-5">
                    <div style="text-align: center">
                        Anda peserta uji baru di LSPP? Buka akun baru <a href="/regist"><b>di sini</b></a> <br>
                        <i style="font-size: 15px">If you're a new competency test participant in LSPP, please register <a href="/regist"><b>here</b></a>  </i>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('js')

@endsection
