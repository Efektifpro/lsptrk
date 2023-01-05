@extends('visitor-layout.main')

@section('content')
    <section id="form-login">
        <div class="container">
            <div class="section-title">
                <b>Registrasi</b> <br>
                <i style="font-size: 17px">Regsitration</i>
            </div>
            <div class="row">
                <div class="col-lg-6" style="display: flex; justify-content: center; align-items: center">
                    <div class="text-center">
                        <img src="{{ asset('assets/admin/setting/'.$setting->logo) }}" style="width: 100px; height:100px"alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <form>
                        <div class="row">
                            <div class="col-12">
                                <div class="mb-4">
                                    <label for="number" class="form-label"><b>Nama Lengkap</b></label>
                                    <input type="text" class="form-control" id="number" name="name">
                                    <div id="" class="form-text"><i>Full Name</i></div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-4">
                                    <label for="number" class="form-label"><b>Nomor KTP atau Paspor</b></label>
                                    <input type="number" class="form-control" id="number">
                                    <div id="" class="form-text"><i>Identification number or passport number (non citizen)</i></div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-4">
                                    <label for="pass" class="form-label"><b>Kata Sandi</b></label>
                                    <input type="password" class="form-control" id="pass">
                                    <div id="" class="form-text"><i>Password</i></div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-4">
                                    <label for="pass" class="form-label"><b>Konfirmasi Kata Sandi</b></label>
                                    <input type="password" class="form-control" id="pass">
                                    <div id="" class="form-text"><i>Password Confirmation</i></div>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary" style="width: 100%; font-weight: bolder; background-color: var(--primary)"><i class="fas fa-sign-in-alt"></i> Masuk / Login</button>
                    </form>
                    <div style="text-align: right">
                        <a href="">
                            <b>Lupa Kata Sandi?</b> <br>
                            <i style="font-size: 15px">Forgot Password?</i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center my-5">
                <div class="col-lg-5">
                    <div style="text-align: center">
                        Sudah memiliki akun? Masuk <a href="/login"><b>di sini</b></a> <br>
                        <i style="font-size: 15px">Already registered? Please login <a href="/login"><b>here</b></a>  </i>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('js')

@endsection
