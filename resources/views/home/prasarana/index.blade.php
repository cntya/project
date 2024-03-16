<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <a href="/admin/seragam/create"class="btn btn-primary mb-3"><i class="fas fa-plus"></i>Tambah</a>
                <table class="table">
                    <tr>
                        <td>No</td>
                        <td>Fasilitas</td>
                        <td>Keterangan</td>
                        <td>Aksi</td>
                    </tr>
                    @foreach ($sapras as $s)
                        <tr>
                           
                            <td>{{ $s->fasilitas }}</td>
                            <td>{{ $s->keterangan }}</td>


                            <td>
                            <a href="/seragam/hapus/{{ $s->id }}" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                            </td>
                        </tr>
                        @endforeach
                </table>
            </div>
        </div>
        
    </div>
</div>
