@extends('admin-layout.main')

@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Pengaturan Aplikasi</h1>
            </div>
            <div class="section-body">
                <form action="{{ route('setting.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <button type="button" data-toggle="modal" data-target="#setting" class="btn btn-primary m-b-sm"><i class="fa fa-plus"></i> Setting</button>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label>Logo</label>
                                                <input type="file" name="logo" class="form-control" id="logo" required>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label>About Image</label>
                                                <input type="file" name="about_img" class="form-control" id="about_img" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label>Alamat</label>
                                                <textarea class="summernote-simple" name="alamat" id="alamat" required></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-4">
                                            <div class="form-group">
                                                <label>Telp.</label>
                                                <input type="text" class="form-control" id="telp" name="telp" required>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="form-group">
                                                <label>Fax</label>
                                                <input type="text" class="form-control" id="fax" name="fax" required>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="form-group">
                                                <label>Email</label>
                                                <input type="email" class="form-control" id="email" name="email" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label>Visi</label>
                                                <textarea class="summernote-simple" name="visi" id="visi" required></textarea>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label>Misi</label>
                                                <textarea class="summernote-simple" name="misi" id="misi" required></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label>Welcome Message</label>
                                                <textarea class="summernote-simple" name="welcome_msg" id="welcome_msg" required></textarea>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label>About</label>
                                                <textarea class="summernote-simple" name="about" id="about" required></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </section>
    </div>
@endsection
