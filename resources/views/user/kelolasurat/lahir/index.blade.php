<x-appuser>
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">
                <i class="fa fa-file"></i> Su-Ket Lahir
            </h3>
        </div>
        <form target="_blank" action="su-lahir" enctype="multipart/form-data">
            <div class="card-body">
                <div class="row">
                    <label>Data Anak</label>
                    <input class="form-control" type="text" list="list_lahir" style="width: 100%;" name="nik"
                        onkeyup="cekId(this.value)">
                    <datalist id=list_lahir>
                        @foreach ($list_lahir as $lahir)
                            <option value="{{ $lahir->nama }}">
                                {{ $lahir->no_kk }}
                            </option>
                        @endforeach
                    </datalist>
                    <label>Tanggal Surat</label>
                    <input type="text" name="tanggalsurat" class="form-control" placeholder="Misal : 10 Juni 2021">
                </div>
            </div>
            <div class="card-footer">
                <input type="submit" name="su-lahir" value="Cetak" class="btn btn-info">
            </div>
        </form>
    </div>
</x-appuser>
