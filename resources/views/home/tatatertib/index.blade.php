<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <a href="/admin/seragam/create"class="btn btn-primary mb-3"><i class="fas fa-plus"></i>Tambah</a>
                <table class="table">
                    <tr>
                        <td>Hari</td>
                        <td>Pakaian</td>
                        <td>Aksi</td>
                    </tr>
                    @foreach ($seragam as $r)
                        <tr>
                           
                            <td>{{ $r->hari }}</td>
                            <td>{{ $r->pakaian }}</td>


                            <td>
                            <a href="/seragam/hapus/{{ $r->id }}" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                            </td>
                        </tr>
                        @endforeach
                </table>
            </div>
        </div>
        
    </div>
</div>
