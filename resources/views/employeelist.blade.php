<!DOCTYPE html>
<html>
<head>
	<title>Employee List</title>
</head>
<body>
 
	<h1>Tutorial Laravel</h1>
	<p>Nama : {{ $name }}</p>
	<p>Kemampuan</p>
	<ul>
 
		@foreach($skills as $s)
 
		<li>{{ $s }}</li>
 
		@endforeach
		
	</ul>
</body>

</html>