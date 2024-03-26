<body class="bg-success">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <a href="/admin/kategori/create" class="btn btn-success mb-3"><i class="fas fa-plus"></i> Tambah</a>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th class="font-weight-bold">No</th>
                                <th class="font-weight-bold">Name</th>
                                <th class="font-weight-bold">Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($kategori as $k)
                            <tr>
                                <td>{{$k->id}}</td>
                                <td>{{$k->name}}</td>
                                
                                <td>
                                    <a href="/kategori/hapus/{{ $k->id }}" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
