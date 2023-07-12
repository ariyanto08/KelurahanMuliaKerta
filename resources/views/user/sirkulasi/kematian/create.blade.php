<x-app>
    <div class="row">
        <div class="col-md-12 mt-5">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">
                        Tambah Data Kematian
                    </div>
                </div>
                <div class="card-body">
                    <form method="post" action="{{ url('user/kematian') }}">
                        @csrf
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Penduduk</label>
                            <div class="col-sm-6">
                                <select class="form-control select2" style="width: 100%;" name="nik">
                                    <option selected="selected">-Pilih-</option>
                                    @foreach ($penduduk->where('status', '1') as $penduduk)
                                    <option value="{{$penduduk->nik}}"> {{$penduduk->nik}}-{{$penduduk->nama}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <x-layout.form.input type="date" name="tgl_mendu" ket="Tanggal Kematian" />
                        <x-layout.form.input type="text" name="sebab" ket="Penyebab Kematian" />
                        <x-layout.form.input type="text" name="hari_mati" ket="Hari Meninggal" />
                        <x-layout.form.input type="text" name="tempat_mati" ket="Tempat Meninggal" />
                        <x-layout.form.input type="text" name="tempat_makam" ket="Tempat Makam" />

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
