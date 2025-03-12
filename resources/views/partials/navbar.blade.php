<div class="container-fluid fixed-top px-0">
    <div class="container px-0">
        <div class="topbar">
            <div class="row align-items-center justify-content-center">
                <div class="col-md-8"></div>
                <div class="col-md-4">
                    <div class="topbar-icon d-flex align-items-center justify-content-end">
                        <a href="#" class="btn-square text-white me-2"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="btn-square text-white me-2"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="btn-square text-white me-2"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="btn-square text-white me-2"><i class="fab fa-pinterest"></i></a>
                        <a href="#" class="btn-square text-white me-0"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <nav class="navbar navbar-light bg-light navbar-expand-xl">
            <a href="{{ url('/') }}" class="navbar-brand ms-3">
            <img src="{{ asset('img/himatif_institut_teknologi_del_logo.jpeg') }}" alt="Logo HIMATIF" height="50">
            </a>
            <button class="navbar-toggler py-2 px-3 me-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars text-primary"></span>
            </button>
            <div class="collapse navbar-collapse bg-light" id="navbarCollapse">
                <div class="navbar-nav ms-auto">
                    <a href="{{ url('/') }}" class="nav-item nav-link {{ request()->is('/') ? 'active' : '' }}">Home</a>
                    <a class="nav-link" href="{{ route('transparansi') }}"><i class="fas fa-chart-line"></i><span></span></a></li>
                    <a href="{{ url('/about') }}" class="nav-item nav-link {{ request()->is('about') ? 'active' : '' }}">About</a>
                    <a href="{{ url('/news') }}" class="nav-item nav-link {{ request()->is('news') ? 'active' : '' }}">News</a>
                    <a href="{{ url('/events') }}" class="nav-item nav-link {{ request()->is('events') ? 'active' : '' }}">Events</a>
                    <a href="{{ url('/gallery') }}" class="nav-item nav-link {{ request()->is('gallery') ? 'active' : '' }}">Gallery</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Struktur</a>
                        <div class="dropdown-menu m-0 bg-secondary rounded-0">
                            @foreach (App\Models\Category::all() as $category)
                                <a href="{{ url('/struktur?category=' . urlencode($category->name)) }}" class="dropdown-item">
                                    {{ $category->name }}
                                </a>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="d-flex align-items-center flex-nowrap pt-xl-0" style="margin-left: 15px;">
                    <a href="{{ route('admin') }}" class="btn-hover-bg btn btn-primary text-white py-2 px-4 me-3">Login</a>
                </div>
            </div>
        </nav>
    </div>
</div>
