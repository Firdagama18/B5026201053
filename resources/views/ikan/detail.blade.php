@extends('layout.ceria')

@section('isikonten')

    <h1 class="text-center">Data Ikan</h1>
 <a href="/ikan" class="btn btn-warning" >Kembali</a>
 <br/>
 <br/>
 <div class="row text-center">
        <div class="col-md-8">
            <table class="table table-success table-striped table-hover">
                <th>
                    <tr>
                        <td>Kode Ikan</td>
                        <td>{{ $ikan->kodeikan }}</td>

                    </tr>
                    <tr>
                        <td>Nama Ikan</td>
                        <td>{{ $ikan->namaikan }}</td>
                    </tr>
                    <tr>
                        <td>Jumlah IkanS</td>
                        <td>{{ $ikan->jumlahikan }}</td>
                    </tr>
                    <tr>
                        <td>Ketersediaan</td>
                        <td>{{$ikan->tersedia}}</td>
                    </tr>
                </th>
            </table>
        </div>
    </div>
    @endsection
