@extends('layouts.auth')

@section('title', 'Đăng nhập')

@section('styles')
    <style>
        .toggle-password {
            cursor: pointer;
        }
    </style>
@endsection

@section('content')
    <div class="text-center mb-4">
    </div>
    <div class="card card-md">
        <div class="card-body">
            <h2 class="h2 text-center mb-4">Đăng nhập</h2>
            <form action="./" method="get" autocomplete="off" novalidate>
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" class="form-control" placeholder="vidu@email.com" autocomplete="off">
                </div>
                <div class="mb-2">
                    <label class="form-label">
                        Mật khẩu
                        <span class="form-label-description">
                            <a href="{{ route('auth.forgot') }}">Quên mật khẩu</a>
                        </span>
                    </label>
                    <div class="input-group input-group-flat">
                        <input type="password" class="form-control" autocomplete="off">
                        <span class="input-group-text">
                            <span href="#" class="link-secondary toggle-password" title="Hiển thị mật khẩu"
                                data-bs-toggle="tooltip">
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
                <div class="mb-2">
                    <label class="form-check">
                        <input type="checkbox" class="form-check-input" />
                        <span class="form-check-label">Nhớ mật khẩu</span>
                    </label>
                </div>
                <div class="form-footer">
                    <button type="submit" class="btn btn-primary w-100">Đăng nhập</button>
                </div>
            </form>
        </div>
        <div class="hr-text">hoặc</div>
        <div class="card-body">
            <div class="row">
                <div class="col">
                    <a href="#" class="btn w-100">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon text-github" width="24" height="24"
                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path
                                d="M9 19c-4.3 1.4 -4.3 -2.5 -6 -3m12 5v-3.5c0 -1 .1 -1.4 -.5 -2c2.8 -.3 5.5 -1.4 5.5 -6a4.6 4.6 0 0 0 -1.3 -3.2a4.2 4.2 0 0 0 -.1 -3.2s-1.1 -.3 -3.5 1.3a12.3 12.3 0 0 0 -6.2 0c-2.4 -1.6 -3.5 -1.3 -3.5 -1.3a4.2 4.2 0 0 0 -.1 3.2a4.6 4.6 0 0 0 -1.3 3.2c0 4.6 2.7 5.7 5.5 6c-.6 .6 -.6 1.2 -.5 2v3.5" />
                        </svg>
                        Đăng nhập với Github
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="text-center text-secondary mt-3">
        Chưa có tài khoản <a href="{{ route('auth.register') }}" tabindex="-1">Đăng ký</a>
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
