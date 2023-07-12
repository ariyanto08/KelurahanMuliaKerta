<x-app>
    <div class="row">
        <div class="col-md-12 mt-5">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">
                        Tambah Data Kartu Keluarga
                    </div>
                </div>
                <div class="card-body">
                    <form method="post" action="{{ url('admin/keluarga') }}">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" class="control-label">No KK</label>
                                    <input type="text" name="no_kk" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" class="control-label">Kepala Keluarga</label>
                                    <input class="form-control" type="text" list="list_penduduk"
                                            style="width: 100%;" name="nik" onkeyup="cekId(this.value)">
                                        <datalist id=list_penduduk>
                                            @foreach ($list_penduduk->where('status', '1') as $penduduk)
                                                <option value="{{ $penduduk->nik }}">
                                                    {{ $penduduk->nik }},{{ $penduduk->nama }}
                                                </option>
                                            @endforeach
                                        </datalist>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" class="control-label">Desa</label>
                                    <input type="text" name="desa" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="" class="control-label">RT</label>
                                    <input type="text" name="rt" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="" class="control-label">RW</label>
                                    <input type="text" name="rw" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" class="control-label">Kecamatan</label>
                                    <input type="text" name="kec" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" class="control-label">Kabupaten</label>
                                    <input type="text" name="kab" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="" class="control-label">Provinsi</label>
                                    <input type="text" name="prov" class="form-control">
                                </div>
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
