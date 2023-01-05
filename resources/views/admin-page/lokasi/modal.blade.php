{{-- MODAL TAMBAH --}}
<form action="{{ route('lokasi.store') }}" method="post" enctype="multipart/form-data" id="lokasi">
    @csrf
    <div class="modal fade" id="tambahLokasi" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">Tambah Lokasi Ujian</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <select name="kota_id" id="kota_id" class="form-control">
                            @foreach ($kota as $i)
                            <option value="{{ $i->id }}">{{ $i->nama_kota }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Lokasi</label>
                        <input type="text" class="form-control" placeholder="Lokasi Ujian" name="nama_lokasi" required>
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
@foreach ($data as $i)
<form action="{{url('admin/lokasi',$i->id)}}" method="post" enctype="multipart/form-data">
    @csrf
    @method('patch')
    <div class="modal fade" id="editLokasi{{ $i->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">Ubah Lokasi Ujian</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <select name="kota_id" id="kota_id" class="form-control">
                            @foreach ($kota as $j)
                            <option value="{{ $j->id }}" @if($j->id == $i->kota_id) selected @endif>{{ $j->nama_kota }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Lokasi</label>
                        <input type="text" class="form-control" placeholder="Lokasi Ujian" name="nama_lokasi" value="{{ $i->nama_lokasi }}">
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
<form action="{{url('admin/lokasi',$i->id)}}" method="post" enctype="multipart/form-data">
    @csrf
    @method('DELETE')
    <div class="modal fade" id="hapusLokasi{{ $i->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">Hapus Lokasi Ujian</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        Apa anda yakin ingin menghapus data <b>{{$i->nama_lokasi}}</b> ini ?
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
