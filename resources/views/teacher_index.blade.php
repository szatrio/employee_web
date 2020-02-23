<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Laravel #20 : Eloquent Laravel</title>
    <link rel="stylesheet" type="text/css" href="/css/app.css">
</head>
<body>
 
<h1>Data Guru</h1>
 
<ul>
	@foreach($teacher as $t)
		<li>{{ "Nama : ". $t->name . ' | Alamat : ' . $t->address }}</li>
	@endforeach
</ul>
 
</body>
</html>