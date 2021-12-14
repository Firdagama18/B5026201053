@extends('layout.ceria')

@section('isikonten')

	<a href="/nilaikuliah/tambah" class="btn btn-primary"> Tambah Nilai Kuliah Baru</a>

	<br/>
	<br/>
    <div class="container">
        <p>Cari Nilai Kuliah :</p>
        <form action="/nilaikuliah/cari" method="GET">
            <input type="text" name="cari" placeholder="Cari Nilai Kuliah .." value="{{ old('cari') }}">
		    <input class="btn btn-success" type="submit" value="CARI">
        </form>
    </div>

	<table class="table table-success table-striped mt-3">
		<tr>
			<th>NRP</th>
			<th>Nilai Angka</th>
			<th>SKS</th>
            <th>Nilai Huruf</th>
            <th>Bobot</th>
		</tr>
		@foreach($nilaikuliah as $p)
		<tr>
           @php
               $predikat = '';
           @endphp
            <td>{{ $p->ID }}</td>
			<td>{{ $p->NRP }}</td>
			<td>{{ $p->NilaiAngka }}</td>
            <td>{{ $p->SKS }}</td>
            <td>
                @php
                    if($p->NilaiAngka <= 40){
                        $predikat = 'D';
                    }
                @endphp
                {{$predikat}}
            </td>
            <td>{{ $p->NilaiAngka * $p->SKS }}</td>
		</tr>
		@endforeach
	</table>



@endsection

