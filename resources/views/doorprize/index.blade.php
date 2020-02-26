<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Laravel #25 : Relasi Many To Many Eloquent</title>
	<link rel="stylesheet" type="text/css" href="/css/app.css">
</head>
<body>
 
	<div class="container">
		<div class="card mt-5">
			<div class="card-body">
				<h5 class="text-center my-4">Eloquent Many To Many Relationship</h5>
				<table class="table table-bordered table-striped">
					<thead>
						<tr>
							<th>Nama Pengguna</th>
							<th>Hadiah</th>
							<th width="1%">Jumlah</th>
						</tr>
					</thead>
					<tbody>
						@foreach($member as $m)
						<tr>
							<td>{{ $m->name }}</td>
							<td>
								<ul>
									@foreach($m->prize as $p)
									<li> {{ $p->prize_name }} </li>
									@endforeach
								</ul>
							</td>
							<td class="text-center">{{ $m->prize->count() }}</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
 
</body>
</html>