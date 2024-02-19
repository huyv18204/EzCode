@extends('layouts.admin')
@section('title')
    Thêm danh mục
@endsection
@section('content')
    <main>
        <div class="head-title">
            <div class="left">
                <h1>Thêm danh mục</h1>
                <ul class="breadcrumb">
                    <li>
                        <a href="#">Bảng điều khiển</a>
                    </li>
                    <li><i class='bx bx-chevron-right'></i></li>
                    <li>
                        <a class="active" href="#">Thêm danh mục</a>
                    </li>
                </ul>
            </div>
        </div>
        <form action="" method="post" enctype="multipart/form-data">
            <div class="table-data">
                <div class="order row">

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Tên khoá học</label>
                        <input name="course_name" type="text" class="form-control" id="exampleFormControlInput1"
                               placeholder="Khoá học Back-End">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Ảnh</label>
                        <input name="image" type="file" class="form-control" id="exampleFormControlInput1"
                               placeholder="name@example.com">
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Mô tả</label>
                        <textarea name="description" class="form-control" id="exampleFormControlTextarea1"
                                  rows="3"></textarea>
                    </div>
                    <div class="mb-3 d-flex justify-content-end">
                        <button class="btn btn-primary me-3">
                            <a href="{{ route('/admin/categories/') }}" class="text-reset text-decoration-none">Quay
                                lại</a></button>
                        <button name="btn-add" class="btn btn-success">Thêm</button>
                    </div>
                </div>


            </div>
            </div>
        </form>
    </main>
@endsection