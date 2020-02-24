<html>
<head>
	<title>Tutorial Laravel #22 : Soft Deletes Laravel</title>
	<link rel="stylesheet" type="text/css" href="/css/app.css">
</head>
<body>
 
	<div class="container">
 
		<div class="card mt-5">
			<div class="card-header text-center">
				Data Guru
			</div>
			<div class="card-body">
 
				<a href="/teacher">Data Guru</a>
 
				<br/>
				<br/>
 
				<a href="/teacher/restore_all">Kembalikan Semua</a>
				|
				<a href="/teacher/permanent_delete_all">Hapus Permanen Semua</a>
				<br/>
				<br/>
 
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>Nama</th>
							<th>Umur</th>
							<th width="30%">OPSI</th>
						</tr>
					</thead>
					<tbody>
						@foreach($teacher as $t)
						<tr>
							<td>{{ $t->name }}</td>
							<td>{{ $t->address }}</td>
							<td>
								<a href="/teacher/restore/{{ $t->id_teacher }}" class="btn btn-success btn-sm">Kembalikan</a>
								<a href="/teacher/permanent_delete/{{ $t->id_teacher }}" class="btn btn-danger btn-sm">Hapus Permanen</a>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
	
</body>
</html>