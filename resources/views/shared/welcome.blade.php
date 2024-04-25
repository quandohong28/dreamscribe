@extends('layouts.auth')

@section('title', 'Welcome to DreamScribe')

@section('styles')

@endsection

@section('content')
    <div class="card card-md">
        <div class="card-body text-center py-4 p-sm-5">
            <h1 class="mt-5">Chào mừng đến với Dreamscribe</h1>
            <p class="text-secondary">Chúng tôi sẽ thu thập một chút thông tin của bạn. Có thể bỏ qua trang này</p>
        </div>
        <div class="hr-text hr-text-center hr-text-spaceless">thông tin cá nhân</div>
        <div class="card-body">
            <div class="row mb-3">
                <div class="col-6">
                    <label class="form-label">Tuổi</label>
                    <div class="input-group input-group-flat">
                        <select name="" id="" class="form-select">
                            <option value="">1</option>
                            <option value="">1</option>
                        </select>
                    </div>
                </div>
                <div class="col-6">
                    <label class="form-label">Giới tính</label>
                    <div class="input-group input-group-flat">
                        <select name="" id="" class="form-select">
                            <option value="male">Nam</option>
                            <option value="female">Nữ</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Quê quán</label>
                <input type="text" class="form-control">
            </div>
        </div>
        <div class="card-footer">
            <div class="row align-items-center">
                <div class="col">
                    <div class="btn-list justify-content-end">
                        <a href="#" class="btn btn-link link-secondary">
                            Bỏ qua
                        </a>
                        <a href="#" class="btn btn-primary">
                            Tiếp tục
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')

@endsection
