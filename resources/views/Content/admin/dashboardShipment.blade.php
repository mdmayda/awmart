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
