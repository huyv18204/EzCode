@include('header')


<!-- SIDEBAR -->
@include('sidebar')
<!-- SIDEBAR -->


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
                <h1>Quản lí danh mục</h1>
                <ul class="breadcrumb">
                    <li>
                        <a href="#">Bảng điều khiển</a>
                    </li>
                    <li><i class='bx bx-chevron-right'></i></li>
                    <li>
                        <a class="active" href="#">Quản lí danh mục</a>
                    </li>
                </ul>
            </div>
            <a href="{{ route('admin/categories/create') }}" class="btn-download">
                <i class='bx bx-plus' style='color:#ffffff'></i>
                <span class="text">Thêm danh mục</span>
            </a>
        </div>

        <div class="table-data">
            <div class="order">
                <div class="head">
                    <h3>Danh sách danh mục</h3>
                    <i class='bx bx-search'></i>
                    <i class='bx bx-filter'></i>
                </div>
                <table>
                    <thead>
                    <tr>
                        <th>Tên Danh Mục</th>
                        <th>Ảnh</th>
                        <th>Chức Năng</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($categories as $category): ?>
                    <tr>
                        <td>
                            <p><?= $category['name'] ?></p>
                        </td>
                        <td><img src="src/Uploads/<?= $category['image'] ?>" alt=""></td>
                        <th>
                            <a class="btn btn-primary"
                               href="{{ route('admin/categories/'.$category['id'] .'/update') }}" role="button">Sửa</a>
                            <a class="btn btn-danger" href="{{ route('admin/categories/'.$category['id'] .'/delete') }}"
                               role="button">Xoá</a>
                        </th>
                    </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </main>
    <!-- MAIN -->
</section>
<!-- CONTENT -->
@include('footer')