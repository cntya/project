<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <a href="/admin/banner/create"class="btn btn-primary mb-3"><i class="fas fa-plus"></i>Tambah</a>
                <table class="table">
                    <tr>
                        <td>No</td>
                        <td>Headline</td>
                        <td>desc</td>
                        <td>Gambar</td>
                        <td>Aksi</td>
                    </tr>
                    {{ $bannercount = 0 }}
                    @foreach ($banner as $b)
                        <tr>
                            {{ $bannercount++ }}

                            <td>{{ $bannercount }}</td>
                            <td>{{ $b->headline }}</td>
                            <td>{{ $b->desc }}</td>
                            <td>{{ $b->gambar }}</td>

                            <td>
                            <a href="/banner/hapus/{{ $b->id }}" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
        
    </div>
</div>
