@extends("layout.ceria")

@section("isikonten")

	<h3>Edit Ikan</h3>

	<a href="/ikan" class="btn btn-warning"> Kembali</a>

	<br/>
	<br/>

	@foreach($ikan as $p)
	<form action="/ikan/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $p->kodeikan }}"> <br/>
		kode ikan <input class="form-control" type="text" required="required" name="kodeikan" value="{{ $p->kodeikan }}"> <br/>
		nama ikan <input class="form-control" type="text" required="required" name="namaikan" value="{{ $p->namaikan }}"> <br/>
		stock <input class="form-control" type="number" required="required" name="jumlah" value="{{ $p->jumlahikan }}"> <br/>
        <div class="mb-3">
            <label class="form-label">Ketersediaan</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" id="Tersedia" name="tersedia" value="T" required>
                <label class="form-check-label" for="Tersedia">
                 TERSEDIA
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input"  type="radio" id="Kosong" name="tersedia" value="K" checked="checked" required>
                <label class="form-check-label" for="Kosong">
                  KOSONG
                </label>
              </div>
            </div>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach

    @endsection
