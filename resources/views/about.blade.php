@extends('layouts.app')

@section('title', 'about us HIMATIF')

@section('content')
<!-- About Start -->
<div class="container-fluid about py-5">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-xl-5">
                <div class="h-100">
                    <img src="img/about-1.jpg" class="img-fluid w-100 h-100 rounded" alt="About Us">
                </div>
            </div>
            <div class="col-xl-7">
                <h5 class="text-uppercase text-primary">About Us</h5>
                <h1 class="mb-4">Our Main Goal is to Protect the Environment</h1>
                <p class="fs-5 mb-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. It has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                <div class="tab-class bg-secondary p-4 rounded">
                    <ul class="nav d-flex mb-2">
                        <li class="nav-item mb-3">
                            <a class="d-flex py-2 text-center bg-white active" data-bs-toggle="pill" href="#tab-1">
                                <span class="text-dark" style="width: 150px;">About</span>
                            </a>
                        </li>
                        <li class="nav-item mb-3">
                            <a class="d-flex py-2 mx-3 text-center bg-white" data-bs-toggle="pill" href="#tab-2">
                                <span class="text-dark" style="width: 150px;">Mission</span>
                            </a>
                        </li>
                        <li class="nav-item mb-3">
                            <a class="d-flex py-2 text-center bg-white" data-bs-toggle="pill" href="#tab-3">
                                <span class="text-dark" style="width: 150px;">Vision</span>
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div id="tab-1" class="tab-pane fade show p-0 active">
                            <div class="row">
                                <div class="col-12">
                                    <div class="d-flex">
                                        <div class="text-start my-auto">
                                            <h5 class="text-uppercase mb-3">About Us</h5>
                                            <p class="mb-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. It has been the industry's standard dummy text since the 1500s.</p>
                                            <div class="d-flex align-items-center justify-content-start">
                                                <a class="btn btn-primary text-white py-2 px-4" href="#">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="tab-2" class="tab-pane fade show p-0">
                            <div class="row">
                                <div class="col-12">
                                    <div class="d-flex">
                                        <div class="text-start my-auto">
                                            <h5 class="text-uppercase mb-3">Our Mission</h5>
                                            <p class="mb-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. It has been the industry's standard dummy text since the 1500s.</p>
                                            <div class="d-flex align-items-center justify-content-start">
                                                <a class="btn btn-primary text-white py-2 px-4" href="#">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="tab-3" class="tab-pane fade show p-0">
                            <div class="row">
                                <div class="col-12">
                                    <div class="d-flex">
                                        <div class="text-start my-auto">
                                            <h5 class="text-uppercase mb-3">Our Vision</h5>
                                            <p class="mb-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. It has been the industry's standard dummy text since the 1500s.</p>
                                            <div class="d-flex align-items-center justify-content-start">
                                                <a class="btn btn-primary text-white py-2 px-4" href="#">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->


        <!-- Volunteers Start -->
        <div class="container-fluid volunteer py-5">
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

@endsection
