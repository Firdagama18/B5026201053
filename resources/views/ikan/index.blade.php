@extends("layout.ceria")
@section("isikonten")

	<h1>Data ikan</h1>

	<a href="/ikan/tambah" class="btn btn-primary"> + Tambah Ikan Baru</a>

	<br/>
	<br/>

    <p>Cari Jenis Ikan :</p>
	<form action="/ikan/cari" method="GET">
		<input type="text" name="cari" placeholder="Cari Jenis Ikan .." value="{{ old('cari') }}">
		<input class="btn btn-success" type="submit" value="CARI">
	</form>

	<table class="table table-success table-striped">
        	<tr>
            <th>No</th>
			<th>Kode Ikan</th>
			<th>Nama Ikan</th>
			<th>Stock</th>
			<th>Ketersediaan</th>
            <th>Opsi</th>

		</tr>
		@foreach($ikan as $p)
		<tr>
            <td>{{ $loop->iteration }}</td>
			<td>{{ $p->kodeikan }}</td>
			<td>{{ $p->namaikan }}</td>
			<td>{{ $p->jumlahikan }}</td>
			<td>{{ $p->tersedia }}</td>
			<td>
                <a href="/ikan/detail/{{ $p->kodeikan }}" class="btn btn-primary">Detail</a>
				<a href="/ikan/edit/{{ $p->kodeikan}}" class="btn btn-warning">Edit</a>
				<a href="/sandal/hapus/{{ $p->kodeikan }}" class="btn btn-danger">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>

    {{ $ikan->links()  }}

    @endsection
