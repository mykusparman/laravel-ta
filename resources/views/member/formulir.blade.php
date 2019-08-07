<!DOCTYPE html>
<html>
<head>
	<title>Form Login</title>
</head>
<body>
	<h5><center>Daftar Member</center></h5>

		<form action="/formulir/proses" method="post">
		<input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">
      
      	Nama :
		<input type="text" name="nama"> <br/>
		Alamat :
		<input type="text" name="alamat"> <br/>
		
		<input type="submit" value="Simpan">
	</form></body>
</html>