<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="{{ url('public/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">ADMIN LTE</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ url('public/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Laman Admin</a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                    aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <x-layout.sidebar.menu-item label="Dashboard" icon="fas fa-th" url="admin/dashboard" />
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-cogs"></i>
                        <p>
                            Sirkulasi Penduduk
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <x-layout.sidebar.menu-item label="Data Lahir" icon="far fa-circle" url="admin/kelahiran" />
                        <x-layout.sidebar.menu-item label="Data Meninggal" icon="far fa-circle" url="admin/kematian" />
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-file"></i>
                        <p>
                            Kelola Surat
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <x-layout.sidebar.menu-item label="Su-Ket Lahir" icon="far fa-circle" url="admin/lahir" />
                        <x-layout.sidebar.menu-item label="Su-Ket Meninggal" icon="far fa-circle" url="admin/mati" />
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-folder-open"></i>
                        <p>
                            Kelola Data
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <x-layout.sidebar.menu-item label="Data Penduduk" icon="far fa-circle" url="admin/penduduk" />
                        <x-layout.sidebar.menu-item label="Data Kartu Keluarga" icon="far fa-circle"
                            url="admin/keluarga" />
                    </ul>
                </li>
                <li class="nav-header">Setting</li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fas fa-users"></i>
                        <p>
                            Pengguna Sistem
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <x-layout.sidebar.menu-item label="Admin" icon="fas fa-user" url="admin/admin" />
                        <x-layout.sidebar.menu-item label="User" icon="fas fa-user" url="admin/user" />
                    </ul>
                </li>
                <x-layout.sidebar.menu-item label="Log-out" icon="fas fa-sign-out-alt" url="logout" />
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
