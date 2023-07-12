<x-app>
    <div class="row">
        <div class="col-md-12 mt-5">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">
                        Edit Data Kematian
                    </div>
                </div>
                <div class="card-body">
                    <form method="post" action="{{ url('admin/kematian', $kematian->id_mendu) }}">
                        @csrf
                        @method('PUT')
                        <x-layout.form.edit type="date" name="tgl_mendu"
                            value="{{ $kematian->tgl_mendu }}" />
                        <x-layout.form.edit type="text" name="sebab"
                            value="{{ $kematian->sebab }}" />
                        <x-layout.form.edit type="text" name="hari_mati"
                            value="{{ $kematian->hari_mati }}" />
                        <x-layout.form.edit type="text" name="tempat_mati"
                            value="{{ $kematian->tempat_mati }}" />
                        <x-layout.form.edit type="text" name="tempat_makam"
                            value="{{ $kematian->tempat_makam }}" />

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
