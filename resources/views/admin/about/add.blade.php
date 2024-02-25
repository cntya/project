<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                <form action="/about/simpan" method="post" enctype="multipart/form">
                    @csrf


                    <div class="form-group">
                        <label for=""><b>Name</b></label>
                        <input type="text" name="name"
                            class="form-control @error('headline') is-invalid @enderror" placeholder="headline">
                    </div>

                    <div class="form-group">
                        <label for=""><b>Deskripsi</b></label>
                        <input type="text" name="desc" class="form-control" placeholder="deskripsi">
                    </div>

                    <div class="form-group">
                        <label for=""><b>Cover</b></label>
                        <input type="file" name="cover" class="" placeholder="">
                    </div>

                    <button type="submit" class="btn btn-primary"> Simpan</button>

                </form>
            </div>
        </div>

    </div>
</div>
