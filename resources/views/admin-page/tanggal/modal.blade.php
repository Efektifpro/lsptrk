{{-- MODAL TAMBAH --}}
<form action="{{ route('tanggal.store') }}" method="post" enctype="multipart/form-data" id="tanggal">
    @csrf
    <div class="modal fade" id="tambahTanggal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">Tambah Data Tanggal Ujian</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <select name="bidang_id" id="bidang_id" class="form-control">
                            @foreach ($bidang as $i)
                            <option value="{{ $i->id }}">{{ $i->nama }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Tanggal</label>
                        <input type="date" class="form-control" placeholder="Tanggal Ujian" name="tanggal" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </div>
        </div>
    </div>
</form>
{{-- END of MODAL TAMBAH --}}


{{-- MODAL EDIT --}}
@foreach ($data as $key => $i)
<form action="{{url('admin/tanggal',$i->id)}}" method="post" enctype="multipart/form-data">
    @csrf
    @method('patch')
    <div class="modal fade" id="editTanggal{{ $i->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">Ubah Institusi</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <select name="bidang_id" id="bidang_id" class="form-control">
                            @foreach ($bidang as $j)
                            <option value="{{ $j->id }}" @if($j->id == $i->bidang_id) selected @endif>{{ $j->nama }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Tanggal</label>
                        <input type="date" class="form-control" placeholder="Tanggal Ujian" name="tanggal" value="{{ $i->tanggal }}">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </div>
        </div>
    </div>
</form>
@endforeach

{{-- END of Modal EDIT --}}


{{-- MODAL DELETE --}}
@foreach ($data as $i)
<form action="{{url('admin/tanggal',$i->id)}}" method="post" enctype="multipart/form-data">
    @csrf
    @method('DELETE')
    <div class="modal fade" id="hapusTanggal{{ $i->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
