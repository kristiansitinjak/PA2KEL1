<div class="container-fluid fixed-top px-0">
    <div class="container px-0">
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

                <a class="nav-item nav-link {{ request()->is('transparansi') ? 'active' : '' }}" href="{{ route('transparansi') }}">
                    <i class="fas fa-chart-line"></i> Transparansi
                </a>

                <a href="{{ url('/about') }}" class="nav-item nav-link {{ request()->is('about') ? 'active' : '' }}">About</a>
                <a href="{{ url('/news') }}" class="nav-item nav-link {{ request()->is('news') ? 'active' : '' }}">News</a>

                {{-- LINK EVENTS UNTUK PUBLIK --}}
                <a href="{{ route('events.public') }}" class="nav-item nav-link {{ request()->is('page/events') ? 'active' : '' }}">Events</a>

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
                <a href="{{ route('login') }}" class="nav-item nav-link {{ request()->is('login') ? 'active' : '' }}">
                    <i class="fas fa-sign-in-alt"></i> Login
                </a>
            </div>
        </div>
    </nav>
</div>
