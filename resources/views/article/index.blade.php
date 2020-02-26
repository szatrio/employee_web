<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Laravel #24 : Relasi One To Many Eloquent</title>
	<link rel="stylesheet" type="text/css" href="/css/app.css">
</head>
<body>
 
	<div class="container">
		<div class="card mt-5">
			<div class="card-body">
				
				<h5 class="text-center my-4">Eloquent One To Many Relationship</h5>
				<table class="table table-bordered table-striped">
					<thead>
						<tr>
							<th>Judul Article</th>
							<th>Tag</th>
							<th width="15%" class="text-center">Jumlah Tag</th>
						</tr>
					</thead>
					<tbody>
						@foreach($article as $a)
						<tr>
							<td>{{ $a->title }}</td>
							<td>
								@foreach($a->tagar as $t)
									{{$t->tag}},
								@endforeach
							</td>
							<td class="text-center">{{ $a->tagar->count() }}</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
 
</body>
</html>