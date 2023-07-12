<x-app>
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">
                <i class="fa fa-file"></i> Su-Ket Kematian
            </h3>
        </div>
        <form target="_blank" action="su-mati" enctype="multipart/form-data">
            <div class="card-body">
                <div class="row">
                    <label>Data Penduduk Meninggal</label>
                    <input class="form-control" type="text" list="list_kematian" style="width: 100%;"
                        onkeyup="cekId(this.value)">
                    <datalist id=list_kematian>
                        @foreach ($list_penduduk->where('status','2') as $penduduk)
                            <option value="{{ $penduduk->nama }}">
                                {{ $penduduk->nik }}
                            </option>
                        @endforeach
                    </datalist>
                    <label>Nama Lengkap Pelapor</label>
                    <input type="text" name="nama_pelapor" class="form-control" placeholder="Nama Lengkap">
                    <label>NIK Pelapor</label>
                    <input type="text" name="nik_pelapor" class="form-control" placeholder="NIK">
                    <label>Tempat Lahir Pelapor</label>
                    <input type="text" name="tmp_lh_pelapor" class="form-control" placeholder="Tempat Lahir">
                    <label>Tanggal Lahir Pelapor</label>
                    <input type="date" name="tgl_lh_pelapor" class="form-control" placeholder="Tanggal Lahir">
                    <label>Pekerjaan Pelapor</label>
                    <input type="text" name="pekerjaan_pelapor" class="form-control" placeholder="Pekerjaan">
                    <label>Alamat Pelapor</label>
                    <input type="text" name="alamat_pelapor" class="form-control" placeholder="Alamat">
                    <label>Hubungan Pelapor</label>
                    <input type="text" name="hub_pelapor" class="form-control" placeholder="Hubungan">
                    <label>Tanggal Surat</label>
                    <input type="text" name="tgl_sur" class="form-control" placeholder="Misal : 10 Juni 2020">
                </div>
            </div>
            <div class="card-footer">

                <input type="submit" name="su-mati" value="Cetak" class="btn btn-info">
            </div>
        </form>
    </div>
</x-app>
