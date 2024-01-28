{{--@include('header')--}}
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
    <link rel="stylesheet" href="../../assets/css/admin.css">

    <title>AdminHub</title>
</head>

<body>

    <!-- SIDEBAR -->
@include('sidebar')
    <!-- SIDEBAR -->



    <!-- CONTENT -->
    <section id="content">
        <!-- NAVBAR -->
        <nav>
            <i class='bx bx-menu'></i>
            <a href="#" class="nav-link">Categories</a>
            <a href="#" class="nav-link">Categories</a>
            <form action="#">
                <div class="form-input">
                    <input type="search" placeholder="Search...">
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
                    <h1>Thêm danh mục</h1>
                    <ul class="breadcrumb">
                        <li>
                            <a href="#">Bảng điều khiển</a>
                        </li>
                        <li><i class='bx bx-chevron-right'></i></li>
                        <li>
                            <a class="active" href="#">Thêm danh mục</a>
                        </li>
                    </ul>
                </div>
            </div>
            <form action="" method="post" enctype="multipart/form-data">
                <div class="table-data">
                    <div class="order row">

                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Tên khoá học</label>
                                <input name="course_name" type="text" class="form-control" id="exampleFormControlInput1"
                                    placeholder="Khoá học Back-End">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Ảnh</label>
                                <input name="image" type="file" class="form-control" id="exampleFormControlInput1"
                                    placeholder="name@example.com">
                            </div>

                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Mô tả</label>
                                <textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                            <div class="mb-3 d-flex justify-content-end">
                                <button class="btn btn-primary me-3">
                                    <a href="?action=show_course" class="text-reset text-decoration-none">Quay lại</a></button>
                                <button name="btn-add" class="btn btn-success">Thêm</button>
                            </div>
                        </div>



                    </div>
                </div>
            </form>
        </main>
        <!-- MAIN -->
    </section>
    <!-- CONTENT -->

@include('footer')