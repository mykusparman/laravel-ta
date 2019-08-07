<!DOCTYPE html>
<html>
<head>
	<title>Tambah User</title>
</head>
<body>
	<center><h1>Tambah User</h1></center>

	<a href="/user/tampil"> <- Kembali</a>
	
	<br><br>

	<form action="/user/simpan" method="post">
		{{ csrf_field() }}
		Username <input type="text" name="username" required="required"> <br/>

		Password <input type="password" name="password" required="required"> <br/>

		Nama <input type="text" name="nama" required="required"> <br/>

		Alamat <textarea name="alamat" required="required"></textarea> <br/>

		No Telp <input type="number" name="no_hp" required="required"> <br/>
		
		Email <input type="text" name="email" required="required"> <br/>
		<input type="submit" value="Simpan Data">
		
	</form>
		
</body>
</html>