@extends('Layout.layout')

@section('content')

<!-- SIDEBAR -->
<section id="sidebar">
    <div class="sidebar-brand">
        <h2>aw mart</h2>
    </div>
    
    <ul class="side-menu top">
        <li class="active">
            <a href="#">
                <i class='bx bxs-dashboard' ></i>
                <span class="text">Dashbaord</span>
            </a>
        </li>
        <li>
            <a href="#">
                <i class='bx bxs-cart-add' ></i> <!-- Mengganti ikon menjadi keranjang belanja -->
                <span class="text">Products</span>
            </a>
        </li>
        <li>
            <a href="#">
                <i class='bx bxs-truck' ></i> <!-- Mengganti ikon menjadi truk -->
                <span class="text">Shipment</span>
            </a>
        </li>
        <li>
            <a href="#">
                <i class='bx bxs-user' ></i> <!-- Mengganti ikon menjadi pengguna -->
                <span class="text">Member</span>
            </a>
        </li>
    
    </ul>
    <ul class="side-menu">
        <li>
            <a href="#">
                <i class='bx bxs-cog' ></i>
                <span class="text">Account</span>
            </a>
        </li>
        <li>
            <a href="#" class="logout">
                <i class='bx bxs-log-out-circle' ></i>
                <span class="text">Logout</span>
            </a>
        </li>
    </ul>
</section>
<!-- SIDEBAR -->

<!-- CONTENT -->
<section id="content">
    <!-- NAVBAR -->
    <nav>
        <form action="#">
            <div class="form-input">
                <input type="search" placeholder="Search...">
                <button type="submit" class="search-btn"><i class='bx bx-search' ></i></button>
            </div>
        </form>
        <a href="#" class="notification">
            <i class='bx bxs-bell' ></i>
            <span class="num">8</span>
        </a>
        <a href="#" class="profile">
            <img src="img/people.png">
        </a>
    </nav>
    <!-- NAVBAR -->

<!-- MAIN -->
<main>
    <div class="head-title">
        <div class="left">
            <h1>Account</h1>
            <ul class="breadcrumb">
                <li>
                    <a href="#">Account</a>
                </li>
                <li><i class='bx bx-chevron-right' ></i></li>
                <li>
                    <a class="active" href="#">Profile</a>
                </li>
            </ul>
        </div>
        <a href="#" class="btn-download">
            <i class='bx bxs-cloud-download' ></i>
            <span class="text">Download PDF</span>
        </a>
    </div>

    <div class="profile-info text-center">
        <div class="profile-picture">
            <img src="/images/wh.png" alt="Profile Picture" class="rounded-circle">
        </div>
        <div class="profile-details">
            <p><strong>ID Account:</strong> 1234567890</p>
            <p><strong>Nama:</strong> John Doe</p>
            <p><strong>Nomor Telepon:</strong> 081234567890</p>
        </div>
    </div>
</main>
<!-- MAIN -->


</section>
<!-- CONTENT -->

@endsection
