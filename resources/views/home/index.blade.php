<x-app>
    <div class="row">
        <div class="col-lg-3 col-6 mt-4">
            <!-- small card -->
            <div class="small-box bg-info">
                <div class="inner">
                    <h3>{{$penduduk}}</h3>
                    <p>Data Penduduk</p>
                </div>
                <div class="icon">
                    <i class="fas fa-user"></i>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-6 mt-4">
            <!-- small card -->
            <div class="small-box bg-success">
                <div class="inner">
                    <h3>{{$keluarga}}</h3>
                    <p>Kartu Keluarga</p>
                </div>
                <div class="icon">
                    <i class="fas fa-address-card"></i>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-6 mt-4">
            <!-- small card -->
            <div class="small-box bg-warning">
                <div class="inner">
                    <h3>{{$kematian}}</h3>
                    <p>Data Kematian</p>
                </div>
                <div class="icon">
                    <i class="fas fa-chart-line"></i>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-6 mt-4">
            <!-- small card -->
            <div class="small-box bg-danger">
                <div class="inner">
                    <h3>{{$kelahiran}}</h3>
                    <p>Data Kelahiran</p>
                </div>
                <div class="icon">
                    <i class="fas fa-chart-bar"></i>
                </div>
            </div>
        </div>
    </div>
</x-app>
