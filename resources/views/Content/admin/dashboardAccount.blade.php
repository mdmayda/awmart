@extends('Layout.layout')

@section('content')

@extends('Component.sidebar')

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
            <img src="/images/profile.jpg">
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
        <a href="https://api.whatsapp.com/send?phone=62812114078903" target="_blank">
            <div class="profile-picture">
                <img src="/images/profile.jpg" alt="Profile Picture" class="rounded-circle" style="width: 200px" height="200px">
            </div>
            <div class="profile-details">
                <p><strong>ID Account:</strong> 1234567890</p>
                <p><strong>Nama:</strong> Gerskuy</p>
                <p><strong>Nomor Telepon:</strong> 081234567890</p>
            </div>
        </a>
    </div>
    </div>
</main>
<!-- MAIN -->


</section>
<!-- CONTENT -->

@endsection
