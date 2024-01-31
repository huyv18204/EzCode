@extends('layouts.admin')
@section('content')
    <main>
        <div class="head-title">
            <div class="left">
                <h1>Sửa thông tin danh mục</h1>
                <ul class="breadcrumb">
                    <li>
                        <a href="#">Bảng điều khiển</a>
                    </li>
                    <li><i class='bx bx-chevron-right'></i></li>
                    <li>
                        <a class="active" href="#">Sửa thông tin danh mục</a>
                    </li>
                </ul>
            </div>
            <form action="" method="post" enctype="multipart/form-data">
                <div class="table-data">
                    <div class="order row">

                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Tên khoá học</label>
                            <input value="{{ $category['name'] }}" name="course_name" type="text" class="form-control"
                                   id="exampleFormControlInput1">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Ảnh</label>
                            <input name="image" type="file" class="form-control" id="exampleFormControlInput1"
                                   placeholder="name@example.com">
                        </div>

                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Mô tả</label>
                            <textarea name="description" class="form-control" id="exampleFormControlTextarea1"
                                      rows="3">{{ $category['description'] }}</textarea>
                        </div>
                        <div class="mb-3 d-flex justify-content-end">
                            <button class="btn btn-primary me-3">
                                <a href="{{ route('/admin/categories/') }}" class="text-reset text-decoration-none">Quay
                                    lại</a></button>
                            <button name="btn-edit" class="btn btn-success">Cập nhật</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </main>
@endsection