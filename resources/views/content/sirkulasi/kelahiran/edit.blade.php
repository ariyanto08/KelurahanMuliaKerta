<x-app>
    <div class="row">
        <div class="col-md-12 mt-5">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">
                        Edit Data Kelahiran
                    </div>
                </div>
                <div class="card-body">
                    <form method="post" action="{{ url('admin/kelahiran', $kelahiran->id_lahir) }}">
                        @csrf
                        @method('PUT')
                        <x-layout.form.edit type="text" name="nama" ket="Nama Bayi"
                            value="{{ $kelahiran->nama }}" />
                        <x-layout.form.edit type="text" name="anakke" ket="Anak Ke-"
                            value="{{ $kelahiran->anakke }}" />
                        <x-layout.form.edit type="text" name="alamat" ket="alamat Bayi"
                            value="{{ $kelahiran->alamat }}" />
                        <x-layout.form.edit type="text" name="tempat_lh" ket="Tempat Lahir"
                            value="{{ $kelahiran->tempat_lh }}" />
                        <x-layout.form.edit type="date" name="tgl_lh" ket="Tanggal Lahir"
                            value="{{ $kelahiran->tgl_lh }}" />
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Jenis Kelamin</label>
                            <div class="col-sm-6">
                                <select class="form-control select2" style="width: 100%;" name="jekel">
                                    <option selected="selected">{{ $kelahiran->jekel }}</option>
                                    <option value="Laki-Laki">LK</option>
                                    <option value="Perempuan">PR</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Keluarga</label>
                            <div class="col-sm-6">
                                <select class="form-control select2" style="width: 100%;" name="no_kk">
                                    @foreach ($list_keluarga as $keluarga)
                                        <option @if ($keluarga->no_kk == $kelahiran->no_kk) selected @endif
                                            value="{{ $keluarga->no_kk }}">{{ $keluarga->no_kk }}</option>
                                    @endforeach
                                </select>
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
