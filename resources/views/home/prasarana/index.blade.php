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
<h2 a class="text-bg-success" style="margin-top: 10px;"><center>SARANA PRASARANA </center></a>
	<a><center>MTs Al Makmur</center></a></h2><div class="row">
    <!-- <div class="col-md-12">
        <div class="card">
            <div class="card-body"> -->
    
                <table class="table" style="margin: 20px; mb: 20px;" border="1" >
                    <tr>
                        <td><center><b>No</b></center></td>
                        <td><center><b>Fasilitas</center></b></td>
                        <td>Keterangan</td>
                        
                    </tr>
                    @foreach ($sapras as $s)
                        <tr>
                            <td>{{ $s->id }}</td>
                            <td>{{ $s->fasilitas }}</td>
                            <td>{{ $s->keterangan }}</td>


                            <!-- <td>
                            <a href="/seragam/hapus/{{ $s->id }}" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                            </td> -->
                        </tr>
                        @endforeach
                </table>
            </div>
        </div>
        </html>
    </div>
</div>
