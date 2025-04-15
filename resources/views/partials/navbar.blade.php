<!-- Tambahkan style ini di <head> atau file CSS kamu -->
<style>
    .custom-navbar {
        background-color: rgba(0, 0, 0, 0.6);
        transition: background-color 0.4s ease, padding 0.3s ease;
    }

    .custom-navbar.scrolled {
        background-color: rgba(0, 0, 0, 0.9); /* makin solid pas scroll */
        padding-top: 0.3rem;
        padding-bottom: 0.3rem;
    }

    @media (max-width: 991.98px) {
        .custom-navbar .navbar-nav {
            text-align: center;
        }
    }
    .navbar-nav .nav-link {
    position: relative;
    color: white;
    transition: color 0.3s ease;
}

.navbar-nav .nav-link:hover {
    color: #ffc107; 
}

.navbar-nav .nav-link::after {
    content: '';
    position: absolute;
    width: 0%;
    height: 2px;
    bottom: 0;
    left: 0;
    background-color: #ffc107;
    transition: width 0.3s ease;
}

.navbar-nav .nav-link:hover::after {
    width: 100%;
}

</style>


<!-- Navbar -->
<div class="container-fluid fixed-top px-0">
    <div class="container px-0">
        <nav class="navbar navbar-dark navbar-expand-xl custom-navbar py-2">
            <a href="{{ url('/') }}" class="navbar-brand ms-3 d-flex align-items-center">
                <img src="{{ asset('img/himatif_institut_teknologi_del_logo.jpeg') }}" alt="Logo HIMATIF" height="45">
            </a>
            <button class="navbar-toggler py-2 px-3 me-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars text-white"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto align-items-xl-center">
                    <a href="{{ url('/') }}" class="nav-item nav-link {{ request()->is('/') ? 'active' : '' }}">Home</a>
                    <a class="nav-link" href="{{ route('transparansi') }}">keuangan</a>
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
                    
                    <a href="{{ route('login') }}" class="nav-item nav-link {{ request()->is('login') ? 'active' : '' }}">
                        <i class="fas fa-sign-in-alt"></i> Login
                    </a>
                </div>
            </div>
        </nav>
    </div>
</div>
<script>
    window.addEventListener('scroll', function () {
        const navbar = document.querySelector('.custom-navbar');
        if (window.scrollY > 50) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
    });
</script>