{{-- <div class="row"> --}}
    {{-- <div class="col-md-6"> --}}
        <div class="card">
            <div class="card-body">

            {{--CKEditor--}}
                <script src="https://cdn.ckeditor.com/4.18.0/standard/ckeditor.js"></script>
                <form action="" method="POST" enctype="multipart/form">
                    @csrf


                    <div class="form-group">
                        <label for=""><b>headline</b></label>
                        <input type="text" name="headline"
                            class="form-control @error('headline') is-invalid @enderror" placeholder="headline">
                    </div>

                    <div class="form-group">
                        <label for=""><b>Deskripsi</b></label>
                        <textarea name="desc" id="content" cols="30" rows="10"></textarea>
                    </div>

                    <div class="form-group">
                        <label for=""><b>Gambar </b></label>
                        <input type="file" name="gambar" class="" placeholder="gambar">
                    </div>

                    <button type="submit" class="btn btn-primary"> Simpan</button>

                </form>
            </div>
        </div>

    </div>
</div>
<script>
    CKEDITOR.replace('content');
</script>