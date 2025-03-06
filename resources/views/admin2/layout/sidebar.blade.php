<!-- Sidebar -->
<nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
    <div class="sb-sidenav-menu">
        <div class="nav">
            <div class="sb-sidenav-menu-heading">Dashboard</div>
            <a class="nav-link" href="{{ url('/admin2/layout/home') }}">
                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                Dashboard
            </a>

            <div class="sb-sidenav-menu-heading">Management</div>
            <a class="nav-link" href="{{ route('admin2.mahasiswa.index') }}">
                <div class="sb-nav-link-icon"><i class="fas fa-user-check"></i></div>
                Verifikasi Mahasiswa
            </a>

        </div>
    </div>
</nav>
