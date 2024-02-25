<body class="bg-success">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <a href="/admin/user/create" class="btn btn-success mb-3"><i class="fas fa-plus"></i> Tambah</a>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th class="font-weight-bold">No</th>
                                <th class="font-weight-bold">Name</th>
                                <th class="font-weight-bold">Email</th>
                                <th class="font-weight-bold">Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($user as $p)
                            <tr>
                                <td>{{$p->id}}</td>
                                <td>{{$p->name}}</td>
                                <td>{{$p->email}}</td>
                                <td>
                                    <a href="/user/hapus/{{ $p->id }}" class="btn btn-danger"><i class="fas fa-trash"></i></a>
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
