<x-app>
    <div class="row">
        <div class="col-md-12 mt-5">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">
                        Edit Data Admin
                    </div>
                </div>
                <div class="card-body">
                    <form method="post" action="{{ url('admin/admin', $admin->id_pengguna) }}">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-6">
                                <x-layout.form.edit type="text" name="username" ket="Username"
                                    value="{{ $admin->username }}" />
                            </div>
                            <div class="col-md-6">
                                <x-layout.form.edit type="password" name="password" ket="Password"
                                    value="{{ $admin->password }}" />
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
