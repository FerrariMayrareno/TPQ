<html>
<head>
	<title>PENGURUS|Edit</title>
</head>
<body>
 
	<h2>Coba Edit</h2>
	<h3>Detail Peran</h3>
 
	<a href="/detailperan/tambah"> + Tambah Peran</a>
	
	<br/>
	<br/>
 
	<table border="1">
		<tr>
			<th>ID_santri</th>
		</tr>
		@foreach($user as $u)
		<tr>
            <td>{{ $s->IDSANTRI }}</td>
			<td>
				<a href="/santri/edit/{{ $U->IDSANTRI }}">Edit</a>
				|
				<a href="/santri/hapus/{{ $U->IDSANTRI}}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
 
 
</body>
</html>