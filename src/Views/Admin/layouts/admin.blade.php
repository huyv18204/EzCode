<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Boxicons -->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <!-- My CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{route('/assets/css/admin.css')}}">

    <title>AdminHub</title>
</head>

<body>
<!-- SIDEBAR -->
<section id="sidebar">
    <a href="#" class="brand">
        <i class='bx bxs-smile'></i>
        <span class="text">EzCode</span>
    </a>
    <ul class="side-menu top">
        <li class="">
            <a href="{{route('/admin/dashboard')}}">
                <i class='bx bxs-dashboard'></i>
                <span class="text">Bảng điều khiển</span>
            </a>
        </li>
        <li class="">
            <a href="{{route('/admin/courses')}}">
                <i class='bx bxs-shopping-bag-alt'></i>
                <span class="text">Quản lí khoá học</span>
            </a>
        </li>
        <li class="">
            <a href="{{route('/admin/categories')}}">
                <i class='bx bxs-doughnut-chart'></i>
                <span class="text">Quản lí danh mục</span>
            </a>
        </li>
        <li class="">
            <a href="{{route('/admin/users')}}">
                <i class='bx bxs-user' undefined ></i>
                <span class="text">Quản lí khách hàng</span>
            </a>
        </li>
        <li>
            <a href="#">
                <i class='bx bxs-group'></i>
                <span class="text">Team</span>
            </a>
        </li>
    </ul>
    <ul class="side-menu">
        <li>
            <a href="#">
                <i class='bx bxs-cog'></i>
                <span class="text">Settings</span>
            </a>
        </li>
        <li>
            <a href="{{route('/client/logout')}}" class="logout">
                <i class='bx bxs-log-out-circle'></i>
                <span class="text">Logout</span>
            </a>
        </li>
    </ul>
</section>
<!-- SIDEBAR -->
<section id="content">
    <!-- NAVBAR -->
    <nav>
        <i class='bx bx-menu'></i>
        <a href="#" class="nav-link">Categories</a>
        <form action="#">
            <div class="form-input">
                <input type="search" placeholder="Tìm kiếm...">
                <button type="submit" class="search-btn"><i class='bx bx-search'></i></button>
            </div>
        </form>
        <input type="checkbox" id="switch-mode" hidden>
        <label for="switch-mode" class="switch-mode"></label>
        <a href="#" class="notification">
            <i class='bx bxs-bell'></i>
            <span class="num">8</span>
        </a>
        <a href="#" class="profile">
            <img src="src/assets/imgs/people.png">
        </a>
    </nav>
    <!-- NAVBAR -->

    <!-- MAIN -->
    @yield('content')
    <!-- MAIN -->
</section>
</body>
<script src="{{route('/assets/javascript/admin.js')}}"></script>
</html>