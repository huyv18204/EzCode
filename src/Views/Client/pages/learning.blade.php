<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learning</title>
    <link rel="stylesheet" href="{{route('/assets/css/learning.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
          integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
</head>

<body>
<div class="wrapper">
    <div class="menu d-flex align-items-center">
        <a href="{{route('/detail/'.$course['course_code'])}}">
            <i class='fa fa-angle-left ms-4' aria-hidden='true'></i>
        </a>
        <img class="ms-4" src="{{route('/assets/imgs/f8-icon.18cd71cfcfa33566a22b.png')}}" alt="">
        <span class="ms-3">{{$course['name']}}</span>
    </div>
    <div class="course-video row gx-0">
        <div class="col-9">
            <div class="back-ground-video d-flex align-items-center justify-content-center">
                <iframe width="914" height="514" src="{{$lecture_url['url']}}"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen>
                </iframe>
            </div>
            <h2 class="mt-5 ms-5">{{$course['name']}}</h2>
            <p class="description mt-3 ms-5">
                {{$course['description']}}
            </p>
        </div>
        <div class="col-3">
            <div class="course-content mt-4">
                <h5 class="ms-4 fw-bold">Nội dung khoá học</h5>
                <div class="mt-4">
                    @foreach($lectures as $key => $lecture)
                        <a class="text-reset text-decoration-none"
                           href="{{route('/client/'.$course['course_code'].'/learning/'.$lecture['id'])}}">
                            <div class="lecture ps-3 d-flex align-items-center mb-2">
                                <i class="fa-solid fa-plus" style="color: #f15f36;"></i>
                                <span class="ms-2">{{$key + 1 .'. '. $lecture['name']}}</span>
                            </div>
                        </a>
                    @endforeach
                </div>

            </div>
        </div>
    </div>
    <div class="footer d-flex align-items-center justify-content-center">
        <a href="index.html" class="btn-prev me-3">
            <i class="fa-solid fa-angle-left"></i>
            <span class="ms-1">BÀI TRƯỚC</span>

        </a>
        <div class="btn-next ms-3 pe-2">
            <a href="index.html" class="">
                <span class="ms-3">BÀI TIẾP THEO</span>
            </a>
            <i class="fa-solid fa-angle-right"></i>
        </div>

    </div>
</div>
</body>
</html>