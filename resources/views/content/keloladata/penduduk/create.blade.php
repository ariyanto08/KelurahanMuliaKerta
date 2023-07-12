<x-app>
    <div class="row">
        <div class="col-md-12 mt-5">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">
                        Tambah Data Penduduk
                    </div>
                </div>
                <div class="card-body">
                    <form method="post" action="{{ url('admin/penduduk') }}">
                        @csrf
                        <x-layout.form.input type="number" name="nik" ket="NIK" />
                        <x-layout.form.input type="text" name="nama" ket="Nama Lengkap" />
                        <x-layout.form.input type="text" name="tempat_lh" ket="Tempat Lahir" />
                        <x-layout.form.input type="date" name="tgl_lh" ket="Tanggal Lahir" />
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Jenis Kelamin</label>
                            <div class="col-sm-6">
                                <select class="form-control select2" style="width: 100%;" name="jekel">
                                    <option selected="selected">-Pilih-</option>
                                    <option value="Laki-Laki">LK</option>
                                    <option value="Perempuan">PR</option>
                                </select>
                            </div>
                        </div>
                        <x-layout.form.input type="text" name="desa" ket="Alamat" />
                        <x-layout.form.input type="number" name="rt" ket="RT" />
                        <x-layout.form.input type="number" name="rw" ket="RW" />
                        <x-layout.form.input type="text" name="agama" ket="Agama" />
                        <x-layout.form.input type="text" name="kewarganegaraan" ket="Kewarganegaraan" />
                        <x-layout.form.input type="text" name="alamat" ket="Alamat" />
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Status Nikah</label>
                            <div class="col-sm-6">
                                <select class="form-control select2" style="width: 100%;" name="kawin">
                                    <option selected="selected">-Pilih-</option>
                                    <option value="Sudah Menikah">Sudah Menikah</option>
                                    <option value="Belum Menikah">Belum Menikah</option>
                                    <option value="Cerai Hidup">Cerai Hidup</option>
                                    <option value="Cerai Mati">Cerai Mati</option>
                                </select>
                            </div>
                        </div>
                        <x-layout.form.input type="text" name="pekerjaan" ket="Pekerjaan" />
                        <div class="row">
                            <div class="col-md-12">
                                <x-button.save />
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app>
