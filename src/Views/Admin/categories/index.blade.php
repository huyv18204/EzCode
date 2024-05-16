@extends('layouts.admin')
@section('title')
    Quản lí danh mục
@endsection
@section('content')
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
            <a href="{{ route('/admin/categories/create') }}" class="btn-download">
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
                        <th>STT</th>
                        <th>Tên Danh Mục</th>
                        <th>Ảnh</th>
                        <th>Chức Năng</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($categories as $key => $category)
                        <tr>
                            <td>{{$key + 1}}</td>
                            <td>
                                <p>{{ $category['name'] }}</p>
                            </td>
                            <td><img src="{{ route($category['image']) }}" alt=""></td>

                            <th>
                                <a class="btn btn-primary"
                                   href="{{ route('/admin/categories/'.$category['id'] .'/update') }}"
                                   role="button">Sửa</a>
                                <a class="btn btn-danger"
                                   onclick="return confirm('Bạn có muốn xoá không?')"
                                   href="{{ route('/admin/categories/'.$category['id'] .'/delete') }}"
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