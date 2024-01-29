<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng Nhập</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
          integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
</head>

<body>
<div class="wrapper">
    <!-- ===========header=========== -->
    <div class="header-class">
        <header class="header d-flex justify-content-between align-items-center">
            <div class="logo ms-4">
                <a href="{{ route('/')}}"> <img src="../assets/imgs/f8-icon.18cd71cfcfa33566a22b.png" alt=""></a>
                <span class="ms-3 fw-bold">Học lập trình để đi làm</span>
            </div>
            <div class=" me-5 d-flex justify-content-center align-items-center btn-function">
                <a href="{{ route('/auth/login')}}" class="text-reset">Đăng nhập</a>
                <a class="d-flex justify-content-center align-items-center ms-3 btn-register" href="{{ route('/auth/register')}}">Đăng kí</a>
            </div>
        </header>
    </div>
    <!-- ===========end header=========== -->
    <form action="" method="post">
    <main class="main row justify-content-center">
        <div class="mt-5 d-flex align-items-center justify-content-center">
            <div class="auth d-flex align-items-center  flex-column">
                <h3 class="mt-3">Đăng nhập vào EzCode</h3>
                <div class="mt-4 data-input">
                    <lable>Tên tài khoản</lable>
                    <input name="email" class="form-control" type="text">
                </div>
                <div class="mt-3 data-input">
                    <lable>Mật khẩu</lable>
                    <input name="password" class="form-control" type="password">
                </div>
                <button name="btn-login" class="login btn mt-5 align-items-end" type="submit">Đăng nhập</button>
                <span class="mt-4">--------------------------------------</span>
                <a class="forgot mt-3" href="">Quên mật khẩu</a>
            </div>
        </div>
    </main>
    </form>
    <!-- ===========footer=========== -->
    <footer class="footer mt-5">
        <div class="container-footer row gx-5 pt-5 align-items-center">
            <div class="col-3">
                <div class="logo">
                    <img src="../assets/imgs/f8-icon.18cd71cfcfa33566a22b.png" alt="">
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
<script src="assets/javascript/slick.js"></script>

</html>