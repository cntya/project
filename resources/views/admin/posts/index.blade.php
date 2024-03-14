<body class="bg-success">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <a href="/admin/blog/create" class="btn btn-success mb-3"><i class="fas fa-plus"></i> Tambah</a>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th class="font-weight-bold">No</th>
                                <th class="font-weight-bold">Title</th>
                                <th class="font-weight-bold">Cover</th>
                                <th class="font-weight-bold">Body</th>
                                <th class="font-weight-bold">Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($blog as $p)
                            <tr>
                                <td>{{$p->title}}</td>
                                <td>{{$p->cover}}</td>
                                <td>{{$p->body}}</td>
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
