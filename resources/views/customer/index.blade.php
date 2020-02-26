<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Laravel #23 : Relasi One To One Eloquent</title>
	<link rel="stylesheet" type="text/css" href="/css/app.css">
</head>
<body>
 
	<div class="container">
		<div class="card mt-5">
			<div class="card-body">
				<h5 class="text-center my-4">Eloquent One To One Relationship</h5>
				<table class="table table-bordered table-striped">
					<thead>
						<tr>
							<th>Pengguna</th>
							<th>Nomor Telepon</th>
						</tr>
					</thead>
					<tbody>
						@foreach($customer as $c)
						<tr>
							<td>{{ $c->name }}</td>
							<td>{{ $c->phone->phone_number }}</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
 
</body>
</html>