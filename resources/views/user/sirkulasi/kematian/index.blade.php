<x-appuser>
    <div class="row">
        <div class="col-md-12 px-5 mt-5">
            <div class="card mt-2">
                <x-button.add url="user/kematian/create" ket="Data Kematian" />
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
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-appuser>
