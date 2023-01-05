<form action="{{ route('pekerjaan_peserta.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="modal fade" tabindex="-1" role="dialog" id="modalPekerjaan">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tambah Data Pekerjaan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label>Nama Institusi</label>
                                <select name="institusi_id" class="form-control" id="institusi_id" required>
                                    @foreach ($institusi as $i)
                                    <option value="{{ $i->id }}">{{ $i->nama }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label>Posisi</label>
                                <input type="text" class="form-control" placeholder="" name="posisi" required>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label>Bekerja Dari</label>
                                <input type="date" class="form-control" placeholder="" name="dari" required>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label>Bekerja Sampai</label>
                                <input type="date" class="form-control" placeholder="" name="sampai" required>
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

@foreach ($pekerjaan_peserta as $i)
{{-- {{ dd($i) }} --}}
<form action="{{ url('panel/pekerjaan_peserta', $i->id) }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PATCH')
    <div class="modal fade" tabindex="-1" role="dialog" id="editPekerjaan{{ $i->id }}">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Ubah Data Pekerjaan {{ $i->posisi }}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label>Nama Institusi</label>
                                <select name="institusi_id" class="form-control" id="institusi_id" required>
                                    @foreach ($institusi as $j)
                                    <option value={{ $j->id }} @if($j->id == $i->institusi_id) selected @endif>{{ $j->nama }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label>Posisi</label>
                                <input type="text" class="form-control" placeholder="{{ $i->posisi }}" name="posisi" value="{{ $i->posisi }}">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label>Bekerja Dari</label>
                                <input type="date" class="form-control" placeholder="" name="dari" value="{{ $i->dari }}">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label>Bekerja Sampai</label>
                                <input type="date" class="form-control" placeholder="" name="sampai" value="{{ $i->sampai }}">
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

@foreach ($pekerjaan_peserta as $i)
<div class="modal fade" id="hapusPekerjaan{{ $i->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <form action="{{ url('panel/pekerjaan_peserta',$i->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('DELETE')
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">Hapus Data Pekerjaan Peserta</h4>
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
