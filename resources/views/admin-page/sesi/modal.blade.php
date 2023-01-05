{{-- MODAL TAMBAH --}}
<form action="{{ route('sesi.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="modal fade" id="tambahSesi" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">Tambah Jadwal Sesi Ujian</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <select name="tanggal_id" id="tanggal_id" class="form-control">
                            @foreach ($tanggal as $i)
                            <option value="{{ $i->id }}">{{ $i->tanggal }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Sesi</label>
                        <input type="text" class="form-control" placeholder="Sesi Ujian" name="sesi" required>
                    </div>
                    <div class="form-group">
                        <label>Mulai</label>
                        <input type="time" class="form-control" placeholder="Mulai Ujian" name="mulai" required>
                    </div>
                    <div class="form-group">
                        <label>Selesai</label>
                        <input type="time" class="form-control" placeholder="Selesai Ujian" name="selesai" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-success">Save</button>
                </div>
            </div>
        </div>
    </div>
</form>
{{-- END of MODAL TAMBAH --}}


{{-- MODAL EDIT --}}
@foreach ($data as $key => $i)
<form action="{{url('admin/sesi',$i->id)}}" method="post" enctype="multipart/form-data">
    @csrf
    @method('patch')
    <div class="modal fade" id="editSesi{{ $i->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">Ubah Jadwal Sesi Ujian</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <select name="tanggal_id" id="tanggal_id" class="form-control">
                            @foreach ($tanggal as $j)
                            <option value="{{ $j->id }}" @if($j->id == $i->tanggal_id) selected @endif>{{ $j->tanggal }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Sesi</label>
                        <input type="text" class="form-control" placeholder="Sesi Ujian" name="sesi" value="{{ $i->sesi }}">
                    </div>
                    <div class="form-group">
                        <label>Mulai</label>
                        <input type="time" class="form-control" placeholder="Mulai Ujian" name="mulai" value="{{ $i->mulai }}">
                    </div>
                    <div class="form-group">
                        <label>Sesi</label>
                        <input type="time" class="form-control" placeholder="Selesai Ujian" name="selesai" value="{{ $i->selesai }}">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-success">Update</button>
                </div>
            </div>
        </div>
    </div>
</form>
@endforeach

{{-- END of Modal EDIT --}}


{{-- MODAL DELETE --}}
@foreach ($data as $i)
<form action="{{url('admin/sesi',$i->id)}}" method="post" enctype="multipart/form-data">
    @csrf
    @method('DELETE')
    <div class="modal fade" id="hapusSesi{{ $i->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">Hapus Data</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        Apa anda yakin ingin menghapus data ini ?
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-danger">Delete</button>
                </div>
            </div>
        </div>
    </div>
</form>
@endforeach
{{-- END of MODAL DELETE --}}
