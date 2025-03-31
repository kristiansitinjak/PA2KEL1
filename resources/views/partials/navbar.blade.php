<div class="container-fluid fixed-top px-0">
    <div class="container px-0">
        <nav class="navbar navbar-light bg-light navbar-expand-xl">
            <a href="{{ url('/') }}" class="navbar-brand ms-3">
                <img src="{{ asset('img/himatif_institut_teknologi_del_logo.jpeg') }}" alt="Logo HIMATIF" height="50">
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
                    <a href="{{ route('login') }}" class="nav-item nav-link {{ request()->is('login') ? 'active' : '' }}">
                        <i class="fas fa-sign-in-alt"></i> Login
                    </a>
                </div>
            </div>
        </nav>
    </div>
</div>
