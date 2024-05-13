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
            <h1>Shipment</h1>
            <ul class="breadcrumb">
                <li>
                    <a href="#">Shipment</a>
                </li>
                <li><i class='bx bx-chevron-right' ></i></li>
                <li>
                    <a class="active" href="#">Home</a>
                </li>
            </ul>
        </div>
        <a href="#" class="btn-download">
            <i class='bx bxs-cloud-download' ></i>
            <span class="text">Download PDF</span>
        </a>
    </div>

    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID Shipment</th>
                    <th>Nama Shipment</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Product 1</td>
                    <td>
                        <a href="#" class="btn btn-sm btn-primary">Edit</a>
                        <a href="#" class="btn btn-sm btn-danger">Delete</a>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Product 2</td>
                    <td>
                        <a href="#" class="btn btn-sm btn-primary">Edit</a>
                        <a href="#" class="btn btn-sm btn-danger">Delete</a>
                    </td>
                </tr>
                <!-- You can add more rows here -->
            </tbody>
        </table>
    </div>
</main>
<!-- MAIN -->


</section>
<!-- CONTENT -->

@endsection
