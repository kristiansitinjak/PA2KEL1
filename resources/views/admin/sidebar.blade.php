<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">HIMATIF</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="#">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Status Pembayaran Mahasiswa -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePayments"
            aria-expanded="true" aria-controls="collapsePayments">
            <i class="fas fa-fw fa-money-check-alt"></i>
            <span>Status Pembayaran</span>
        </a>
        <div id="collapsePayments" class="collapse" aria-labelledby="headingPayments" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{ route('admin.payments.index') }}">
                    <i class="fas fa-list"></i> Daftar Pembayaran
                </a>
            </div>
        </div>
    </li>

    <!-- Financial Record -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFinancial"
            aria-expanded="true" aria-controls="collapseFinancial">
            <i class="fas fa-fw fa-coins"></i>
            <span>Financial Record</span>
        </a>
        <div id="collapseFinancial" class="collapse" aria-labelledby="headingFinancial" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{ route('admin.financial.index') }}">
                    <i class="fas fa-list"></i> Lihat Data Keuangan
                </a>
                <a class="collapse-item" href="{{ route('admin.financial.create') }}">
                    <i class="fas fa-plus-circle"></i> Tambah Pemasukan/Pengeluaran
                </a>
            </div>
        </div>
    </li>

    <!-- Manajemen Berita -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseNews"
            aria-expanded="true" aria-controls="collapseNews">
            <i class="fas fa-fw fa-newspaper"></i>
            <span>Manajemen Berita</span>
        </a>
        <div id="collapseNews" class="collapse" aria-labelledby="headingNews" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{ route('admin.news.index') }}">
                    <i class="fas fa-list"></i> Daftar Berita
                </a>
                <a class="collapse-item" href="{{ route('admin.news.create') }}">
                    <i class="fas fa-plus-square"></i> Tambah Berita
                </a>
            </div>
        </div>
    </li>

    <!-- Manajemen Anggota -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseMembers"
            aria-expanded="true" aria-controls="collapseMembers">
            <i class="fas fa-fw fa-users"></i>
            <span>Manajemen Anggota</span>
        </a>
        <div id="collapseMembers" class="collapse" aria-labelledby="headingMembers" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{ route('admin.members.index') }}">
                    <i class="fas fa-list"></i> Daftar Anggota
                </a>
                <a class="collapse-item" href="{{ route('admin.categories.index') }}">
                    <i class="fas fa-tags"></i> Kategori Anggota
                </a>
            </div>
        </div>
    </li>

    <!-- Manajemen Mahasiswa -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseMahasiswa"
            aria-expanded="true" aria-controls="collapseMahasiswa">
            <i class="fas fa-fw fa-user-graduate"></i>
            <span>Manajemen Mahasiswa</span>
        </a>
        <div id="collapseMahasiswa" class="collapse" aria-labelledby="headingMahasiswa" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{ route('admin.mahasiswa.index') }}">
                    <i class="fas fa-list"></i> Daftar Mahasiswa
                </a>
                <a class="collapse-item" href="{{ route('admin.mahasiswa.create') }}">
                    <i class="fas fa-user-plus"></i> Tambah Mahasiswa
                </a>
            </div>
        </div>
    </li>

    <!-- Proposal Kegiatan -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseProposals"
            aria-expanded="true" aria-controls="collapseProposals">
            <i class="fas fa-fw fa-file-alt"></i>
            <span>Proposal Kegiatan</span>
        </a>
        <div id="collapseProposals" class="collapse" aria-labelledby="headingProposals" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{ route('admin.proposals.index') }}">
                    <i class="fas fa-list"></i> Daftar Proposal
                </a>
                <a class="collapse-item" href="{{ route('admin.proposals.create') }}">
                    <i class="fas fa-plus-circle"></i> Tambah Proposal
                </a>
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

    <!-- Kembali ke Home -->
    <li class="text-center mt-3">
        <a href="{{ url('/home') }}" class="btn btn-primary btn-lg" style="background-color: #007bff; color: white; border-radius: 8px; padding: 10px 20px;">
            🏠 Kembali ke Home
        </a>
    </li>

</ul>
<!-- End of Sidebar -->
