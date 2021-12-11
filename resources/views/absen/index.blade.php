
    @extends('layout.ceria')

    @section('isikonten')
    <a href="/absen/tambah" class="btn btn-success mb-3">Tambah Data </a>
    <table class="table table-success table-striped">
        <tr>
            <th>Nama Pegawai</th>
            <th>Tanggal</th>
            <th>Status</th>
            <th>Opsi</th>
        </tr>
        @foreach ($absen as $a )
        <tr>
            <td>{{$a -> pegawai_nama }}</td>
            <td>{{$a -> Tanggal }}</td>
            <td>{{$a -> status }}</td>
            <td>
                <a href="/absen/edit/{{$a ->ID}}" class="btn btn-warning">Edit</a>
                <a href="/absen/hapus/{{$a ->ID}}" class="btn btn-danger">Hapus</a>
            </td>
        </tr>
        @endforeach
    </table>
    {{ $absen->links() }}
    @endsection
