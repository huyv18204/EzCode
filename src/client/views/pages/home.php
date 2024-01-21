<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
          integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
          crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="src/assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
</head>

<body>
<div class="wrapper">
    <!-- ===========header=========== -->
    <div class="header-class">
        <header class="header d-flex justify-content-between align-items-center">
            <div class="logo ms-4">
                <img src="src/assets/imgs//f8-icon.18cd71cfcfa33566a22b.png" alt="">
                <span class="ms-3 fw-bold">Học lập trình để đi làm</span>
            </div>
            <div class="search">
                <div class="search-component d-flex justify-content-start align-items-center">
                    <i class="ms-3 fa-solid fa-magnifying-glass fa-lg" style="color: #bec0c1;"></i>
                    <input type="text" class="ms-2" placeholder="Tìm kiếm khoá học...">
                </div>
            </div>
            <div class=" me-5 d-flex justify-content-center align-items-center btn-function">
                <a href="" class="text-reset">Đăng nhập</a>
                <a class="d-flex justify-content-center align-items-center ms-3 btn-register" href="">Đăng kí</a>
            </div>
        </header>
    </div>
    <!-- ===========end header=========== -->
    <main class="main row justify-content-center">
        <!-- ===========nav=========== -->
        <div class="nav-class">
            <nav class=" col-1 nav d-flex flex-column align-items-end">
                <li class="d-flex align-items-center justify-content-center">
                    <a class="add d-flex align-items-center justify-content-center" href="">
                        <i class="fa-solid fa-plus" style="color: #ffffff;"></i>
                    </a>
                </li>
                <li class="d-flex align-items-center justify-content-center">
                    <a class="btn-homepage d-flex flex-column align-items-center justify-content-center" href="">
                        <i class="fa-solid fa-house"></i>
                        <p>Trang chủ</p>
                    </a>
                </li>
                <li class="d-flex align-items-center justify-content-center">
                    <a class="btn-roadmap d-flex flex-column align-items-center justify-content-center" href="">
                        <i class="fa-solid fa-road"></i>
                        <p>Lộ trình</p>
                    </a>
                </li>
            </nav>
        </div>
        <!-- ===========end nav=========== -->
        <section class="col-11">
            <!-- ===========banner=========== -->
            <div class="banner mt-3">
                <div class="slide active">
                    <a href=""><img src="src/assets/imgs/1.png" alt=""></a>
                </div>
                <div class="slide active">
                    <a href=""><img src="src/assets/imgs//2.png" alt=""></a>
                </div>
                <div class="slide active">
                    <a href=""><img src="src/assets/imgs//3.png" alt=""></a>
                </div>
                <div class="slide active">
                    <a href=""><img src="src/assets/imgs//4.png" alt=""></a>
                </div>
                <div class="slide active">
                    <a href=""><img src="src/assets/imgs//5.png" alt=""></a>
                </div>

            </div>
            <!-- ===========end banner=========== -->
            <!-- ===========course-main=========== -->
            <div class="course-main d-flex flex-column mt-3">
                <div class=" mx-5 mt-5 mb-3">
                    <div class="title-category">
                        <span class="course-title fw-bold">Khoá học Back-End</span>
                    </div>
                    <div class="course-component row gx-4 mt-4">
                        <div class="course col-3">
                            <a href="?action=detail"><img src="src/assets/imgs//62f13d2424a47.png" alt=""></a>
                            <h5 class="course-name mt-3 ms-1">HTML CSS</h5>
                            <del class="old-price fw-light">1.900.000đ</del>
                            <span class="price">1.200.000đ</span>
                        </div>
                        <div class="course col-3">
                            <img src="src/assets/imgs//62f13d2424a47.png" alt="">
                            <h5 class="course-name mt-3 ms-1">SASS</h5>
                            <del class="old-price fw-light">1.900.000đ</del>
                            <span class="price">1.200.000đ</span>
                        </div>
                        <div class="course col-3">
                            <img src="src/assets/imgs//62f13d2424a47.png" alt="">
                            <h5 class="course-name mt-3 ms-1">Js</h5>
                            <del class="old-price fw-light">1.900.000đ</del>
                            <span class="price">1.200.000đ</span>
                        </div>
                        <div class="course col-3">
                            <img src="src/assets/imgs//62f13d2424a47.png" alt="">
                            <h5 class="course-name mt-3 ms-1">NextJs</h5>
                            <del class="old-price fw-light">1.900.000đ</del>
                            <span class="price">1.200.000đ</span>
                        </div>
                    </div>
                </div>

                <div class=" mx-5 mt-5 mb-3">
                    <div class="title-category">
                        <span class="course-title fw-bold">Khoá học Front-End</span>
                    </div>
                    <div class="course-component row gx-4 mt-4">
                        <div class="course col-3">
                            <img src="src/assets/imgs//62f13d2424a47.png" alt="">
                            <h5 class="course-name mt-3 ms-1">HTML CSS</h5>
                            <del class="old-price fw-light">1.900.000đ</del>
                            <span class="price">1.200.000đ</span>
                        </div>
                        <div class="course col-3">
                            <img src="src/assets/imgs//62f13d2424a47.png" alt="">
                            <h5 class="course-name mt-3 ms-1">SASS</h5>
                            <del class="old-price fw-light">1.900.000đ</del>
                            <span class="price">1.200.000đ</span>
                        </div>
                        <div class="course col-3">
                            <img src="src/assets/imgs//62f13d2424a47.png" alt="">
                            <h5 class="course-name mt-3 ms-1">Js</h5>
                            <del class="old-price fw-light">1.900.000đ</del>
                            <span class="price">1.200.000đ</span>
                        </div>
                        <div class="course col-3">
                            <img src="src/assets/imgs//62f13d2424a47.png" alt="">
                            <h5 class="course-name mt-3 ms-1">NextJs</h5>
                            <del class="old-price fw-light">1.900.000đ</del>
                            <span class="price">1.200.000đ</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ===========end course-main=========== -->
        </section>
    </main>
    <!-- ===========footer=========== -->
    <footer class="footer mt-5">
        <div class="container-footer row gx-5 pt-5 align-items-center">
            <div class="col-3">
                <div class="logo">
                    <img src="src/assets/imgs/f8-icon.18cd71cfcfa33566a22b.png" alt="">
                    <span class="ms-3 fw-bold">Học lập trình để đi làm</span>
                </div>
                <div class="footer-content">
                    <p>Điện thoại: 0985906004</p>
                    <p>Email: fullstack.edu.vn</p>
                    <p>Số 11D, lô A10, khu đô thị Nam Trung Yên, Phường Yên Hòa, Quận Cầu Giấy, TP. Hà Nội</p>
                </div>
            </div>
            <div class="col-3">
                <div class="footer-title">VỀ EZCODE</div>
                <div class="footer-content">
                    <p>Giới thiệu</p>
                    <p>Liên hệ</p>
                    <p>Điều khoản</p>
                    <p>Bảo mật</p>
                    <p>Cơ hội việc làm</p>
                </div>
            </div>
            <div class="col-3">
                <div class="footer-title">SẢN PHẨM</div>
                <div class="footer-content">
                    <p>Game Nested</p>
                    <p>Game Css Diner</p>
                    <p>Game Css Selectors</p>
                    <p>Game Froggy</p>
                    <p>Game Froggy Fro</p>
                </div>
            </div>
            <div class="col-3">
                <div class="footer-title">CÔNG TY CỔ PHẦN CÔNG NGHỆ GIÁO DỤC EZCODE</div>
                <div class="footer-content">
                    <p>Mã số thuế: 0109922901</p>
                    <p>Ngày thành lập: 04/03/2022</p>
                    <p>Lĩnh vực: Công nghệ, giáo dục, lập trình. F8 xây dựng và phát triển những sản phẩm mang lại
                        giá trị cho cộng đồng.</p>
                </div>
            </div>
        </div>
    </footer>
    <!-- ===========end footer=========== -->
</div>
</body>
<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="src/assets/javascript/slick.js"></script>

</html>