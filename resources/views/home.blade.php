@extends('layouts.app')
@section('content')
@include('partials.carousel')
@section('partials.navbar')
<!-- Spinner Start -->
        <div id="spinner" class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50  d-flex align-items-center justify-content-center">
            <div class="spinner-grow text-primary" role="status"></div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar start -->
        
        <!-- Navbar End -->

        
       <!-- Carousel Start -->
       
        <!-- Carousel End -->





        <!-- About Start -->

                <div class="container py-5">
                    <div class="row align-items-center">
                        <div class="col-md-6 text-center">
                        <img src="{{ asset('img/himatif_institut_teknologi_del_logo.jpeg') }}" alt="Logo Himatif" class="img-fluid" style="max-width: 80%;">
                    </div>
                        <div class="col-md-6">
                            <h2 class="fw-bold">HIMATIF</h2>
                            <p>Program Studi Teknologi Informasi Diploma Tiga adalah salah satu dari 3 (tiga) program studi yang dikelola oleh Institut Teknologi Del (IT Del) yang berdiri pada tahun 2001 sesuai SK No. 222/D/O/2001 tertanggal 28 September 2001 dengan nama Program Studi Teknologi Informasi.
                            Program Studi Teknologi Informasi Diploma Tiga  mempunyai sasaran untuk menyelenggarakan proses pembelajaran yang dapat menumbuhkan-kembangkan daya nalar, daya cipta, daya kreasi dan keterampilan yang tinggi, yang dapat dikomunikasikan dan diaplikasikan pada bidang kehidupan.
                            </p>
                            <a class="btn btn-primary text-white py-2 px-4" href="#">Selengkapnya</a>
                        </div>
                    </div>
                </div>

                <div class="container py-5 text-center">
                    <div class="row">
                        <div class="col-md-3 d-flex flex-column align-items-center">
                            <div class="feature-icon mb-2">📑</div>
                            <h5 class="fw-bold">Membangun Jaringan dan Kolaborasi</h5>
                        </div>
                        <div class="col-md-3 d-flex flex-column align-items-center">
                            <div class="feature-icon mb-2">📷</div>
                            <h5 class="fw-bold">Berbagi Pengetahuan dan Pengalaman</h5>
                        </div>
                        <div class="col-md-3 d-flex flex-column align-items-center">
                            <div class="feature-icon mb-2">📦</div>
                            <h5 class="fw-bold">Pengembangan Profesionalisme</h5>
                        </div>
                        <div class="col-md-3 d-flex flex-column align-items-center">
                            <div class="feature-icon mb-2">🛡️</div>
                            <h5 class="fw-bold">Mengembangkan Proyek Bersama</h5>
                        </div>
                    </div>
                </div>

                <div class="container-fluid bg-light py-5">
                    <div class="container text-center">
                        <h2 class="fw-bold">Anggota Kepengurusan Himpunan Mahasiswa Sistem Informasi</h2>
                        <div class="row mt-4">
                            <div class="col-md-4 d-flex flex-column align-items-center">
                                <h1>😊 89</h1>
                                <p>Total Kepengurusan Aktif</p>
                            </div>
                            <div class="col-md-4 d-flex flex-column align-items-center">
                                <h1>🌿 7</h1>
                                <p>Total Divisi</p>
                            </div>
                            <div class="col-md-4 d-flex flex-column align-items-center">
                                <h1>🎧 500</h1>
                                <p>Anggota Himasi</p>
                            </div>
                        </div>
                    </div>
                </div>

        <!-- About End -->






        <!-- Services Start -->
        <div class="container-fluid service py-5 bg-light">
            <div class="container py-5">
                <div class="text-center mx-auto pb-5" style="max-width: 800px;">
                    <h5 class="text-uppercase text-primary">What we do</h5>
                    <h1 class="mb-0">What we do to protect environment</h1>
                </div>
                <div class="row g-4">
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="service-item">
                            <img src="img/service-1.jpg" class="img-fluid w-100" alt="Image">
                            <div class="service-link">
                                <a href="#" class="h4 mb-0">Raising money to help</a>
                            </div>
                        </div>
                        <p class="my-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                        </p>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="service-item">
                            <img src="img/service-2.jpg" class="img-fluid w-100" alt="Image">
                            <div class="service-link">
                                <a href="#" class="h4 mb-0"> close work with services</a>
                            </div>
                        </div>
                        <p class="my-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                        </p>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="service-item">
                            <img src="img/service-3.jpg" class="img-fluid w-100" alt="Image">
                            <div class="service-link">
                                <a href="#" class="h4 mb-0">Pro Guided tours only</a>
                            </div>
                        </div>
                        <p class="my-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                        </p>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="service-item">
                            <img src="img/service-4.jpg" class="img-fluid w-100" alt="Image">
                            <div class="service-link">
                                <a href="#" class="h4 mb-0">Protecting animal area</a>
                            </div>
                        </div>
                        <p class="my-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                        </p>
                    </div>
                    <div class="col-12">
                        <div class="d-flex align-items-center justify-content-center">
                            <a class="btn-hover-bg btn btn-primary text-white py-2 px-4" href="#">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Services End -->


        <!-- Donation Start -->
        <!-- Donation End -->


        <!-- Counter Start -->
        <div class="container-fluid counter py-5" style="background: linear-gradient(rgba(0, 0, 0, .4), rgba(0, 0, 0, 0.4)), url(img/volunteers-bg.jpg) center center; background-size: cover;">
            <div class="container py-5">
                <div class="text-center mx-auto pb-5" style="max-width: 800px;">
                    <h5 class="text-uppercase text-primary">Achievements</h5>
                    <p class="text-white mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                    </p>
                </div>
                <div class="row g-4">
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="counter-item text-center border p-5">
                            <i class="fas fa-thumbs-up fa-4x text-white"></i>
                            <h3 class="text-white my-4">Beavers Saved</h3>
                            <div class="counter-counting">
                                <span class="text-primary fs-2 fw-bold" data-toggle="counter-up">3600</span>
                                <span class="h1 fw-bold text-primary">+</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="counter-item text-center border p-5">
                            <i class="fas fa-file-invoice-dollar fa-4x text-white"></i>
                            <h3 class="text-white my-4">Funds Collected</h3>
                            <div class="counter-counting text-center border-white w-100" style="border-style: dotted; font-size: 30px;">
                                <span class="text-primary fs-2 fw-bold" data-toggle="counter-up">513</span>
                                <span class="h1 fw-bold text-primary">$</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="counter-item text-center border p-5">
                            <i class="fas fa-user fa-4x text-white"></i>
                            <h3 class="text-white my-4">Volunteer</h3>
                            <div class="counter-counting text-center border-white w-100" style="border-style: dotted; font-size: 30px;">
                                <span class="text-primary fs-2 fw-bold" data-toggle="counter-up">713</span>
                                <span class="h1 fw-bold text-primary">+</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="counter-item text-center border p-5">
                            <i class="fas fa-heart fa-4x text-white"></i>
                            <h3 class="text-white my-4">Days of Help</h3>
                            <div class="counter-counting text-center border-white w-100" style="border-style: dotted; font-size: 30px;">
                                <span class="text-primary fs-2 fw-bold" data-toggle="counter-up">487</span>
                                <span class="h1 fw-bold text-primary">+</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="d-flex align-items-center justify-content-center">
                            <a class="btn-hover-bg btn btn-primary text-white py-2 px-4" href="#">Join With Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Counter End -->


        <!-- Causes Start -->
        <div class="container-fluid causes py-5">
            <div class="container py-5">
                <div class="text-center mx-auto pb-5" style="max-width: 800px;">
                    <h5 class="text-uppercase text-primary">Recent Causes</h5>
                    <h1 class="mb-4">The environment needs our protection</h1>
                    <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                    </p>
                </div>
                <div class="row g-4">
                    <div class="col-lg-6 col-xl-3">
                        <div class="causes-item">
                            <div class="causes-img">
                                <img src="img/causes-4.jpg" class="img-fluid w-100" alt="Image">
                                <div class="causes-link pb-2 px-3">
                                    <small class="text-white"><i class="fas fa-chart-bar text-primary me-2"></i>Goal: $3600</small>
                                    <small class="text-white"><i class="fa fa-thumbs-up text-primary me-2"></i>Raised: $4000</small>
                                </div>
                                <div class="causes-dination p-2">
                                    <a class="btn-hover-bg btn btn-primary text-white py-2 px-3" href="#">Donate Now</a>
                                </div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">
                                    <span>65%</span>
                                </div>
                            </div>
                            <div class="causes-content p-4">
                                <h4 class="mb-3">First environments activity of</h4>
                                <p class="mb-4">Help today because tomorrow you may be the one who needs more helping!</p>
                                <a class="btn-hover-bg btn btn-primary text-white py-2 px-3" href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-3">
                        <div class="causes-item">
                            <div class="causes-img">
                                <img src="img/causes-2.jpg" class="img-fluid w-100" alt="Image">
                                <div class="causes-link pb-2 px-3">
                                    <small class="text-white"><i class="fas fa-chart-bar text-primary me-2"></i>Goal: $3600</small>
                                    <small class="text-white"><i class="fa fa-thumbs-up text-primary me-2"></i>Raised: $4000</small>
                                </div>
                                <div class="causes-dination p-2">
                                    <a class="btn-hover-bg btn btn-primary text-white py-2 px-3" href="#">Donate Now</a>
                                </div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                                    <span>75%</span>
                                </div>
                            </div>
                            <div class="causes-content p-4">
                                <h4 class="mb-3">Build school for poor children.</h4>
                                <p class="mb-4">Help today because tomorrow you may be the one who needs more helping!</p>
                                <a class="btn-hover-bg btn btn-primary text-white py-2 px-4" href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-3">
                        <div class="causes-item">
                            <div class="causes-img">
                                <img src="img/causes-3.jpg" class="img-fluid w-100" alt="Image">
                                <div class="causes-link pb-2 px-3">
                                    <small class="text-white"><i class="fas fa-chart-bar text-primary me-2"></i>Goal: $3600</small>
                                    <small class="text-white"><i class="fa fa-thumbs-up text-primary me-2"></i>Raised: $4000</small>
                                </div>
                                <div class="causes-dination p-2">
                                    <a class="btn-hover-bg btn btn-primary text-white py-2 px-3" href="#">Donate Now</a>
                                </div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
                                    <span>85%</span>
                                </div>
                            </div>
                            <div class="causes-content p-4">
                                <h4 class="mb-3">Building clean-water system for rural poor.</h4>
                                <p class="mb-4">Help today because tomorrow you may be the one who needs more helping!</p>
                                <a class="btn-hover-bg btn btn-primary text-white py-2 px-4" href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-3">
                        <div class="causes-item">
                            <div class="causes-img">
                                <img src="img/causes-1.jpg" class="img-fluid w-100" alt="Image">
                                <div class="causes-link pb-2 px-3">
                                    <small class="text-white"><i class="fas fa-chart-bar text-primary me-2"></i>Goal: $3600</small>
                                    <small class="text-white"><i class="fa fa-thumbs-up text-primary me-2"></i>Raised: $4000</small>
                                </div>
                                <div class="causes-dination p-2">
                                    <a class="btn-hover-bg btn btn-primary text-white py-2 px-3" href="#">Donate Now</a>
                                </div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">
                                    <span>95%</span>
                                </div>
                            </div>
                            <div class="causes-content p-4">
                                <h4 class="mb-3">First environments activity of this summer.</h4>
                                <p class="mb-4">Help today because tomorrow you may be the one who needs more helping!</p>
                                <a class="btn-hover-bg btn btn-primary text-white py-2 px-4" href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Causes End -->


        <!-- Events Start -->
        <div class="container-fluid event py-5">
            <div class="container py-5">
                <div class="text-center mx-auto mb-5" style="max-width: 800px;">
                    <h5 class="text-uppercase text-primary">Upcoming Events</h5>
                    <h1 class="mb-0">Help today because tomorrow you may be the one who needs more helping!</h1>
                </div>
                <div class="event-carousel owl-carousel">
                    <div class="event-item">
                        <img src="img/events-1.jpg" class="img-fluid w-100" alt="Image">
                        <div class="event-content p-4">
                            <div class="d-flex justify-content-between mb-4">
                                <span class="text-body"><i class="fas fa-map-marker-alt me-2"></i>Grand Mahal, Dubai 2100.</span>
                                <span class="text-body"><i class="fas fa-calendar-alt me-2"></i>10 Feb, 2023</span>
                            </div>
                            <h4 class="mb-4">How To Build A Cleaning Plan</h4>
                            <p class="mb-4">Lorem ipsum dolor sit amet consectur adip sed eiusmod amet consectur adip sed eiusmod tempor.</p>
                            <a class="btn-hover-bg btn btn-primary text-white py-2 px-4" href="#">Read More</a>
                        </div>
                    </div>
                    <div class="event-item">
                        <img src="img/events-2.jpg" class="img-fluid w-100" alt="Image">
                        <div class="event-content p-4">
                            <div class="d-flex justify-content-between mb-4">
                                <span class="text-body"><i class="fas fa-map-marker-alt me-2"></i>Grand Mahal, Dubai 2100.</span>
                                <span class="text-body"><i class="fas fa-calendar-alt me-2"></i>10 Feb, 2023</span>
                            </div>
                            <h4 class="mb-4">How To Build A Cleaning Plan</h4>
                            <p class="mb-4">Lorem ipsum dolor sit amet consectur adip sed eiusmod amet consectur adip sed eiusmod tempor.</p>
                            <a class="btn-hover-bg btn btn-primary text-white py-2 px-4" href="#">Read More</a>
                        </div>
                    </div>
                    <div class="event-item">
                        <img src="img/events-3.jpg" class="img-fluid w-100" alt="Image">
                        <div class="event-content p-4">
                            <div class="d-flex justify-content-between mb-4">
                                <span class="text-body"><i class="fas fa-map-marker-alt me-2"></i>Grand Mahal, Dubai 2100.</span>
                                <span class="text-body"><i class="fas fa-calendar-alt me-2"></i>10 Feb, 2023</span>
                            </div>
                            <h4 class="mb-4">How To Build A Cleaning Plan</h4>
                            <p class="mb-4">Lorem ipsum dolor sit amet consectur adip sed eiusmod amet consectur adip sed eiusmod tempor.</p>
                            <a class="btn-hover-bg btn btn-primary text-white py-2 px-4" href="#">Read More</a>
                        </div>
                    </div>
                    <div class="event-item">
                        <img src="img/events-4.jpg" class="img-fluid w-100" alt="Image">
                        <div class="event-content p-4">
                            <div class="d-flex justify-content-between mb-4">
                                <span class="text-body"><i class="fas fa-map-marker-alt me-2"></i>Grand Mahal, Dubai 2100.</span>
                                <span class="text-body"><i class="fas fa-calendar-alt me-2"></i>10 Feb, 2023</span>
                            </div>
                            <h4 class="mb-4">How To Build A Cleaning Plan</h4>
                            <p class="mb-4">Lorem ipsum dolor sit amet consectur adip sed eiusmod amet consectur adip sed eiusmod tempor.</p>
                            <a class="btn-hover-bg btn btn-primary text-white py-2 px-4" href="#">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Events End -->

        <!-- Blog Start -->
        <!-- Blog End -->


        <!-- Gallery Start -->
        <div class="container-fluid gallery py-5 px-0">
            <div class="text-center mx-auto pb-5" style="max-width: 800px;">
                <h5 class="text-uppercase text-primary">Our work</h5>
                <h1 class="mb-4">We consider environment welfare</h1>
                <p class="mb-0">Lorem ipsum dolor sit amet consectur adip sed eiusmod amet consectur adip sed eiusmod tempor ipsum dolor sit amet consectur adip sed eiusmod amet consectur adip sed eiusmod tempor.</p>
            </div>
            <div class="row g-0">
                <div class="col-lg-4">
                    <div class="gallery-item">
                        <img src="img/gallery-2.jpg" class="img-fluid w-100" alt="">
                        <div class="search-icon">
                            <a href="img/gallery-2.jpg" data-lightbox="gallery-2" class="my-auto"><i class="fas fa-search-plus btn-hover-color bg-white text-primary p-3"></i></a>
                        </div>
                        <div class="gallery-content">
                            <div class="gallery-inner pb-5">
                                <a href="#" class="h4 text-white">Beauty Of Life</a>
                                <a href="#" class="text-white"><p class="mb-0">Gallery Name</p></a>
                            </div>
                        </div>
                    </div>
                    <div class="gallery-item">
                        <img src="img/gallery-3.jpg" class="img-fluid w-100" alt="">
                        <div class="search-icon">
                            <a href="img/gallery-3.jpg" data-lightbox="gallery-3" class="my-auto"><i class="fas fa-search-plus btn-hover-color bg-white text-primary p-3"></i></a>
                        </div>
                        <div class="gallery-content">
                            <div class="gallery-inner pb-5">
                                <a href="#" class="h4 text-white">Beauty Of Life</a>
                                <a href="#" class="text-white"><p class="mb-0">Gallery Name</p></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="gallery-item">
                        <img src="img/gallery-1.jpg" class="img-fluid w-100" alt="">
                        <div class="search-icon">
                            <a href="img/gallery-1.jpg" data-lightbox="gallery-1" class="my-auto"><i class="fas fa-search-plus btn-hover-color bg-white text-primary p-3"></i></a>
                        </div>
                        <div class="gallery-content">
                            <div class="gallery-inner pb-5">
                                <a href="#" class="h4 text-white">Beauty Of Life</a>
                                <a href="#" class="text-white"><p class="mb-0">Gallery Name</p></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="gallery-item">
                        <img src="img/gallery-4.jpg" class="img-fluid w-100" alt="">
                        <div class="search-icon">
                            <a href="img/gallery-4.jpg" data-lightbox="gallery-4" class="my-auto"><i class="fas fa-search-plus btn-hover-color bg-white text-primary p-3"></i></a>
                        </div>
                        <div class="gallery-content">
                            <div class="gallery-inner pb-5">
                                <a href="#" class="h4 text-white">Beauty Of Life</a>
                                <a href="#" class="text-white"><p class="mb-0">Gallery Name</p></a>
                            </div>
                        </div>
                    </div>
                    <div class="gallery-item">
                        <img src="img/gallery-5.jpg" class="img-fluid w-100" alt="">
                        <div class="search-icon">
                            <a href="img/gallery-5.jpg" data-lightbox="gallery-5" class="my-auto"><i class="fas fa-search-plus btn-hover-color bg-white text-primary p-3"></i></a>
                        </div>
                        <div class="gallery-content">
                            <div class="gallery-inner pb-5">
                                <a href="#" class="h4 text-white">Beauty Of Life</a>
                                <a href="#" class="text-white"><p class="mb-0">Gallery Name</p></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Gallery End -->


        <!-- Volunteers Start -->
        <div class="container-fluid volunteer py-5 mt-5">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-lg-5">
                        <div class="row g-4">
                            <div class="col-lg-6">
                                <div class="volunteer-img">
                                    <img src="img/volunteers-1.jpg" class="img-fluid w-100" alt="Image">
                                    <div class="volunteer-title">
                                        <h5 class="mb-2 text-white">Michel Brown</h5>
                                        <p class="mb-0 text-white">Communicator</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="volunteer-img">
                                    <img src="img/volunteers-3.jpg" class="img-fluid w-100" alt="Image">
                                    <div class="volunteer-title">
                                        <h5 class="mb-2 text-white">Michel Brown</h5>
                                        <p class="mb-0 text-white">Communicator</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="volunteer-img">
                                    <img src="img/volunteers-2.jpg" class="img-fluid w-100" alt="Image">
                                    <div class="volunteer-title">
                                        <h5 class="mb-2 text-white">Michel Brown</h5>
                                        <p class="mb-0 text-white">Communicator</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="volunteer-img">
                                    <img src="img/volunteers-4.jpg" class="img-fluid w-100" alt="Image">
                                    <div class="volunteer-title">
                                        <h5 class="mb-2 text-white">Michel Brown</h5>
                                        <p class="mb-0 text-white">Communicator</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <h5 class="text-uppercase text-primary">Become a Volunteer?</h5>
                        <h1 class="mb-4">Join your hand with us for a better life and beautiful future.</h1>
                        <p class="mb-4">Lorem ipsum dolor sit amet consectur adip sed eiusmod amet consectur adip sed eiusmod tempor amet consectur adip sed eiusmod amet consectur adip sed eiusmod tempor amet consectur adip sed eiusmod amet consectur adip sed eiusmod tempor.
                        </p>
                        <p class="text-dark"><i class=" fa fa-check text-primary me-2"></i> We are friendly to each other.</p>
                        <p class="text-dark"><i class=" fa fa-check text-primary me-2"></i> If you join with us,We will give you free training.</p>
                        <p class="text-dark"><i class=" fa fa-check text-primary me-2"></i> Its an opportunity to help poor Environments.</p>
                        <p class="text-dark"><i class=" fa fa-check text-primary me-2"></i> No goal requirements.</p>
                        <p class="text-dark mb-5"><i class=" fa fa-check text-primary me-2"></i> Joining is tottaly free. We dont need any money from you.</p>
                        <a class="btn-hover-bg btn btn-primary text-white py-2 px-4" href="#">Join With Us</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Volunteers End -->


        <!-- Footer Start -->

        <!-- Footer End -->


        <!-- Copyright Start -->
        <div class="container-fluid copyright py-4">
            <div class="container">
                <div class="row g-4 align-items-center">
                    <div class="col-md-4 text-center text-md-start mb-md-0">
                        <span class="text-body"><a href="#"><i class="fas fa-copyright text-light me-2"></i>Your Site Name</a>, All right reserved.</span>
                    </div>
                    <div class="col-md-4 text-center">
                        <div class="d-flex align-items-center justify-content-center">
                            <a href="#" class="btn-hover-color btn-square text-white me-2"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="btn-hover-color btn-square text-white me-2"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="btn-hover-color btn-square text-white me-2"><i class="fab fa-instagram"></i></a>
                            <a href="#" class="btn-hover-color btn-square text-white me-2"><i class="fab fa-pinterest"></i></a>
                            <a href="#" class="btn-hover-color btn-square text-white me-0"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-md-4 text-center text-md-end text-body">
                        <!--/*** This template is free as long as you keep the below author’s credit link/attribution link/backlink. ***/-->
                        <!--/*** If you'd like to use the template without the below author’s credit link/attribution link/backlink, ***/-->
                        <!--/*** you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". ***/-->
                        Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a> Distributed By <a class="border-bottom" href="https://themewagon.com">ThemeWagon</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Copyright End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-primary btn-primary-outline-0 btn-md-square back-to-top"><i class="fa fa-arrow-up"></i></a>   

        
        <!-- JavaScript Libraries -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/counterup/counterup.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="lib/lightbox/js/lightbox.min.js"></script>
        



    </body>

</html>