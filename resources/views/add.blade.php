<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel</title>
</head>
<body>
 
	<h3>Data Pegawai</h3>
 
	<a href="/employee"> Kembali</a>
	
	<br/>
	<br/>
 
	<form action="/employee/store" method="post">
		{{ csrf_field() }}
		Nama <input type="text" name="name" required="required"> <br/>
		Jabatan <input type="text" name="position" required="required"> <br/>
		Umur <input type="number" name="age" required="required"> <br/>
		Alamat <textarea name="address" required="required"></textarea> <br/>
		<input type="submit" value="Simpan Data">
	</form>
 
</body>
</html>