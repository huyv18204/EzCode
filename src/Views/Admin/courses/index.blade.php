@extends('layouts.admin')
@section('content')
    <main>
        <div class="head-title">
            <div class="left">
                <h1>Quản lí khoá học</h1>
                <ul class="breadcrumb">
                    <li>
                        <a href="#">Bảng điều khiển</a>
                    </li>
                    <li><i class='bx bx-chevron-right'></i></li>
                    <li>
                        <a class="active" href="#">Quản lí khoá học</a>
                    </li>
                </ul>
            </div>
            <a href="{{ route('/admin/courses/create') }}" class="btn-download">
                <i class='bx bx-plus' style='color:#ffffff'></i>
                <span class="text">Thêm khoá học</span>
            </a>
        </div>

        <div class="table-data">
            <div class="order">
                <div class="head">
                    <h3>Danh sách khoá học</h3>
                    <i class='bx bx-search'></i>
                    <i class='bx bx-filter'></i>
                </div>
                <table>
                    <thead>
                    <tr>
                        <th>Mã Khoá Học</th>
                        <th>Tên Khoá Học</th>
                        <th>Ảnh</th>
                        <th>Danh Mục</th>
                        <th>Giá</th>
                        <th>Giảm Giá</th>
                        <th>Chức Năng</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($courses as $course)
                        <tr>
                            <td> {{ $course['course_code'] }}</td>
                            <td>{{ $course['name'] }}</td>
                            <td><img src="{{route($course['image'])}}" alt=""></td>
                            <td>
                                @foreach ($course_categories as $course_category)
                                    @if ($course['course_code'] == $course_category['course_code'])
                                        <li>{{$course_category['name']}}</li>
                                    @endif
                                @endforeach
                            </td>
                            <td>{{ $course['price'] }}</td>
                            <td>{{ $course['discount'] }}</td>
                            <th>
                                <button class="btn btn-warning">
                                    <a href="{{ route('/admin/lectures/'.$course['course_code']) }}">Bài Học</a>
                                </button>
                                <button class="btn btn-primary">
                                    <a href="{{ route('/admin/courses/'.$course['course_code'] .'/update') }}">Sửa</a>
                                </button>
                                <button class="btn btn-danger">
                                    <a onclick="return confirm('Bạn có muốn xoá không?')"
                                       href="{{ route('/admin/courses/'.$course['course_code'] .'/delete') }}">Xoá</a>
                                </button>
                            </th>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </main>
@endsection