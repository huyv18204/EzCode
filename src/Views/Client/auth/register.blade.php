@extends('layouts.master')
@section('title')
    Đăng kí
@endsection
@section('content')
    <form action="" method="post">
        <main class="main row justify-content-center">
            <div class="mt-5 d-flex align-items-center justify-content-center">
                <div class="auth d-flex align-items-center  flex-column">
                    <h3 class="mt-3">Đăng kí tài khoản EzCode</h3>
                    <div class="mt-4 data-input">
                        <lable>Email:</lable>
                        <input name="email" class="form-control" type="text">
                    </div>
                    <div class="mt-2 data-input">
                        <lable>Họ và tên:</lable>
                        <input name="name" class="form-control" type="text">
                    </div>
                    <div class="mt-2 data-input">
                        <lable>Mật khẩu:</lable>
                        <input name="password" class="form-control" type="password">
                    </div>
                    <div class="mt-2 data-input">
                        <lable>Nhập lại mật khẩu:</lable>
                        <input name="re-password" class="form-control" type="password">
                    </div>
                    <button name="btn-register" class="login btn mt-5 align-items-end" type="submit">Đăng kí</button>
                    <span class="mt-4">--------------------------------------</span>
                    <a class="forgot mt-3" href="">Quên mật khẩu</a>
                </div>
            </div>
        </main>
    </form>
@endsection