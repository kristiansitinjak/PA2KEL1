@extends('layouts.app')
@section('content')
@include('partials.carousel')
<!-- @section('partials.navbar') -->
<!-- Spinner Start -->
        <div id="spinner" class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50  d-flex align-items-center justify-content-center">
            <div class="spinner-grow text-primary" role="status"></div>
        </div>
        <!-- Spinner End -->


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
                            <a class="btn btn-primary text-white py-2 px-4" href="{{ url('/about') }}" class="nav-item nav-link">Selengkapnya</a>
                        </div>
                    </div>
                </div>

            <div class="mt-4">
                <div class="glide" id="glidePartners">
                    <div class="glide__track" data-glide-el="track">
                        <ul class="glide__slides align-items-center">
                            <li class="glide__slide">
                                <div class="p-5">
                                    <img src="{{ asset('img/partners (1).png') }}">
                                </div>
                            </li>
                            <li class="glide__slide">
                                <div class="p-5">
                                    <img src="{{ asset('img/partners (2).png') }}">
                                </div>
                            </li>
                            <li class="glide__slide">
                                <div class="p-5">
                                    <img src="{{ asset('img/partners (3).png') }}">
                                </div>
                            </li>
                            <li class="glide__slide">
                                <div class="p-5">
                                    <img src="{{ asset('img/partners (4).png') }}">
                                </div>
                            </li>
                            <li class="glide__slide">
                                <div class="p-5">
                                    <img src="{{ asset('img/partners (5).png') }}">
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>y
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
   