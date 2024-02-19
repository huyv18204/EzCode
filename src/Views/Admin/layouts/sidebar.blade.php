<section id="sidebar">
    <a href="{{route('/')}}" class="mt-2 ms-4 brand">
        <img src="{{route('/assets/imgs/EZ.png')}}" alt="">
        <span class="ms-3 text">Admin</span>
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
                <i class='bx bxs-user' undefined></i>
                <span class="text">Quản lí khách hàng</span>
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