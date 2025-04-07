<!-- Sidebar -->
<nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
    <div class="sb-sidenav-menu">
        <div class="nav">
            <!-- Dashboard -->
            <div class="sb-sidenav-menu-heading">Dashboard</div>
            <a class="nav-link" href="{{ url('/admin2/layout/home') }}">
                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                Dashboard
            </a>

            <!-- Manajemen Mahasiswa -->
            <div class="sb-sidenav-menu-heading">Management</div>
            <a class="nav-link" href="{{ route('admin2.mahasiswa.index') }}">
                <div class="sb-nav-link-icon"><i class="fas fa-user-check"></i></div>
                Verifikasi Mahasiswa
            </a>

            <!-- 📌 KATEGORI: VERIFIKASI PROPOSAL -->
            <div class="sb-sidenav-menu-heading">Proposal</div>
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseProposals"
                aria-expanded="true" aria-controls="collapseProposals">
                <div class="sb-nav-link-icon"><i class="fas fa-file-alt"></i></div>
                Proposal Kegiatan
            </a>
            <div id="collapseProposals" class="collapse" aria-labelledby="headingProposals" data-parent="#sidenavAccordion">
                <nav class="sb-sidenav-menu-nested nav">
                    <a class="nav-link" href="{{ route('admin2.proposals.index') }}">
                        <i class="fas fa-list"></i> Daftar Proposal
                    </a>
                    <a class="nav-link" href="{{ route('admin2.proposals.pending') }}">
                        <i class="fas fa-hourglass-half"></i> Proposal Menunggu Persetujuan
                    </a>
                    <a class="nav-link" href="{{ route('admin2.proposals.approved') }}">
                        <i class="fas fa-check-circle"></i> Proposal Disetujui
                    </a>
                    <a class="nav-link" href="{{ route('admin2.proposals.rejected') }}">
                        <i class="fas fa-times-circle"></i> Proposal Ditolak
                    </a>
                </nav>
            </div>

        </div>
    </div>
</nav>
