@extends('layouts.admin')
@section('title')
    Cập nhật khoá học
@endsection
@section('content')
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
        </div>
        <form action="" method="post" enctype="multipart/form-data">
            <div class="table-data">
                <div class="order row">

                    <div class="col-6">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Tên khoá học</label>
                            <input value="{{ $courses['name']}}" name="course_name" type="text"
                                   class="form-control"
                                   id="exampleFormControlInput1"
                                   placeholder="JS Nâng cao">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Giá</label>
                            <input value="{{ $courses['price']}}" name="price" type="number"
                                   class="form-control"
                                   id="exampleFormControlInput1"
                                   placeholder="name@example.com">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Giá giảm</label>
                            <input value="{{ $courses['discount']}}" name="discount" type="number"
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
                                @foreach ($categories as $category)
                                    @php
                                        $isChecked = false;
                                        foreach ($course_categories as $course_category) {
                                            if ($course_category['course_code'] == $courses['course_code'] && $course_category['category_id'] == $category['id']) {
                                                $isChecked = true;
                                                break;
                                            }
                                        }
                                    @endphp
                                    <div>
                                        <input {{ $isChecked ? "checked" : "" }}
                                               name="category_id[]"
                                               class="form-check-input"
                                               type="checkbox"
                                               value="{{ $category['id'] }}"/>
                                        {{ $category['name'] }}
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Mô tả</label>
                            <textarea name="description" class="form-control" id="exampleFormControlTextarea1"
                                      rows="3">{{ $courses['description'] }}</textarea>
                        </div>
                        <div class="mb-3 d-flex justify-content-end">
                            <button class="btn btn-primary me-3">
                                <a href="{{ route('/admin/courses/') }}" class="text-reset text-decoration-none">Quay lại</a>
                            </button>
                            <button name="btn-update" class="btn btn-success">Cập nhật</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </main>
@endsection
