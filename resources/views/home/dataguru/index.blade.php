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
            <div class="card-body"> -->
                <!-- <a href="/admin/seragam/create"class="btn btn-primary mb-3"><i class="fas fa-plus"></i>Tambah</a> -->
                <table class="table" style="margin: 20px;" border="1">
                    <tr>
                        <td><center><b>NO</b></center></td>
                        <td><center><b>NAMA LENGKAP</b></center></td>
                        <td><center><b>JABATAN</center></b></td>
                       
                    </tr>
                    @foreach ($guru as $g)
                        <tr>
                            <td>{{ $g->id }}</td>
                            <td>{{ $g->nama_lengkap }}</td>
                            <td>{{ $g->jabatan }}</td>


                            <!-- <td>
                            <a href="/seragam/hapus/{{ $g->id }}" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                            </td> -->
                        </tr>
                        @endforeach
                </table>
            </div>
        </div>
        
    </div>
</div>
