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
                <span class="text">Dashboard</span>
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
                <h1>Dashboard</h1>
                <ul class="breadcrumb">
                    <li>
                        <a href="#">Dashboard</a>
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

        <ul class="box-info">
            <li>
                <i class='bx bxs-money' ></i>
                <span class="text">
                    <p>Pendapatan Per Bulan</p>
                    <h3>Rp 1020</h3>
                </span>
            </li>
            <li>
                <i class='bx bxs-shopping-bag' ></i>
                <span class="text">
                    <p>Pengeluaran</p>
                    <h3>Rp 2834</h3>
                </span>
            </li>
            <li>
                <i class='bx bxs-user' ></i>
                <span class="text">
                    <p>Total Member</p>
                    <h3>Rp 2543</h3>
                </span>
            </li>
        </ul>
        <div class="table-data">
            <div class="order">
                <div class="head">
                    <h3>Recent Orders</h3>
                    <i class='bx bx-search' ></i>
                    <i class='bx bx-filter' ></i>
                </div>
                <table>
                    <thead>
                        <tr>
                            <th>User</th>
                            <th>Date Order</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <img src="img/people.png">
                                <p>Michael Smith</p> <!-- Ubah nama disini -->
                            </td>
                            <td>01-10-2021</td>
                            <td><span class="status completed">Completed</span></td>
                        </tr>
                        <tr>
                            <td>
                                <img src="img/people.png">
                                <p>Mary Johnson</p> <!-- Ubah nama disini -->
                            </td>
                            <td>01-10-2021</td>
                            <td><span class="status pending">Pending</span></td>
                        </tr>
                        <tr>
                            <td>
                                <img src="img/people.png">
                                <p>David Brown</p> <!-- Ubah nama disini -->
                            </td>
                            <td>01-10-2021</td>
                            <td><span class="status process">Process</span></td>
                        </tr>
                        <tr>
                            <td>
                                <img src="img/people.png">
                                <p>Jessica Miller</p> <!-- Ubah nama disini -->
                            </td>
                            <td>01-10-2021</td>
                            <td><span class="status pending">Pending</span></td>
                        </tr>
                        <tr>
                            <td>
                                <img src="img/people.png">
                                <p>Christopher Davis</p> <!-- Ubah nama disini -->
                            </td>
                            <td>01-10-2021</td>
                            <td><span class="status completed">Completed</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="table-data">
                <div class="chart">
                    <h3>DIAGRAM</h3>
                    <canvas id="todosChart"></canvas>
                </div>
            </div>
        </div>
    </main>
    <!-- MAIN -->
</section>
<!-- CONTENT -->

@endsection
