<x-app>
    <div class="row">
        <div class="col-md-12 px-5 mt-5">
            <div class="card mt-2">
                <x-button.add url="admin/kematian/create" ket="Data Kematian" />
                <div class="card-body">
                    <table id="datatable" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>NIK</th>
                                <th>Nama</th>
                                <th>Tanggal</th>
                                <th>Sebab</th>
                                <th>Hari Meninggal</th>
                                <th>Tempat Meninggal</th>
                                <th>Tempat Makam</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($list_kematian as $kematian)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $kematian->penduduk->nik }}</td>
                                    <td>{{ $kematian->penduduk->nama }}</td>
                                    <td>{{ $kematian->tgl_mendu }}</td>
                                    <td>{{ $kematian->sebab }}</td>
                                    <td>{{ $kematian->hari_mati }}</td>
                                    <td>{{ $kematian->tempat_mati }}</td>
                                    <td>{{ $kematian->tempat_makam }}</td>
                                    <td>
                                        <div class="btn-group">
                                            <x-button.edit url="admin/kematian" id="{{ $kematian->id_mendu }}" />
                                            <x-button.delete url="admin/kematian" id="{{ $kematian->id_mendu }}" />
                                            <a target="_blank" href="{{ url('admin/su-mati', $kematian->id_mendu) }}" class="btn btn-primary">Cetak Surat</a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app>
