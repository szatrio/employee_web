<html>
<head>
	<title>Tutorial Laravel</title>
</head>
<body>
 
	<form action="/form/process" method="post">
		<input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">
      
      	Nama :
		<input type="text" name="name"> <br/>
		Alamat :
		<input type="text" name="address"> <br/>
		<input type="submit" value="Simpan">
	</form>
 
</body>
</html>