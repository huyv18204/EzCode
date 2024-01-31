@extends('layouts.admin')
@section('content')
    <main>
        <div class="head-title">
            <div class="left">
                <h1>Thêm khoá học</h1>
                <ul class="breadcrumb">
                    <li>
                        <a href="#">Bảng điều khiển</a>
                    </li>
                    <li><i class='bx bx-chevron-right'></i></li>
                    <li>
                        <a class="active" href="#">Thêm khoá học</a>
                    </li>
                </ul>
            </div>
            <!--                <a href="#" class="btn-download">-->
            <!--                    <i class='bx bxs-cloud-download'></i>-->
            <!--                    <span class="text">Download PDF</span>-->
            <!--                </a>-->
        </div>
        <form action="" method="post" enctype="multipart/form-data">
            <div class="table-data">
                <div class="order row">

                    <div class="col-6">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Tên khoá học</label>
                            <input name="course_name" type="text" class="form-control" id="exampleFormControlInput1"
                                   placeholder="JS Nâng cao">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Giá</label>
                            <input name="price" type="number" class="form-control" id="exampleFormControlInput1"
                                   placeholder="name@example.com">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Giá giảm</label>
                            <input name="discount" type="number" class="form-control" id="exampleFormControlInput1"
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
                            <input name="category_id[]" class="form-check-input" type="checkbox" value="1"> Front-End
                            <input name="category_id[]" class="form-check-input" type="checkbox" value="2"> Back-End

                        </div>

                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Mô tả</label>
                            <textarea name="description" class="form-control" id="exampleFormControlTextarea1"
                                      rows="3"></textarea>
                        </div>
                        <div class="mb-3 d-flex justify-content-end">
                            <button class="btn btn-primary me-3">
                                <a href="{{ route('/admin/courses/') }}" class="text-reset text-decoration-none">Quay
                                    lại</a></button>
                            <button name="btn-add" class="btn btn-success">Thêm</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </main>
@endsection