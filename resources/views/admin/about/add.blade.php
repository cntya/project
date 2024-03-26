<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">

                <script src="https://cdn.ckeditor.com/4.18.0/standard/ckeditor.js"></script>
                <form action="/about/simpan" method="post" enctype="multipart/form-data">
                    @csrf


                    <div class="form-group">
                        <label for=""><b>Name</b></label>
                        <input type="text" name="name" class="form-control @error('headline') is-invalid @enderror"
                            placeholder="headline">
                    </div>

                    <div class="form-group">
                        <label for=""><b>Deskripsi</b></label>
                        <textarea name="desc" id="content" cols="30" rows="10"></textarea>
                    </div>

                    <div class="form-group">
                        <label for=""><b>Cover</b></label>
                        <input type="file" name="cover" id="cover" class="" placeholder="">
                    </div>

                    <button type="submit" class="btn btn-primary"> Simpan</button>

                </form>
            </div>
        </div>
    </div>
</div>
<script>
    CKEDITOR.replace('content', {
        autoParagraph: false
    });
</script>
