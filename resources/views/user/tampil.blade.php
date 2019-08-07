<!DOCTYPE html>
<html>
<head>
	<title>Tampil Data User</title>
</head>
<body>
		<center><h1>Data User</h1></center>


		<a href="/user/tambah"> + Tambah User Baru</a>
		<table border="1">
			<tr>
				<th>Username</th>
				<th>Nama</th>
				<th>Alamat</th>
				<th>No Hp</th>
				<th>Email</th>
			</tr>

			@foreach($user as $u)
			<tr>
				<td>{{ $u->username }}</td>
				<td>{{ $u->nama }}</td>
				<td>{{ $u->alamat }}</td>
				<td>{{ $u->no_hp }}</td>
				<td>{{ $u->email }}</td>
				<td><a href="/user/edit/{{ $u->id_user }}">Edit</a>
					|
					<a href="/user/delete/{{ $u->id_user }}">Hapus</a>
				</td>
			</tr>
			@endforeach
		</table>
</body>
</html>