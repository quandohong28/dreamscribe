@extends('layouts.auth')

@section('title', 'Khoá màn hình')

@section('styles')

@endsection

@section('content')
    <div class="text-center mb-4">
        <a href="." class="navbar-brand navbar-brand-autodark">
            <img src="./static/logo.svg" width="110" height="32" alt="Tabler" class="navbar-brand-image">
        </a>
    </div>
    <form class="card card-md" action="./" method="get" autocomplete="off" novalidate>
        <div class="card-body text-center">
            <div class="mb-4">
                <h2 class="card-title">Account Locked</h2>
                <p class="text-secondary">Please enter your password to unlock your account</p>
            </div>
            <div class="mb-4">
                <span class="avatar avatar-xl mb-3" style="background-image: url(./static/avatars/000m.jpg)"></span>
                <h3>Paweł Kuna</h3>
            </div>
            <div class="mb-4">
                <input type="password" class="form-control" placeholder="Password&hellip;">
            </div>
            <div>
                <a href="#" class="btn btn-primary w-100">
                    <!-- Download SVG icon from http://tabler-icons.io/i/lock-open -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24"
                        stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M5 11m0 2a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v6a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2z" />
                        <path d="M12 16m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                        <path d="M8 11v-5a4 4 0 0 1 8 0" />
                    </svg>
                    Unlock
                </a>
            </div>
        </div>
    </form>

@endsection

@section('scripts')

@endsection
