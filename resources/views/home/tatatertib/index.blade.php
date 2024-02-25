<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>DATA GURU</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="datatables/jquery.dataTables.min.css">

</head>
<body class="mx-4">
	<h2 a class="text-bg-success"><center>TATA TERTIB</center></a>
    <a><center>PEMAKAIAN SERAGAM </center></a>
	<a><center>MTs Al Makmur</center></a></h2>

	
	<br/>
	<table class="table table-striped table-hover mt-4 datatab">
		<thead>
		<tr>
			<th>NO</th>
			<th>HARI</th>
			<th>KETERANGAN</th>
      			
		</tr>
        <tr>
            <td>1</td>
            <td>SENIN-SELASA</td>
            <td>PUTIH-BIRU</td>
        </tr>
        <tr>
            <td>2</td>
            <td>RABU</td>
            <td>BATIK</td>
        </tr>
        <tr>
            <td>3</td>
            <td>KAMIS</td>
            <td>PRAMUKA</td>
        </tr>
        <tr>
            <td>4</td>
            <td>JUM'AT</td>
            <td>BAJU MUSLIM</td>
        </tr>
        <tr>
            <td>5</td>
            <td>SABTU</td>
            <td>PRAMUKA</td>
        </tr>
        </thead>
     </table>
</body>
<script src="datatables/jquery-1.12.0.min.js"></script>
  <script src="datatables/jquery.dataTables.min.js"></script>
  <script>
  	$(document).ready(function(){
  		$('.datatab').DataTable();
  	});
  </script>
</html>