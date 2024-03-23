@extends('layouts.admin')

@section('title', 'Cài đặt')

@section('styles')

@endsection

@section('page-body')
    <div class="container-xl">
        <div class="card">
            <div class="row g-0">
                <div class="col-12 col-md-3 border-end">
                    <div class="card-body">
                        <h4 class="subheader">Cài đặt</h4>
                        <div class="list-group list-group-transparent">
                            <a href="./settings.html"
                                class="list-group-item list-group-item-action d-flex align-items-center active">Tài
                                khoản</a>
                            <a href="#" class="list-group-item list-group-item-action d-flex align-items-center">Thông
                                báo</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-9 d-flex flex-column">
                    <div class="card-body">
                        <h2 class="mb-4">Đỗ Hồng Quân</h2>
                        <div class="row align-items-center">
                            <div class="col-auto"><span class="avatar avatar-xl"
                                    style="background-image: url(./static/avatars/000m.jpg)"></span>
                            </div>
                            <div class="col-auto">
                                <a href="#" class="btn">
                                    Cập nhật ảnh đại diện
                                </a>
                            </div>
                        </div>
                        <h3 class="card-title mt-4">Thông tin cá nhân</h3>
                        <div class="row g-3">
                            <div class="col-md">
                                <div class="form-label">Họ và tên</div>
                                <input type="text" class="form-control" value="Tabler">
                            </div>
                            <div class="col-md">
                                <div class="form-label">Business ID</div>
                                <input type="text" class="form-control" value="560afc32">
                            </div>
                            <div class="col-md">
                                <div class="form-label">Location</div>
                                <input type="text" class="form-control" value="Peimei, China">
                            </div>
                        </div>
                        <h3 class="card-title mt-4">Email</h3>
                        <p class="card-subtitle">This contact will be shown to others publicly, so choose it carefully.</p>
                        <div>
                            <div class="row g-2">
                                <div class="col-auto">
                                    <input type="text" class="form-control w-auto" value="paweluna@howstuffworks.com">
                                </div>
                            </div>
                        </div>
                        <h3 class="card-title mt-4">Password</h3>
                        <p class="card-subtitle">You can set a permanent password if you don't want to use temporary login
                            codes.</p>
                        <div>
                            <a href="#" class="btn">
                                Set new password
                            </a>
                        </div>
                        <h3 class="card-title mt-4">Public profile</h3>
                        <p class="card-subtitle">Making your profile public means that anyone on the Dashkit network will be
                            able to find
                            you.</p>
                        <div>
                            <label class="form-check form-switch form-switch-lg">
                                <input class="form-check-input" type="checkbox">
                                <span class="form-check-label form-check-label-on">You're currently visible</span>
                                <span class="form-check-label form-check-label-off">You're
                                    currently invisible</span>
                            </label>
                        </div>
                    </div>
                    <div class="card-footer bg-transparent mt-auto">
                        <div class="btn-list justify-content-end">
                            <a href="#" class="btn">
                                Huỷ
                            </a>
                            <a href="#" class="btn btn-primary">
                                Cập nhật
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')

@endsection
