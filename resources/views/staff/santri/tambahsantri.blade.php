<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>
<body>
	<h3>Data Santri</h3>
 
	<a href="/santri"> Kembali</a>
	
	<br/>
	<br/>
 
	<form action="/santri/store" method="post">
		{{ csrf_field() }}
		Nama <input type="text" name="nama"> <br/>
		Jabatan <input type="text" name="jabatan"> <br/>
		Umur <input type="number" name="umur"> <br/>
		Alamat <textarea name="alamat"></textarea> <br/>
		<input type="submit" value="Simpan Data">
	</form>
		
 
 
</body>
</html>