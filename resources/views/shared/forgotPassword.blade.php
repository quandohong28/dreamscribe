@extends('layouts.auth')

@section('title', 'Quên mật khẩu')

@section('styles')

@endsection

@section('content')
    <form class="card card-md" action="./" method="get" autocomplete="off" novalidate>
        <div class="card-body">
            <h2 class="card-title text-center mb-4">Quên mật khẩu</h2>
            <p class="text-secondary mb-4">Nhập địa chỉ email của bạn và mật khẩu của bạn sẽ được đặt lại và gửi qua email
                cho bạn.</p>
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" class="form-control" placeholder="vidu@email.com">
            </div>
            <div class="form-footer">
                <a href="#" class="btn btn-primary w-100">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24"
                        stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M3 7a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10z" />
                        <path d="M3 7l9 6l9 -6" />
                    </svg>
                    Gửi cho tôi mật khẩu mới
                </a>
            </div>
        </div>
    </form>
    <div class="text-center text-secondary mt-3">
        <a href="{{ route('auth.login') }}">Đưa tôi quay lại trang đăng nhập</a>
    </div>
@endsection

@section('scripts')

@endsection
