<div class="container-fluid fixed-top px-0">
            <div class="container px-0">
                <div class="topbar">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-md-8">
                        </div>
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
                    <a href="index.html" class="navbar-brand ms-3">
                        <h1 class="text-primary display-5">HIMATIF</h1>
                    </a>
                    <button class="navbar-toggler py-2 px-3 me-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                        <span class="fa fa-bars text-primary"></span>
                    </button>
                    <div class="collapse navbar-collapse bg-light" id="navbarCollapse">
                        <div class="navbar-nav ms-auto">
                            <a href="{{ url('/') }}" class="nav-item nav-link active">Home</a>
                            <a href="{{ url('/about') }}" class="nav-item nav-link">About</a>
                            <a href="{{ url('/service') }}" class="nav-item nav-link">Services</a>
                            <a href="{{ url('/news') }}" class="nav-item nav-link">News</a>
                            <a href="{{ url('/events') }}" class="nav-item nav-link">Events</a>
                            <a href="{{ url('/contact') }}" class="nav-item nav-link">Contact</a>
                            <a href="{{ url('/gallery') }}" class="nav-item nav-link">Gallery</a>
                        </div>
                        <div class="d-flex align-items-center flex-nowrap pt-xl-0" style="margin-left: 15px;">
                            <a href="{{ route('admin') }}" class="btn-hover-bg btn btn-primary text-white py-2 px-4 me-3">Login</a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>