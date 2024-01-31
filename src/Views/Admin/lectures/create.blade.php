@extends('layouts.admin')
@section('content')
    <main>
        <div class="head-title">
            <div class="left">
                <h1>Thêm danh mục</h1>
                <ul class="breadcrumb">
                    <li>
                        <a href="#">Bảng điều khiển</a>
                    </li>
                </ul>
            </div>
        </div>
        <form action="" method="post" enctype="multipart/form-data">
            <div class="table-data">
                <div class="order row">

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Tên bài học</label>
                        <input name="lecture_name" type="text" class="form-control" id="exampleFormControlInput1"
                               placeholder="">
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Url</label>
                        <input
                                name="url"
                                type="text"
                                class="form-control"
                                id="exampleFormControlInput1"
                                placeholder="">
                    </div>
                    <div class="mb-3 d-flex justify-content-end">
                        <button class="btn btn-primary me-3">
                            <a href="{{ route('/admin/lectures/'.$course_code) }}"
                               class="text-reset text-decoration-none">
                                Quay lại
                            </a>
                        </button>
                        <button name="btn-add"
                                class="btn btn-success">
                            Thêm
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </main>
@endsection