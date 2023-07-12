<x-appuser>
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">
                            Data Anggota Keluarga
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ url('user/anggota/store') }}">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="" class="control-label">No KK</label>
                                    <div class="form-group">
                                        <input name="no_kk" class="form-control" value="{{ $keluarga->no_kk }}"
                                            readonly>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="" class="control-label">Kepala Keluarga</label>
                                        <input type="nik" class="form-control" value="{{ $keluarga->nik }}-{{$keluarga->penduduk->nama}}"
                                            readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="" class="control-label">Alamat</label>
                                        <input type="text" class="form-control"
                                            value="Desa{{ $keluarga->desa }}, RT:{{ $keluarga->rt }}, RW:{{ $keluarga->rw }}"
                                            readonly>
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Anggota</label>
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
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Hubungan</label>
                                        <select class="form-control select2" style="width: 100%;" name="hubungan">
                                            <option value="Istri">Istri</option>
                                            <option value="Anak">Anak</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <x-button.save />
                                </div>
                            </div>

                        </form>

                    </div>
                </div>

            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <table id="datatable" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Kepala Keluarga</th>
                                    <th>Nama Anggota</th>
                                    <th>Hubungan Keluarga</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($list_anggota as $anggota)
                                    @if ($anggota->no_kk == $keluarga->no_kk)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $anggota->keluarga->penduduk->nama }}</td>
                                            <td>{{ $anggota->penduduk->nama }}</td>
                                            <td>{{ $anggota->hubungan }}</td>
                                        </tr>
                                    @endif
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-appuser>
