<form action="{{ route('berita.store') }}" method="POST" enctype="multipart/form-data" id="berita">
    @csrf
    <div class="modal fade" id="modalBerita" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">Tambah Berita</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Thumbnail</label>
                        <div class="file-upload">
                            {{-- <img src="" width="40%" id="photo" class="foto_promo"> --}}
                            <input class="form-control photo" id="foto" accept="image/*" onchange="readURL(this,$(&quot;.foto_promo&quot;))" name="img" type="file">
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Judul</label>
                        <input type="text" class="form-control" placeholder="Judul" name="judul" required>
                    </div>

                    <div class="form-group">
                        <label>Kategori</label>
                        <select name="kat_berita" id="kat_berita" class="form-control">
                            @foreach ($kat_berita as $i)
                            <option value="{{ $i->id }}">{{ $i->nama }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Isi Berita</label>
                        <textarea class="summernote" name="isi" required></textarea>
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
<form action="{{ route('kategori-berita.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="modal fade" id="modalKategori" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-md modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">Tambah Kategori Berita</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Kategori Berita</label>
                        <input type="text" class="form-control" placeholder="Kategori Berita" name="nama" required>
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
