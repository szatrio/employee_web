<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Laravel #20 : Eloquent Laravel</title>
    <link rel="stylesheet" type="text/css" href="/css/app.css">
</head>
<body>
 
<h1>Data Guru</h1>
 
<ul>
    <a href="/teacher/add" class="btn btn-primary mb-3">Input Pegawai Baru</a>
    <a href="/teacher/trash" class="btn btn-warning mb-3">Tong Sampah</a>
    <table class="table table-bordered table-hover table-striped">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Alamat</th>
                <th>OPSI</th>
            </tr>
        </thead>
        <tbody>
            @foreach($teacher as $t)
            <tr>
                <td>{{ $t->name }}</td>
                <td>{{ $t->address }}</td>
                <td>
                    <a href="/teacher/edit/{{ $t->id_teacher }}" class="btn btn-warning">Edit</a>
                    <a href="/teacher/delete/{{ $t->id_teacher }}" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</ul>
 
</body>
</html>