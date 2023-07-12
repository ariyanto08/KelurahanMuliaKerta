<x-app>
    <div class="row">
        <div class="col-md-12 mt-5">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">
                        Tambah Pengguna
                    </div>
                </div>
                <div class="card-body">
                    <form method="post" action="{{ url('admin') }}">
                        @csrf
                        <x-layout.form.input type="text" name="username" ket="Username" />
                        <x-layout.form.input type="password" name="password" ket="Password" />
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
