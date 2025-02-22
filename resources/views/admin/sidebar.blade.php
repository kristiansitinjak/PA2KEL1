<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Components
    </div>

    <!-- Nav Item - Laporan Keuangan -->
    <li class="nav-item">
    <a class="nav-link" href="{{ route('keuangan.index') }}">
        <i class="fas fa-fw fa-file-invoice-dollar"></i>
        <span>Daftar Laporan</span>
    </a>
</li>

<li class="nav-item">
    <a class="nav-link" href="{{ route('keuangan.create') }}">
        <i class="fas fa-fw fa-plus-circle"></i>
        <span>Tambah Laporan</span>
    </a>
</li>
<!-- Nav Item - Manajemen Berita -->
<li class="nav-item">
    <a class="nav-link" href="{{ route('admin.news.index') }}">
        <i class="fas fa-fw fa-newspaper"></i>
        <span>Daftar Berita</span>
    </a>
</li>

<li class="nav-item">
    <a class="nav-link" href="{{ route('admin.news.create') }}">
        <i class="fas fa-fw fa-plus-square"></i>
        <span>Tambah Berita</span>
    </a>
</li>

<li class="nav-item">
    <a class="nav-link" href="{{ route('admin.members.index') }}">
        <i class="fas fa-fw fa-plus-square"></i>
        <span>Manajemen Anggota</span>
    </a>
</li>


    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>



    <li class="text-center mt-3">
    <a href="{{ url('/home') }}" class="btn btn-primary btn-lg" style="background-color: #007bff; color: white; border-radius: 8px; padding: 10px 20px;">
        🏠 Kembali ke Home
    </a>
</li>


</ul>

<!-- End of Sidebar -->
