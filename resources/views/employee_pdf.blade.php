<!DOCTYPE html>
<html>
<head>
	<title>Membuat Laporan PDF Dengan DOMPDF Laravel</title>
	<link rel="stylesheet" type="text/css" href="/css/app.css">
</head>
<body>
	<style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
		}
	</style>
	<center>
		<h5>Membuat Laporan PDF Dengan DOMPDF Laravel</h4>
	</center>
 
	<table class='table table-bordered'>
		<thead>
			<tr>
				<th>No</th>
				<th>Nama</th>
				<th>Jabatan</th>
				<th>Usia</th>
				<th>Alamat</th>
			</tr>
		</thead>
		<tbody>
			@php $i=1 @endphp
			@foreach($employee as $e)
			<tr>
				<td>{{ $i++ }}</td>
				<td>{{$e->name}}</td>
				<td>{{$e->position}}</td>
				<td>{{$e->age}}</td>
				<td>{{$e->address}}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
 
</body>
</html>