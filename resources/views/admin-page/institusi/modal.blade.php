{{-- MODAL TAMBAH --}}
<form action="{{ route('institusi.store') }}" method="post" enctype="multipart/form-data" id="institusi">
    @csrf
    <div class="modal fade" id="modalTambah" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">Tambah Institusi</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <select name="tipe_id" id="tipe_id" class="form-control">
                            @foreach ($tipe as $i)
                            <option value="{{ $i->id }}">{{ $i->tipe }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Institusi</label>
                        <input type="text" class="form-control" placeholder="Institusi" name="nama">
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
<form action="{{url('admin/institusi',$i->id)}}" method="post" enctype="multipart/form-data" id="institusi">
    @csrf
    @method('patch')
    <div class="modal fade" id="editInstitusi{{ $i->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">Ubah Institusi</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <select name="tipe_id" id="tipe_id" class="form-control">
                            @foreach ($tipe as $j)
                            <option value="{{ $j->id }}" @if($j->id == $i->tipe_id) selected @endif>{{ $j->tipe }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Institusi</label>
                        <input type="text" class="form-control" placeholder="Institusi" name="nama" value="{{ $i->nama }}">
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
<form action="{{url('admin/institusi',$i->id)}}" method="post" enctype="multipart/form-data">
    @csrf
    @method('DELETE')
    <div class="modal fade" id="hapusInstitusi{{ $i->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">Hapus Institusi</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        Apa anda yakin ingin menghapus data <b>{{$i->nama}}</b> ini ?
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
