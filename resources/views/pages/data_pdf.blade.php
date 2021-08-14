<!DOCTYPE html>
<html>
<head>
	<title>Membuat Laporan PDF Dengan DOMPDF Laravel</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
		}
	</style>
	<center>
		<img src="qccjaboouter_logo.png" width="120" style="position: absolute;"><h6>PERMOHONAN DEVIASI TOTI FAILED</h6>
		@foreach($data as $datas)
		<h6 style="color: red">{{$datas->id_tiket." ".$datas->rtp_telkomsel." ".$datas->siteid}}</h6>
		@endforeach
	</center>

	<div style="border: 1px solid black; height: 90%;">
		Test
	</div>
 
	
 
</body>
</html>