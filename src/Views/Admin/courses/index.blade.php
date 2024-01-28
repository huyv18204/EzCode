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
    <link rel="stylesheet" href="../assets/css/admin.css">

    <title>AdminHub</title>
</head>

<body>
@include('sidebar')
<!-- CONTENT -->
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
            <img src="src/Assets/imgs/people.png">
        </a>
    </nav>
    <!-- NAVBAR -->

    <!-- MAIN -->
    <main>
        <div class="head-title">
            <div class="left">
                <h1>Quản lí khoá học</h1>
                <ul class="breadcrumb">
                    <li>
                        <a href="#">Bảng điều khiển</a>
                    </li>
                    <li><i class='bx bx-chevron-right'></i></li>
                    <li>
                        <a class="active" href="#">Quản lí khoá học</a>
                    </li>
                </ul>
            </div>
            <a href="{{ route('admin/courses/create') }}" class="btn-download">
                <i class='bx bx-plus' style='color:#ffffff'></i>
                <span class="text">Thêm khoá học</span>
            </a>
        </div>

        <div class="table-data">
            <div class="order">
                <div class="head">
                    <h3>Danh sách khoá học</h3>
                    <i class='bx bx-search'></i>
                    <i class='bx bx-filter'></i>
                </div>
                <table>
                    <thead>
                    <tr>
                        <th>Mã Khoá Học</th>
                        <th>Tên Khoá Học</th>
                        <th>Ảnh</th>
                        <th>Danh Mục</th>
                        <th>Giá</th>
                        <th>Giảm Giá</th>
                        <th>Chức Năng</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($courses as $course)
                        <tr>
                            <td> {{ $course['course_code'] }}</td>
                            <td>{{ $course['name'] }}</td>
                            <td><img src="src/uploads/{{ $course['image'] }}" alt=""></td>
                            <td>

                                @foreach ($course_categories as $course_category)
                                    @if ($course['course_code'] == $course_category['course_code'])

                                        <li>{{$course_category['name']}}</li>

                                    @endif
                                @endforeach
                            </td>
                            <td>{{ $course['price'] }}</td>
                            <td>{{ $course['discount'] }}</td>
                            <th>
                                <button class="btn btn-primary">
                                    <a href="{{ route('admin/courses/'.$course['course_code'] .'/update') }}">Sửa</a>
                                </button>
                                <button class="btn btn-danger">
                                    <a href="{{ route('admin/courses/'.$course['course_code'] .'/delete') }}">Xoá</a>
                                </button>
                            </th>
{{--                            <th>--}}
{{--                                <a class="btn btn-primary" href="{{ route('admin/courses/'.$course['course_code'] .'/update') }}" role="button">Sửa</a>--}}
{{--                                <a class="btn btn-danger" href="{{ route('admin/courses/'.$course['course_code'] .'/delete') }}" role="button">Xoá</a>--}}
{{--                            </th>--}}

                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </main>
    <!-- MAIN -->
</section>
<!-- CONTENT -->
</body>
<script src="../assets/javascript/admin.js"></script>
</html>