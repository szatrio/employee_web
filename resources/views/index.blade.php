<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>
<body>
 
	<h2>www.malasngoding.com</h2>
	<h3>Data Pegawai</h3>
 
	<a href="/employee/add"> + Tambah Pegawai Baru</a>
	
	<br/>
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
 
</body>
</html>