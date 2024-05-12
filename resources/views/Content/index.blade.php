@extends('Layout.layout')

@section('content')

@include('Component.navbar')

<div style="margin-top: 80px;" id="hero-carousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="0" class="active" aria-current="true"
            aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner" style="width: 80%; margin: 0 auto;">
        <div class="carousel-item active c-item">
            <img src="/images/carousel1.jpg" class="d-block w-100 c-img" alt="slide1">
        </div>
        <div class="carousel-item c-item">
            <img src="/images/image.jpeg" class="d-block w-100 c-img" alt="slide2">
        </div>
        <div class="carousel-item c-item">
            <img src="/images/image2.jpeg" class="d-block w-100 c-img" alt="slide3">
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#hero-carousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#hero-carousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>

<!-- Footer pertama -->
<footer class="footer py-4"
    style="background-color: #143C85; color: white; font-family: 'Arial', sans-serif; text-align: center; padding: 20px 0;">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <!-- Bagian kiri -->
            <div class="col-lg-4 text-lg-start">
                <span
                    style="font-size: 48px; font-family: 'Righteous', cursive; font-weight: bold; text-decoration: underline;">aw
                    mart</span>
            </div>
            <!-- Bagian tengah -->
            <div class="col-lg-4">
                <span
                    style="font-family: 'Montserrat', sans-serif; font-size: 24px; text-decoration: underline; font-weight:bold;">PT
                    AW
                    Mart</span><br>
                <span style="font-family: 'Montserrat', sans-serif; font-size: 14px;">Jl. Setra Dago Raya No.8, Antapani
                    Kulon, Kec. Antapani, Kota Bandung, Jawa Barat 40291</span>
            </div>
            <!-- Bagian kanan -->
            <div class="col-lg-4 text-lg-end">
                <span
                    style="font-family: 'Montserrat', sans-serif; font-size: 24px; text-decoration: underline; font-weight:bold;">HUBUNGI
                    KAMI</span><br>
                <a href="https://wa.me/6281220552543" target="_blank"><img src="/images/wh.png" alt="WhatsApp"
                        style="width: 30px; height: auto;"></a>
            </div>
        </div>
    </div>
</footer>

<!-- Konten situs Anda berada di sini -->

<!-- Footer kedua -->
<footer class="footer py-4"
    style="background-color: #050E1F; color: white; font-family: 'Montserrat', sans-serif; text-align: center; padding: 20px 0;">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-3 text-lg-start"> Copyright &copy; 2024 PT AW MART</div>
        </div>
    </div>
</footer>
@endsection