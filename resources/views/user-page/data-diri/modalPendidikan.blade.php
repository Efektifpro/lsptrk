<form action="{{ route('pendidikan_peserta.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="modal fade" tabindex="-1" role="dialog" id="modalPendidikan">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tambah / Edit Data Pendidikan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label>Nama Universitas</label>
                                <select name="perguruan_tinggi_id" class="form-control" id="perguruan_tinggi_id" required>
                                    @foreach ($perguruan_tinggi as $pt)
                                    <option value="{{ $pt->id }}">{{ $pt->nama }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label>Pendidikan Terakhir</label>
                                <select name="strata" class="form-control" id="strata" required>
                                    <option value="-">- Pilih Strata -</option>
                                    <option value="D2">D2</option>
                                    <option value="D3">D3</option>
                                    <option value="D4">D4</option>
                                    <option value="S1">S1</option>
                                    <option value="S2">S2</option>
                                    <option value="S3">S3</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label>Jurusan</label>
                                <input type="text" class="form-control" placeholder="" name="jurusan" required>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label>Tahun Masuk</label>
                                <input type="date" class="form-control" placeholder="" name="masuk" required>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label>Bekerja Keluar</label>
                                <input type="date" class="form-control" placeholder="" name="tamat" required>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer bg-whitesmoke br">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
</form>

@foreach ($pendidikan_peserta as $pp)
<form action="{{ url('panel/pendidikan_peserta', $pp->id) }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PATCH')
    <div class="modal fade" tabindex="-1" role="dialog" id="editPendidikan{{ $pp->id }}">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Ubah Data Pendidikan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label>Nama Universitas</label>
                                <select name="perguruan_tinggi_id" class="form-control" id="perguruan_tinggi_id" required>
                                    @foreach ($perguruan_tinggi as $pt)
                                    <option value={{ $pt->id }} @if($pt->id == $pp->perguruan_tinggi_id) selected @endif>{{ $pt->nama }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label>Pendidikan Terakhir</label>
                                <select name="strata" class="form-control" id="strata" required>
                                    <option value="-">- Pilih Strata -</option>
                                    <option value="D2">D2</option>
                                    <option value="D3">D3</option>
                                    <option value="D4">D4</option>
                                    <option value="S1">S1</option>
                                    <option value="S2">S2</option>
                                    <option value="S3">S3</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label>Jurusan</label>
                                <input type="text" class="form-control" placeholder="" name="jurusan" value="{{ $pp->jurusan }}">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label>Tahun Masuk</label>
                                <input type="date" class="form-control" placeholder="" name="masuk" value="{{ $pp->masuk }}">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label>Bekerja Keluar</label>
                                <input type="date" class="form-control" placeholder="" name="tamat" value="{{ $pp->tamat }}">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer bg-whitesmoke br">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
</form>
@endforeach


@foreach ($pendidikan_peserta as $pp)
<div class="modal fade" id="hapusPendidikan{{ $pp->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <form action="{{ url('panel/pendidikan_peserta',$pp->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('DELETE')
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">Hapus Data Pendidikan Peserta</h4>
                </div>
                <div class="modal-body text-left">
                    Apa anda yakin ingin menghapus data ??
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-danger">Ya</button>
                </div>
            </div>
        </div>
    </form>
</div>
@endforeach
