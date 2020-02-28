<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel</title>
	<link rel="stylesheet" type="text/css" href="/css/app.css">
</head>
<body>
	<div class="container">
		<h3>Data Pegawai</h3>
	
		<a href="/employee/add"> + Tambah Pegawai Baru</a>
		
		<br/>

		<p>Cari Data Pegawai :</p>
		<form action="/employee/search" method="GET">
			<input type="text" name="search" placeholder="Cari Pegawai .." value="{{ old('search') }}">
			<input type="submit" value="CARI">
		</form>

		<a href="/employee/print_pdf" class="btn btn-primary m-2" target="_blank">CETAK PDF</a>

		@if (count($errors) > 0)
			<div class="alert alert-danger">
				<ul>
					@foreach ($errors->all() as $error)
					<li>Errornya adalah {{ $error }}</li>
					@endforeach
				</ul>
			</div>
		@endif

		<br/>
			<table border="1">
				<tr>
					<th>Nama</th>
					<th>Jabatan</th>
					<th>Umur</th>
					<th>Alamat</th>
					<th>Opsi</th>
				</tr>
				@foreach($employee as $p)
				<tr>
					<td>{{ $p->name }}</td>
					<td>{{ $p->position }}</td>
					<td>{{ $p->age }}</td>
					<td>{{ $p->address }}</td>
					<td>
						<a href="/employee/edit/{{ $p->id_employee }}">Edit</a>
						|
						<a href="/employee/delete/{{ $p->id_employee }}">Hapus</a>
					</td>
				</tr>
				@endforeach
			</table>

			@yield('pageBar')
	</div>
 
</body>
</html>