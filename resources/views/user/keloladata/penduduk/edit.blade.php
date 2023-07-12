<x-app>
    <div class="row">
        <div class="col-md-12 mt-5">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">
                        Edit Data Penduduk
                    </div>
                </div>
                <div class="card-body">
                    <form method="post" action="{{ url('admin/penduduk',$penduduk->nik) }}">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-6">
                                <x-layout.form.edit type="number" name="nik" ket="NIK" value="{{$penduduk->nik}}"/>
                            </div>
                            <div class="col-md-6">
                                <x-layout.form.edit type="text" name="nama" ket="Nama Lengkap" value="{{$penduduk->nama}}"/>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <x-layout.form.edit type="text" name="tempat_lh" ket="Tempat Lahir" value="{{$penduduk->tempat_lh}}"/>
                            </div>
                            <div class="col-md-6">
                                <x-layout.form.edit type="date" name="tgl_lh" ket="Tanggal Lahir" value="{{$penduduk->tgl_lh}}"/>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Jenis Kelamin</label>
                                    <select class="form-control select2" style="width: 100%;" name="jekel">
                                        <option selected="selected">{{$penduduk->jekel}}</option>
                                        <option value="Laki-Laki">Laki-Laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <x-layout.form.edit type="text" name="desa" ket="Alamat" value="{{$penduduk->desa}}"/>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <x-layout.form.edit type="number" name="rt" ket="RT" value="{{$penduduk->rt}}"/>
                            </div>
                            <div class="col-md-6">
                                <x-layout.form.edit type="number" name="rw" ket="RW" value="{{$penduduk->rw}}"/>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <x-layout.form.edit type="text" name="agama" ket="Agama" value="{{$penduduk->agama}}"/>
                            </div>
                            <div class="col-md-6">
                                <x-layout.form.edit type="text" name="kewarganegaraan" ket="Kewarganegaraan" value="{{$penduduk->kewarganegaraan}}"/>
                            </div>
                            <div class="col-md-6">
                                <x-layout.form.edit type="text" name="alamat" ket="Alamat" value="{{$penduduk->alamat}}"/>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Status</label>
                                    <select class="form-control select2" style="width: 100%;" name="status">
                                        <option selected="selected">{{$penduduk->status}}</option>
                                        <option value="Sudah Menikah">Sudah Menikah</option>
                                        <option value="Belum Menikah">Belum Menikah</option>
                                        <option value="Cerai Hidup">Cerai Hidup</option>
                                        <option value="Cerai Mati">Cerai Mati</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <x-layout.form.edit type="text" name="pekerjaan" ket="Pekerjaan" value="{{$penduduk->pekerjaan}}"/>
                            </div>
                        </div>
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
