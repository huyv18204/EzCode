<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang cá nhân</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
          integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="stylesheet" href="{{route('/assets/css/profile.css')}}">

</head>

<body>
<div class="wrapper">
    <div class="menu d-flex align-items-center ms-3">
        <a href="{{route('/')}}"><img src="{{route('/assets/imgs/EZ.png')}}" alt=""></a>
        <div class=" comeback ms-3">
            <i class='fa fa-angle-left' aria-hidden='true'></i>
            <span class=""><a href="{{route('/')}}">Quay lại</a></span>
        </div>
    </div>
    <div class="profile m-auto">
        <div class="cover-profile ">
            @if(empty($_SESSION['user']['image']))
                <img src="{{route('/assets/imgs/user.png')}}" alt="">
            @else
                <img src="{{route($_SESSION['user']['image'])}}" alt="">
            @endif
            <div>{{$_SESSION['user']['name']}}</div>
        </div>

        <div class="profile-content row gx-5">
            <div class="col-5">
                <div class="block-1">
                    <div class="ms-3 pt-3 me-3">
                        <span class="fw-bold">Giới thiệu</span>
                        <div class="d-flex mt-2">
                            <span><i class="fa-solid fa-user fa-sm" style="color: #7d7d7d;"></i></span>
                            <p class="ms-2">Thành viên của EzCode - Học lập trình để đi làm từ 8 tháng trước</p>
                        </div>
                    </div>
                </div>
                <div class="block-1 mt-3">
                    <div class="ms-3 pt-3 me-3">
                        <span class="fw-bold">Hoạt động gần đây</span>
                        <p class="mt-2">Chưa có hoạt động gần đây</p>
                    </div>
                </div>
            </div>

            <div class="col-7 block-1">
                <div class="ms-1 pt-3 me-3">
                    <span class="fw-bold">Các khoá học đã tham gia</span>
                    @if(!empty($course_orders))
                    @foreach($course_orders as $course_order)
                        <a class="text-decoration-none text-reset" href="{{route('/detail/'.$course_order['course_code'])}}">
                            <div class="d-flex mb-3 mt-3 course-component-list">
                                <div><img src="{{route($course_order['image'])}}" alt=""></div>
                                <div>
                                    <span class="fw-bold ms-3">{{$course_order['name']}}</span>
                                    <p class="ms-3 mt-2">{{$course_order['description']}}</p>
                                </div>
                            </div>
                        </a>
                    @endforeach
                    @else
                        <div class="d-flex align-items-center mt-5 justify-content-center">
                            <span>Bạn chưa tham gia khoá học nào.</span>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
</body>


</html>