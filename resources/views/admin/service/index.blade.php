<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <a href="/admin/service/create"class="btn btn-primary mb-3"><i class="fas fa-plus"></i>Tambah</a>
                <table class="table">
                    <tr>
                        <td><b>No</b></td>
                        <td><b>Icon</b></td>
                        <td><b>Desc</b></td>
                        <td><b>Gambar</b></td>
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
                            <a href="/service/hapus/{{ $s->id }}" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
        
    </div>
</div>
