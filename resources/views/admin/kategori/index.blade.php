<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <a href="/admin/posts/kategori/create"class="btn btn-primary mb-3"><i class="fas fa-plus"></i>Tambah</a>
                <table class="table">
                    <tr>
                        <td>No</td>
                        <td>Icon</td>
                        <td>desc</td>
                        <td>Gambar</td>
                    </tr>
                    {{-- {{ $bannercount = 0 }} --}}
                    @foreach ($service as $s)
                        <tr>
                            {{-- {{ $bannercount++ }} --}}

                            {{-- <td>{{ $bannercount }}</td> --}}
                            <td>{{ $s->title }}</td>
                            <td>{{ $s->icon }}</td>
                            <td>{{ $s->desc }}</td>

                            <td>
                                <a href="" class="btn btn-primary">Hapus</a>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
        
    </div>
</div>
