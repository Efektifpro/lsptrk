{{-- MODAL TAMBAH --}}
<form action="{{ route('assesment_mandiri.store') }}" method="post" enctype="multipart/form-data" id="asman" class="asman">
    @csrf
    <div class="modal fade" id="tambahAsman" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">Tambah Data Assesment Mandiri</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
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
                        <label>Judul Kompetensi</label>
                        <input type="text" class="form-control" placeholder="Judul Kompetensi" name="judul">
                    </div>
                    <div class="form-group">
                        <label>Pertanyaan</label>
                        <textarea class="form-control summernote" placeholder="Pertanyaan" name="pertanyaan"></textarea>
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
<form action="{{url('admin/assesment_mandiri',$i->id)}}" method="post" enctype="multipart/form-data">
    @csrf
    @method('patch')
    <div class="modal fade" id="editAsman{{ $i->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">Ubah Assesment Mandiri</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
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
                        <label>Judul Kompetensi</label>
                        <input type="text" class="form-control" placeholder="Judul Kompetensi" name="judul" value="{{ $i->judul }}">
                    </div>
                    <div class="form-group">
                        <label>Pertanyaan</label>
                        <textarea class="form-control summernote" placeholder="Pertanyaan" name="pertanyaan" required>
                            {{ $i->pertanyaan }}
                        </textarea>
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
<form action="{{url('admin/assesment_mandiri',$i->id)}}" method="post" enctype="multipart/form-data">
    @csrf
    @method('DELETE')
    <div class="modal fade" id="hapusAsman{{ $i->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">Hapus Data</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        Apa anda yakin ingin menghapus data {{ $i->judul }} ini ?
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
