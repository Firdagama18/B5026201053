<!DOCTYPE html>
<html>
<head>
	<title>ABSEN PEGAWAI</title>
</head>
<body>

	<h3>Data Pegawai</h3>

	<a href="/absen/tambah"> + Tambah Absen Pegawai Baru</a>

	<br/>
	<br/>

	<table border="1">
		<tr>
			<th>ID</th>
			<th>ID Pegawai</th>
			<th>Tanggal</th>
			<th>Status</th>
			<th>Opsi</th>
		</tr>
		@foreach($absen as $p)
		<tr>
			<td>{{ $p->ID }}</td>
			<td>{{ $p->IDPegawai }}</td>
			<td>{{ $p->Tanggal }}</td>
			<td>{{ $p->Status }}</td>
			<td>
				<a href="/absen/edit/{{ $p->ID }}">Edit</a>
				|
				<a href="/absen/hapus/{{ $p->ID }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>


</body>
</html>
