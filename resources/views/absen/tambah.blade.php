<!DOCTYPE html>
<html>
<head>
	<title>ABSEN PEGAWAI</title>
</head>
<body class="container m-4">

	<h2><a href="https://www.malasngoding.com"></a></h2>
	<h3>Absen Pegawai</h3>

	<a href="/absen"> Kembali</a>

	<br/>
	<br/>

	<form action="/absen/store" method="post">
		{{ csrf_field() }}
		ID <input type="number" name="ID" required="required"> <br/>
		IDPegawai <input type="number" name="IDPegawai" required="required"> <br/>
		Tanggal <input type="datetime" name="tanggal" required="required"> <br/>
		Status <textarea name="status" required="required"></textarea> <br/>
		<input type="submit" value="Simpan Data">
	</form>

</body>
</html>
