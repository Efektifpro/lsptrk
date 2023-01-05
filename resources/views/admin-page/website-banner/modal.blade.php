<div class="modal fade" id="modalBanner" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Tambah / Edit Banner</h4>
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
                    <label>Urutan Ke-</label>
                    <input type="number" class="form-control" placeholder="" name="nama_menu" required>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-success">Save</button>
            </div>
        </div>
    </div>
</div>