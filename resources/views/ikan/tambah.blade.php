@extends("layout.ceria")

@section("isikonten")

	<h3>Data Ikan</h3>

	<a href="/ikan" class="btn btn-warning"> Kembali</a>

	<br/>
	<br/>

	<form action="/ikan/store" method="post">
		{{ csrf_field() }}
		kode ikan <input class="form-control" type="text" name="kodeikan" required="required"> <br/>
		nama ikan <input class="form-control" type="text" name="namaikan" required="required"> <br/>
		jumlah ikan<input class="form-control" type="number" name="jumlah" required="required"> <br/>
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

    @endsection
