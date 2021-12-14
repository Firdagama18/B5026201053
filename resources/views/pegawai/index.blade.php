@extends('layout.ceria')

@section('isikonten')

	<a href="/pegawai/tambah" class="btn btn-primary"> Tambah Pegawai Baru</a>

	<br/>
	<br/>
    <div class="container">
        <p>Cari Data Pegawai :</p>
        <form action="/pegawai/cari" method="GET">
            <input type="text" name="cari" placeholder="Cari Pegawai .." value="{{ old('cari') }}">
		    <input class="btn btn-success" type="submit" value="CARI">
        </form>
    </div>

	<table class="table table-success table-striped mt-3">
		<tr>
            <th>NO</th>
			<th>Nama</th>
			<th>Alamat</th>
			<th>Opsi</th>
		</tr>
		@foreach($pegawai as $p)
		<tr>
            <td>{{ $loop->iteration }}</td>
			<td>{{ $p->pegawai_nama }}</td>
			<td>{{ $p->pegawai_alamat }}</td>
			<td>
                <a href="/pegawai/detail/{{ $p->pegawai_id }}" class="btn btn-info btn-sm">Detail</a>
				<a href="/pegawai/edit/{{ $p->pegawai_id }}" class="btn btn-warning btn-sm">Edit</a>
				<a href="/pegawai/hapus/{{ $p->pegawai_id }}" class="btn btn-danger btn-sm">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
    {{ $pegawai->links() }}
    @endsection

