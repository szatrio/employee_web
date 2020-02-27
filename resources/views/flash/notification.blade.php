<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
 
	<title>Satrio Utomo</title>
	<link rel="stylesheet" type="text/css" href="/css/app.css">
 
</head>
<body>
	
	<div class="container mt-5">
		<div class="row">
			<div class="col-md-12">
 
				<center>
					<h2>Tutorial Laravel #33 : Notifikasi Dengan Session Laravel</h2>
				</center>
 
				@if ($message = Session::get('success'))
				<div class="alert alert-success alert-block">
					<button type="button" class="close" data-dismiss="alert">×</button> 
					<strong>{{ $message }}</strong>
				</div>
				@endif
 
				@if ($message = Session::get('failed'))
				<div class="alert alert-danger alert-block">
					<button type="button" class="close" data-dismiss="alert">×</button> 
					<strong>{{ $message }}</strong>
				</div>
				@endif
 
				@if ($message = Session::get('warning'))
				<div class="alert alert-warning alert-block">
					<button type="button" class="close" data-dismiss="alert">×</button> 
					<strong>{{ $message }}</strong>
				</div>
				@endif
 
 
				<center>
                <a href="/message/success" class="btn btn-success">NOTIFIKASI SUKSES</a>
				<a href="/message/failed" class="btn btn-danger">NOTIFIKASI GAGAL</a>
				<a href="/message/warning" class="btn btn-warning">NOTIFIKASI PERINGATAN</a>
				</center>
			</div>
		</div>
	</div>
 
	<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>