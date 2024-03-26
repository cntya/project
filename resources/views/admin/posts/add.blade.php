<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                <form action="/blog/simpan" method="POST">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for=""><b>Title</b></label>
                        <input type="text" name="title" class="form-control @error('name') is-invalid @enderror"
                            placeholder="Username">
                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for=""><b>Cover</b></label>
                        <input type="text" name="cover" class="form-control" id="editor-container" placeholder="Username">
                    </div>

                    <div class="form-group">
                        <label for=""><b>Body</b></label>
                        <input type="text" name="body" class="form-control" placeholder="">
                    </div>

                    <button type="submit" class="btn btn-primary"> Simpan</button>
                </form>
            </div>
        </div>
        
    </div>
</div>

{{-- <div class="card border-dark mb-3" style="max-width: 18rem;">
    <div class="card-header">Header</div>
    <div class="card-body text-dark">
      <h5 class="card-title">Dark card title</h5>
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    </div>
  </div> --}}
