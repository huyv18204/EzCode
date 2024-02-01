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
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="stylesheet" href="{{route('/assets/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
</head>

<body>
<div class="wrapper">
    <!-- ===========header=========== -->
    <div class="header-class">
        <header class="header d-flex justify-content-between align-items-center">

            <a href="{{route('/')}}" class="logo ms-4 text-reset text-decoration-none">
                <img src="{{route('/assets/imgs/f8-icon.18cd71cfcfa33566a22b.png')}}" alt="">
                <i class=" ms-3 fa-solid fa-angle-left"></i>
                <span class="fw-bold">Quay lại</span>
            </a>

            <div class="search">
                <div class="search-component d-flex justify-content-start align-items-center">
                    <i class="ms-3 fa-solid fa-magnifying-glass fa-lg" style="color: #bec0c1;"></i>
                    <input type="text" class="ms-2" placeholder="Tìm kiếm khoá học...">
                </div>
            </div>
            {{--            <div class=" me-5 d-flex justify-content-center align-items-center btn-function">--}}
            {{--                <a href="{{route('/auth/login')}}" class="text-reset">Đăng nhập</a>--}}
            {{--                <a class="d-flex justify-content-center align-items-center ms-3 btn-register" href="{{route('/auth/register')}}">Đăng kí</a>--}}
            {{--            </div>--}}
            <div class=" me-5 d-flex justify-content-center align-items-center btn-function">
                @if(isset($_SESSION['user']))
                    <div id="showCourse" href="" class="my-course text-reset">Khoá học của tôi</div>
                    <div id="courseList"">
                    <div class="d-flex justify-content-between mt-2">
                        <span>Khoá học của tôi</span>
                        <a href="">Xem tất cả</a>
                    </div>
                    <a class="d-flex mt-3 course-component-list" href="">
                        <div><img src="{{route('/assets/imgs/62f13d2424a47.png')}}" alt=""></div>
                        <div class="ms-4 course-title-list">NodeJS Express</div>
                    </a>

            </div>
            @if(empty($_SESSION['user']['image']))
                <div id="showButton" href="" class="text-reset ms-4"><img src="{{route('/assets/imgs/user.png')}}"
                                                                          alt=""></div>
                <div id="categoryList">
                    <li><a href="{{route('/client/profile')}}">Trang cá nhân</a></li>
                    <li><a href="">Cài Đặt</a></li>
                    <li><a href="{{route('/client/logout')}}">Đăng Xuất</a></li>
                </div>
            @else
                <div id="showButton" href="" class="text-reset ms-4"><img src="{{$_SESSION['user']['image']}}" alt="">
                </div>
                <div id="categoryList">
                    <li><a href="{{route('/client/profile')}}">Trang cá nhân</a></li>
                    <li><a href="">Cài Đặt</a></li>
                    <li><a href="{{route('/client/logout')}}">Đăng Xuất</a></li>
                </div>
            @endif
            @else
                <a href=" {{ route('/auth/login')}}" class="text-reset">Đăng nhập</a>
                <a class="d-flex justify-content-center align-items-center ms-3 btn-register"
                   href="{{ route('/auth/register')}}">Đăng kí</a>
            @endif
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
                    <a class="btn-homepage d-flex flex-column align-items-center justify-content-center" href="{{route('/')}}">
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
            <div class="course-detail row gx-5 mt-5 ms-3">
                <div class="col-7">
                    <div class="detail-title-course">
                        <h2>{{$course['name']}}</h2>
                        <p class="description mt-3">
                            {{$course['description']}}
                        </p>
                    </div>
                    <div class="course-content mt-5">
                        <h5 class="fw-bold">Nội dung khoá học</h5>
                        <div class="course-info">
                            <span>{{$count_lecture['count_lecture']}} bài học</span>
                        </div>
                        <div class="mt-5">
                            @foreach($lectures as $key => $lecture)
                                @if(empty($order))
                                    <div class="lecture ps-3 d-flex align-items-center mb-2">
                                        <i class="fa-solid fa-plus" style="color: #f15f36;"></i>
                                        <span class="ms-3">{{$key + 1}}. {{$lecture['name']}}</span>
                                    </div>
                                @else
                                    <a href="{{route('/client/'.$course['course_code'].'/learning/'.$lecture['id'])}}"
                                       class="text-reset text-decoration-none">
                                        <div class="lecture ps-3 d-flex align-items-center mb-2">
                                            <i class="fa-solid fa-plus" style="color: #f15f36;"></i>
                                            <span class="ms-3">{{$key + 1}}. {{$lecture['name']}}</span>
                                        </div>
                                    </a>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="detail-block-2 col-5 d-flex flex-column align-items-center">
                    <div class="">
                        @if(empty($order))
                            <img src="{{route($course['image'])}}" alt="">
                        @else
                            <a href="{{route('/client/'.$course['course_code'].'/learning/'.$lectures[0]['id'])}}"><img
                                        src="{{route($course['image'])}}" alt=""></a>
                        @endif
                    </div>
                    @if(empty($order))
                        <div class="mt-4">
                            @if(empty($course['discount']))
                                <del class="old-price fw-light">
                                    {{ number_format($course['price'], 0, '.', '.')}}đ
                                </del>
                            @else
                                <del class="old-price fw-light">
                                    {{number_format($course['price'], 0, '.', '.')}}đ
                                </del>
                                <span class="price">
                                {{number_format($course['discount'], 0, '.', '.')}}đ
                            </span>
                            @endif
                        </div>
                    @endif

                    <div class="mt-3">
                        <button class="btn-course-register">
                            @if(empty($order))
                                <a href="{{route('/client/'.$course['course_code'].'/payment')}}">MUA KHOÁ HỌC</a>
                            @else
                                <a href="{{route('/client/'.$course['course_code'].'/learning/'.$lectures[0]['id'])}}">BẮT ĐẦU HỌC</a>
                            @endif

                        </button>
                    </div>
                    <div class="mt-4">
                        <div class="mt-3">
                            <i class="fa-solid fa-turn-up fa-sm"></i>
                            <span class="ms-3">Trình độ cơ bản</span>
                        </div>
                        <div class="mt-3">
                            <i class="fa-solid fa-film fa-sm"></i>
                            <span class="ms-3">Tổng số bài học</span>

                        </div>
                        <div class="mt-3">
                            <i class="fa-solid fa-clock fa-sm"></i>
                            <span class="ms-3">Thời lượng 03 giờ 26 phút</span>
                        </div>
                        <div class="mt-3">
                            <i class="fa-solid fa-bolt fa-sm"></i>
                            <span class="ms-3"> Học mọi lúc, mọi nơi</span>
                        </div>
                    </div>
                </div>

            </div>
        </section>
    </main>
    <!-- ===========footer=========== -->
    <footer class="footer mt-5">
        <div class="container-footer row gx-5 pt-5 align-items-center">
            <div class="col-3">
                <div class="logo">
                    <img src="{{route('/assets/imgs/f8-icon.18cd71cfcfa33566a22b.png')}}" alt="">
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
<script src="{{route('/assets/javascript/main.js')}}"></script>

</html>