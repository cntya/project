<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                <form action="/service/simpan" method="post" enctype="multipart/form">
                    @csrf

                    <div class="form-group">
                        <label for=""><b>Title</b></label>
                        <input type="text" name="title" class="form-control" placeholder="title">
                    </div>

                    <div class="form-group">
                        <label for=""><b>Icon</b></label>
                        <input type="file" name="icon">
                    </div>

                    <div class="form-group">
                        <label for=""><b>Deskripsi</b></label>
                        <input type="text" name="desc" class="form-control" placeholder="deskripsi">
                    </div>


                    <button type="submit" class="btn btn-primary"> Simpan</button>

                </form>
            </div>
        </div>

    </div>
</div>
