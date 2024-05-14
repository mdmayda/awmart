@extends('Layout.layout')

@section('content')

@include('Component.navbar')

<div style="margin-top: 100px;"></div> <!-- Jarak antara navbar dan konten -->

<!-- Breadcrumb -->
<div class="container mt-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/index">Home</a></li>
            <li class="breadcrumb-item"><a href="/belanja">Belanja</a></li>
            <li class="breadcrumb-item active" aria-current="page">Product Details</li>
        </ol>
    </nav>
</div>

<!-- Konten Product Detail -->
<div class="container" style="margin-top: 50px">
    <div class="row">
        <!-- Bagian Kiri: Gambar Product -->
        <div class="col-md-4">
            <img src="/images/taro.png" class="img-fluid" alt="Product Image" style="max-width: 100%;">
        </div>
        <!-- Bagian Tengah: Nama, Harga, dan Deskripsi Product -->
        <div class="col-md-4">
            <h2 style="overflow-wrap: break-word;">Taro</h2>
            <p style="overflow-wrap: break-word;">Price: Rp 2000</p>
            <p style="overflow-wrap: break-word;">produk ini merupakan
                budi budi budi</p>
        </div>
        <!-- Bagian Kanan: Tombol, Stok, Subtotal -->
        <div class="col-md-4">
            <div class="card">
                <div class="card-body d-flex flex-column justify-content-center align-items-center">
                    <!-- Tombol + dan - untuk jumlah produk -->
                    <div class="mb-3 d-flex justify-content-center align-items-center">
                        <button class="btn btn-sm" style="background-color: white; color: black; border: 1px solid black; border-radius: 10px;" id="minusBtn">-</button>
                        <input type="text" class="form-control text-center mx-2" value="1" id="quantityInput">
                        <button class="btn btn-sm" style="background-color: white; color: black; border: 1px solid black; border-radius: 10px;" id="plusBtn">+</button>
                    </div>
                    <!-- Stok tersisa -->
                    <p class="mb-2" style="color: black;">Stock Available: 10</p>
                    <!-- Tombol ke keranjang dengan icon -->
                    <button class="btn btn-primary btn-sm mb-4" style="width: 90%; background-color: white; color: black; border: 1px solid black; border-radius: 10px;"><i class="bi bi-cart-fill" style="color: black;"></i> Add to Cart</button>
                    <!-- Tombol beli langsung dengan icon -->
                    <a href="/buy" class="btn btn-success btn-sm" style="width: 90%; background-color: white; color: black; border: 1px solid black; border-radius: 10px; text-decoration: none;">
                        <i class="bi bi-bag-check" style="color: black;"></i> Buy Now
                    </a>

                    <!-- Subtotal -->
                    <p class="mt-2" id="subtotal" style="color: black;">Subtotal: $100</p>
                </div>
            </div>
        </div>
    </div>
</div>

@include('Component.footer')

@endsection