@extends('layout.ceria')

@section('isikonten')

	<a href="/pegawai" class="btn btn-secondary" > Kembali</a>

	<br/>
	<br/>

	@foreach($pegawai as $p)
	<form action="/pegawai/update" method="post">
		<input class="form-control" type="hidden" name="id" value="{{ $p->pegawai_id }}"> <br/>
		Nama <input readonly class="form-control" type="text" required="required" name="nama" value="{{ $p->pegawai_nama }}"> <br/>
		Jabatan <input readonly class="form-control" type="text" required="required" name="jabatan" value="{{ $p->pegawai_jabatan }}"> <br/>
		Umur <input readonly class="form-control" type="number" required="required" name="umur" value="{{ $p->pegawai_umur }}"> <br/>
		Alamat <textarea  readonly class="form-control" required="required" name="alamat">{{ $p->pegawai_alamat }}</textarea> <br/>

	</form>
	@endforeach
    @endsection
