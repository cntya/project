        <div class="card">
            <div class="card-body">

                {{-- CKEditor --}}
                <script src="https://cdn.ckeditor.com/4.18.0/standard/ckeditor.js"></script>
                <form action="/service/simpan" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                        <label for=""><b>Title</b></label>
                        <input type="text" name="title" class="form-control" placeholder="title">
                    </div>

                    <div class="form-group">
                        <label for=""><b>Icon</b></label>
                        <input type="file" name="icon" id="icon">
                    </div>

                    <div class="form-group">
                        <label for=""><b>Deskripsi</b></label>
                        <textarea name="desc" id="content" cols="30" rows="10"></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary"> Simpan</button>

                </form>
            </div>
        </div>
        <script>
            CKEDITOR.replace('content', {
                autoParagraph: false
            });
        </script>
