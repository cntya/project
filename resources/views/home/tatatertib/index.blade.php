<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>DATA SERAGAM</title>
	

    <style>
        td {
            border : 1px dotted #999999;
        }
        th {
            border : 1px dotted #999999;
        }
        </style>
</head>
<body  >
<h2 a class="text-bg-success" style="margin-top: 10px;"><center>DATA SERAGAM </center></a>
	<a><center>MTs Al Makmur</center></a></h2>
<!-- <div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                 -->
                <!-- <a href="/admin/seragam/create"class="btn btn-primary mb-3"><i class="fas fa-plus"></i>Tambah</a> -->
                <table class="table" style="margin: 20px;" border="1">
                    <tr>
                        <td><b><center>HARI</b></center></td>
                        <td><b><center>PAKAIAN</b></center></td>
                        
                    </tr>
                    @foreach ($seragam as $r)
                        <tr>
                           
                            <td>{{ $r->hari }}</td>
                            <td>{{ $r->pakaian }}</td>


                            <!-- <td>
                            <a href="/seragam/hapus/{{ $r->id }}" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                            </td> -->
                        </tr>
                        @endforeach
                </table>
            </div>
        </div>
    </body>
    </div>
</div>
