{{-- MODAL TAMBAH --}}
<form action="{{ route('klasifikasi.store') }}" method="post" enctype="multipart/form-data" id="klasifikasi">
    @csrf
    <div class="modal fade" id="modalTambah" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">Tambah Klasifikasi Pekerjaan</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Klasifikasi Pekerjaan</label>
                        <input type="text" class="form-control" placeholder="Klasifikasi Pekerjaan" name="nama">
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
<form action="{{url('admin/klasifikasi',$i->id)}}" method="post" enctype="multipart/form-data" id="klasifikasi">
    @csrf
    @method('PATCH')
    <div class="modal fade" id="editKlasifikasi{{ $i->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">Ubah Klasifikasi Pekerjaan</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Klasifikasi Pekerjaan</label>
                        <input type="text" class="form-control" placeholder="Klasifikasi Pekerjaan" name="nama" value="{{ $i->nama }}">
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
{{-- END of MODAL EDIT --}}


{{-- MODAL DELETE --}}
@foreach ($data as $i)
<form action="{{url('admin/klasifikasi',$i->id)}}" method="post" enctype="multipart/form-data">
    @csrf
    @method('DELETE')
    <div class="modal fade" id="hapusKlasifikasi{{ $i->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">Hapus Klasifikasi Pekerjaan</h4>
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
