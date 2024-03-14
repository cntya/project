<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <a href="/admin/about/create"class="btn btn-primary mb-3"><i class="fas fa-plus"></i>Tambah</a>
                <table class="table">
                    <tr>
                        <td>Name</td>
                        <td>Desc</td>
                        <td>Cover</td>
                        <td>Aksi</td>
                    </tr>
                    @foreach ($about as $a)
                        <tr>
                           
                            <td>{{ $a->name }}</td>
                            <td>{{ $a->desc }}</td>
                            <td>{{ $a->cover }}</td>


                            <td>
                            <a href="/about/hapus/{{ $a->id }}" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                            </td>
                        </tr>
                        @endforeach
                </table>
            </div>
        </div>
        
    </div>
</div>
