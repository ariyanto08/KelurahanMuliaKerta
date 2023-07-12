<x-appuser>
    <div class="row">
        <div class="col-md-12 px-5 mt-5">
            <div class="card mt-2">
                <x-button.add url="user/kelahiran/create" ket="Data Kelahiran" />
                <div class="card-body">
                    <table id="datatable" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Tgl Lahir</th>
                                <th>Jenis Kelamin</th>
                                <th>Keluarga</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($list_kelahiran as $kelahiran)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $kelahiran->nama }}</td>
                                    <td>{{ $kelahiran->tgl_lh }}</td>
                                    <td>{{ $kelahiran->jekel }}</td>
                                    <td>{{ $kelahiran->no_kk }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-appuser>
