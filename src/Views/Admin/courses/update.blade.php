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
    <link rel="stylesheet" href="../../../assets/css/admin.css">

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
                    <h1>Sửa thông tin khoá học</h1>
                    <ul class="breadcrumb">
                        <li>
                            <a href="#">Bảng điều khiển</a>
                        </li>
                        <li><i class='bx bx-chevron-right'></i></li>
                        <li>
                            <a class="active" href="#">Sửa thông tin khoá học</a>
                        </li>
                    </ul>
                </div>
                <!--            <a href="#" class="btn-download">-->
                <!--                <i class='bx bxs-cloud-download'></i>-->
                <!--                <span class="text">Download PDF</span>-->
                <!--            </a>-->
            </div>
            <form action="" method="post" enctype="multipart/form-data">
                <div class="table-data">
                    <div class="order row">

                        <div class="col-6">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Tên khoá học</label>
                                <input value="<?= $courses['name'] ?>" name="course_name" type="text"
                                       class="form-control"
                                       id="exampleFormControlInput1"
                                       placeholder="JS Nâng cao">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Giá</label>
                                <input value="<?= $courses['price'] ?>" name="price" type="number"
                                       class="form-control"
                                       id="exampleFormControlInput1"
                                       placeholder="name@example.com">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Giá giảm</label>
                                <input value="<?= $courses['discount'] ?>" name="discount" type="number"
                                       class="form-control"
                                       id="exampleFormControlInput1"
                                       placeholder="name@example.com">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Ảnh</label>
                                <input name="image" type="file" class="form-control" id="exampleFormControlInput1"
                                       placeholder="name@example.com">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Danh mục</label>
                                <div>
                                    <?php foreach ($categories as $category) : ?>
                                        <?php
                                        $isChecked = false;
                                        foreach ($course_categories as $course_category) {
                                            if ($course_category['course_code'] == $courses['course_code'] && $course_category['category_id'] == $category['id']) {
                                                $isChecked = true;
                                                break;
                                            }
                                        }
                                        ?>
                                        <div>
                                            <input <?= $isChecked ? "checked" : "" ?>
                                                    name="category_id[]"
                                                    class="form-check-input"
                                                    type="checkbox"
                                                    value="<?= $category['id'] ?>"
                                        </div>

                                        <?= $category['name'] ?>
                                    <?php endforeach; ?>

                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Mô tả</label>
                                <textarea name="description" class="form-control" id="exampleFormControlTextarea1"
                                          rows="3"><?= $courses['description'] ?></textarea>
                            </div>
                            <div class="mb-3 d-flex justify-content-end">
                                <button class="btn btn-primary me-3">
                                    <a href="{{ route('admin/courses/') }}" class="text-reset text-decoration-none">Quay lại</a></button>
                                </button>
                                <button name="btn-update" class="btn btn-success">Cập nhật</button>
                            </div>
                        </div>


                    </div>
                </div>
            </form>
        </main>
        <!-- MAIN -->
    </section>
    <!-- CONTENT -->

</body>
<script src="../../../assets/javascript/admin.js"></script>
</html>