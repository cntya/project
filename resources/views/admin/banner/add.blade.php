<div class="card">
    <div class="card-body">
        {{-- CKEditor --}}
        <script src="https://cdn.ckeditor.com/4.18.0/standard/ckeditor.js"></script>
        <form action="" method="POST" enctype="multipart/form-data">
            @csrf  

            <div class="form-group">
                <label for="headline"><b>Headline</b></label>
                <input type="text" name="headline" id="headline" class="form-control @error('headline') is-invalid @enderror" placeholder="Headline">
            </div>

            <div class="form-group">
                <label for="desc"><b>Deskripsi</b></label>
                <textarea name="desc" id="desc" cols="30" rows="10" class="form-control"></textarea>
            </div>

            <div class="form-group">
                <label for="gambar"><b>Gambar</b></label>
                <input type="file" name="gambar" id="gambar" class="form-control-file" placeholder="Gambar">
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
</div>

<script>
    CKEDITOR.replace('desc', {
        autoParagraph: false
    });
</script>
