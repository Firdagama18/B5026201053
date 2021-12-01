@extends('layout.ceria')

@section('isikonten')

	<a href="/pegawai" class="btn btn-secondary" > Kembali</a>

	<br/>
	<br/>

	@foreach($pegawai as $p)
	<form action="/pegawai/update" method="post">
		{{ csrf_field() }}
		<input class="form-control" type="hidden" name="id" value="{{ $p->pegawai_id }}"> <br/>
		Nama <input class="form-control" type="text" required="required" name="nama" value="{{ $p->pegawai_nama }}"> <br/>
		Jabatan <input class="form-control" type="text" required="required" name="jabatan" value="{{ $p->pegawai_jabatan }}"> <br/>
		Umur <input class="form-control" type="number" required="required" name="umur" value="{{ $p->pegawai_umur }}"> <br/>
		Alamat <textarea  class="form-control" required="required" name="alamat">{{ $p->pegawai_alamat }}</textarea> <br/>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach
    @endsection
