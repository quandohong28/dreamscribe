@extends('layouts.auth')

@section('title', 'Đăng ký')

@section('styles')
    <style>
        .toggle-password {
            cursor: pointer;
        }
    </style>
@endsection

@section('content')
    <form class="card card-md" action="./" method="get" autocomplete="off" novalidate>
        <div class="card-body">
            <h2 class="card-title text-center mb-4">Tạo tài khoản mới</h2>
            <div class="mb-3">
                <label class="form-label">Họ và tên</label>
                <input type="text" class="form-control" placeholder="VD: Đỗ Hồng Quân">
            </div>
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" class="form-control" placeholder="vidu@email.com">
            </div>
            <div class="mb-3">
                <label class="form-label">Mật khẩu</label>
                <div class="input-group input-group-flat">
                    <input type="password" class="form-control" autocomplete="off">
                    <span class="input-group-text">
                        <span class="link-secondary toggle-password" title="Hiển thị mật khẩu" data-bs-toggle="tooltip">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
                                <path
                                    d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6" />
                            </svg>
                        </span>
                    </span>
                </div>
            </div>
            <div class="mb-3">
                <label class="form-label">Xác nhận mật khẩu</label>
                <div class="input-group input-group-flat">
                    <input type="password" class="form-control" autocomplete="off">
                    <span class="input-group-text">
                        <span class="link-secondary toggle-password" title="Hiển thị mật khẩu" data-bs-toggle="tooltip">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
                                <path
                                    d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6" />
                            </svg>
                        </span>
                    </span>
                </div>
            </div>
            <div class="mb-3">
                <label class="form-check">
                    <input type="checkbox" class="form-check-input" />
                    <span class="form-check-label">Tôi đồng ý với <a href="./terms-of-service.html" tabindex="-1">Điều
                            khoản và điều kiện</a>.</span>
                </label>
            </div>
            <div class="form-footer">
                <button type="submit" class="btn btn-primary w-100">Tạo tài khoản</button>
            </div>
        </div>
    </form>
    <div class="text-center text-secondary mt-3">
        Đã có tài khoản <a href="{{ route('auth.login') }}" tabindex="-1">Đăng nhập</a>
    </div>
@endsection

@section('scripts')
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var togglePassword = document.querySelector('.toggle-password');
            var passwordField = document.querySelector('input[type="password"]');

            togglePassword.addEventListener('click', function(e) {
                e.preventDefault();

                if (passwordField.type === 'password') {
                    passwordField.type = 'text';
                } else {
                    passwordField.type = 'password';
                }
            });
        });
    </script>
@endsection
