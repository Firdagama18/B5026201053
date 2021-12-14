@extends('layout.ceria')

@section('isikonten')

	<a href="/nilaikuliah" class="btn btn-secondary"> Kembali</a>

	<br/>
	<br/>

	<form action="/nilaikuliah/store" method="post">

		{{ csrf_field() }}
		NRP <input class="form-control" type="text" name="NRP" required="required"> <br/>
		Nilai Angka <input class="form-control" type="number" name="NilaiAngka" required="required"> <br/>
		SKS <textarea class="form-control" name="SKS" required="required"></textarea> <br/>
		<input type="submit" value="Simpan Data">
	</form>
@endsection
