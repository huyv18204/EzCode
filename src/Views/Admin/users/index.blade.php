@extends('layouts.admin')
@section('content')
    <main>
        <div class="head-title">
            <div class="left">
                <h1>Quản lí khách hàng</h1>
                <ul class="breadcrumb">
                    <li>
                        <a href="#">Bảng điều khiển</a>
                    </li>
                    <li><i class='bx bx-chevron-right'></i></li>
                    <li>
                        <a class="active" href="#">Quản lí khách hàng</a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="table-data">
            <div class="order">
                <div class="head">
                    <h3>Danh sách khách hàng</h3>
                    <i class='bx bx-search'></i>
                    <i class='bx bx-filter'></i>
                </div>
                <table>
                    <thead>
                    <tr>
                        <th>Tên</th>
                        <th>Email</th>
                        <th>Vai trò</th>
                        <th>Trạng Thái</th>
                        <th>Chức Năng</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach ($users as $user)
                        <tr>
                            <td>
                                {{ $user['name'] }}
                            </td>
                            <td>{{ $user['email'] }}</td>
                            <td>{{ $user['role'] == 1 ? "Khách hàng" : "Quản trị viên" }}</td>
                            <td>
                                <span class="status completed">{{ $user['status'] == 1 ? "Kích hoạt" : "Chưa kích hoạt" }}</span>
                            </td>
                            <td>
                                <button class="btn btn-danger">
                                    <a href="{{ route('/admin/users/'.$user['id'] .'/update/'.$user['status']) }}">
                                        {{ $user['status'] == 1 ? "Vô hiệu hoá" : "Kích hoạt" }}
                                    </a>
                                </button>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </main>
@endsection