<x-app>
    <div class="row">
        <div class="col-md-12 px-5 mt-5">
            <div class="card mt-2">
                <x-button.add url="admin/create" ket="Data Pengguna" />
                <div class="card-body">
                    <table id="datatable" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Username</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($list_admin as $admin)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $admin->username }}</td>
                                    <td>
                                        <div class="btn-group">
                                            <x-button.edit url="admin/admin" id="{{ $admin->id_pengguna }}" />
                                            <x-button.delete url="admin/admin" id="{{ $admin->id_pengguna }}" />
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
