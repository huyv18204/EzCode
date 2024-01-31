@extends('layouts.admin')
@section('content')
    <main>
        <div class="head-title">
            <div class="left">
                <h1>Quản lí bài học</h1>
                <ul class="breadcrumb">
                    <li>
                        <a href="#">Bảng điều khiển</a>
                    </li>
                    <li><i class='bx bx-chevron-right'></i></li>
                    <li>
                        <a class="active" href="#">Quản lí bài học</a>
                    </li>
                </ul>
            </div>
            <a href="{{ route('/admin/lectures/create/'.$code_course) }}" class="btn-download">
                <i class='bx bx-plus' style='color:#ffffff'></i>
                <span class="text">Thêm bài học</span>
            </a>
        </div>

        <div class="table-data">
            <div class="order">
                <div class="head">
                    <h3>{{$course['name']}}</h3>
                    <i class='bx bx-search'></i>
                    <i class='bx bx-filter'></i>
                </div>
                <table>
                    <thead>
                    <tr>
                        <th>STT</th>
                        <th>Tên Bài Học</th>
                        <th>Url</th>
                        <th>Chức Năng</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($lectures as $lecture)
                        <tr>
                            <td>{{$lecture['id']}}</td>
                            <td>{{$lecture['name']}}</td>
                            <td>{{$lecture['url']}}</td>
                            <th style="width: 150px">
                                <a class="btn btn-primary"
                                   href="{{ route('/admin/lectures/'.$lecture['id'] .'/update/'.$lecture['course_code']) }}"
                                   role="button">Sửa</a>
                                <a onclick="return confirm('Bạn có muốn xoá không?')" class="btn btn-danger"
                                   href="{{ route('/admin/lectures/'.$lecture['id'] .'/delete/'.$lecture['course_code']) }}"
                                   role="button">Xoá</a>
                            </th>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </main>
@endsection