@extends('layouts.app')

@section('title', 'Our Services')

@section('content')
<!-- Services Start -->
<div class="container-fluid service py-5 bg-light">
    <div class="container py-5">
        <div class="text-center mx-auto pb-5" style="max-width: 800px;">
            <h5 class="text-uppercase text-primary">What We Do</h5>
            <h1 class="mb-0">Our Efforts to Protect the Environment</h1>
        </div>
        <div class="row g-4">
            <div class="col-md-6 col-lg-3">
                <div class="service-item">
                    <img src="img/service-1.jpg" class="img-fluid w-100 rounded" alt="Raising Money">
                    <div class="service-link mt-3">
                        <a href="#" class="h4 mb-0 text-decoration-none text-dark">Raising Money to Help</a>
                    </div>
                    <p class="my-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry. It has been the industry's standard dummy text since the 1500s.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="service-item">
                    <img src="img/service-2.jpg" class="img-fluid w-100 rounded" alt="Close Work with Services">
                    <div class="service-link mt-3">
                        <a href="#" class="h4 mb-0 text-decoration-none text-dark">Close Work with Services</a>
                    </div>
                    <p class="my-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry. It has been the industry's standard dummy text since the 1500s.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="service-item">
                    <img src="img/service-3.jpg" class="img-fluid w-100 rounded" alt="Pro Guided Tours Only">
                    <div class="service-link mt-3">
                        <a href="#" class="h4 mb-0 text-decoration-none text-dark">Pro Guided Tours Only</a>
                    </div>
                    <p class="my-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry. It has been the industry's standard dummy text since the 1500s.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="service-item">
                    <img src="img/service-4.jpg" class="img-fluid w-100 rounded" alt="Protecting Animal Areas">
                    <div class="service-link mt-3">
                        <a href="#" class="h4 mb-0 text-decoration-none text-dark">Protecting Animal Areas</a>
                    </div>
                    <p class="my-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry. It has been the industry's standard dummy text since the 1500s.</p>
                </div>
            </div>
            <div class="col-12 text-center mt-4">
                <a class="btn btn-primary text-white py-2 px-4" href="#">Read More</a>
            </div>
        </div>
    </div>
</div>
<!-- Services End -->
@endsection
