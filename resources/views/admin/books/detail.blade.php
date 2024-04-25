@extends('layouts.admin')

@section('title', 'Chi tiết - Đại quản gia là ma hoàng')

@section('styles')

@endsection

@section('page-body')
    <div class="container-xl">
        <div class="row row-deck row-cards">
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Chi tiết truyện</h3>
                    </div>
                    <div class="card-body"></div>
                </div>
            </div>
            <div class="col-lg-8">
                <form class="card">
                    <div class="card-body">
                        <h3 class="card-title">Chỉnh sửa thông tin truyện</h3>
                        <div class="row row-cards">
                            <div class="col-md-7">
                                <div class="mb-3">
                                    <label class="form-label">Tiêu đề</label>
                                    <input type="text" class="form-control" value="Đại quản gia là Ma hoàng">
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-5">
                                <div class="mb-3">
                                    <label class="form-label">Tác giả</label>
                                    <input type="text" class="form-control" value="Khuyết danh">
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4">
                                <div class="mb-3">
                                    <label class="form-label">Quốc gia</label>
                                    <select class="form-control form-select">
                                        <option value="">Trung Quốc</option>
                                        <option value="">Việt Nam</option>
                                        <option value="">Trung Quốc</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-8">
                                <div class="mb-3">
                                    <div class="form-label">Thể loại</div>
                                    <select multiple class="form-select" id="select-states">
                                        <option value="AL">Alabama</option>
                                        <option value="AK">Alaska</option>
                                        <option value="AZ">Arizona</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Last Name</label>
                                    <input type="text" class="form-control" placeholder="Last Name" value="Faker">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">Address</label>
                                    <input type="text" class="form-control" placeholder="Home Address"
                                        value="Melbourne, Australia">
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4">
                                <div class="mb-3">
                                    <label class="form-label">City</label>
                                    <input type="text" class="form-control" placeholder="City" value="Melbourne">
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3">
                                <div class="mb-3">
                                    <label class="form-label">Postal Code</label>
                                    <input type="test" class="form-control" placeholder="ZIP Code">
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="mb-3">
                                    <label class="form-label">Country</label>
                                    <select class="form-control form-select">
                                        <option value="">Germany</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">Tóm tắt truyện</label>
                                    <textarea rows="15" class="form-control" placeholder="Here can be your description" value="Mike">

                                    </textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-end">
                        <button type="submit" class="btn btn-primary">Update Profile</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
@endsection
