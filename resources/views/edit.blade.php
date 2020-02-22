<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel</title>
</head>
<body>
 

	<h3>Edit Pegawai</h3>
 
	<a href="/pegawai"> Kembali</a>
	
	<br/>
	<br/>
 
	@foreach($employee as $p)
	<form action="/employee/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $p->id_employee }}"> <br/>
		Nama <input type="text" required="required" name="name" value="{{ $p->name }}"> <br/>
		Jabatan <input type="text" required="required" name="position" value="{{ $p->position }}"> <br/>
		Umur <input type="number" required="required" name="age" value="{{ $p->age }}"> <br/>
		Alamat <textarea required="required" name="address">{{ $p->address }}</textarea> <br/>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach
		
 
</body>
</html>