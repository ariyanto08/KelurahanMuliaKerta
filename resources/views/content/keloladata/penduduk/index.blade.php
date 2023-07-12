<x-app>
    <div class="row">
        <div class="col-md-12 px-5 mt-5">
            <div class="card mt-2">
                <x-button.add url="admin/penduduk/create" ket="Data Penduduk" />
                <div class="card-body">
                    <table id="datatable" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>NIK</th>
                                <th>Nama</th>
                                <th>JK</th>
                                <th>Alamat</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($list_penduduk->where('status', '1') as $penduduk)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $penduduk->nik }}</td>
                                    <td>{{ $penduduk->nama }}</td>
                                    <td>{{ $penduduk->jekel }}</td>
                                    <td>{{ $penduduk->desa }}-RT {{ $penduduk->rt }}/RW {{ $penduduk->rw }}</td>
                                    <td>
                                        <div class="btn-group">
                                            <x-button.show url="admin/penduduk" id="{{ $penduduk->nik }}" />
                                            <x-button.edit url="admin/penduduk" id="{{ $penduduk->nik }}" />
                                            <x-button.delete url="admin/penduduk" id="{{ $penduduk->nik }}" />
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
