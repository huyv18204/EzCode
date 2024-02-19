<div class="header-class">
    <header class="header d-flex justify-content-between align-items-center">
        <div class="logo ms-4">
            <a href="{{ route('/')}}"> <img src="../assets/imgs/EZ.png" alt=""></a>
            <span class="ms-3 fw-bold">Học lập trình để đi làm</span>
        </div>
        <div class=" me-5 d-flex justify-content-center align-items-center btn-function">
            <a href="{{ route('/auth/login')}}" class="text-reset">Đăng nhập</a>
            <a class="d-flex justify-content-center align-items-center ms-3 btn-register" href="{{ route('/auth/register')}}">Đăng kí</a>
        </div>
    </header>
</div>