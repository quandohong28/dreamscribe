@extends('layouts.client')

@section('title', 'Trang chủ')

@section('styles')

@endsection

@section('content')

    <div class="card mt-5">
        <div class="card-header">
            <h4 class="card-title fw-bold text-uppercase text-primary">Trang cá nhân</h4>
        </div>
        <div class="row p-3 mb-5">
            <div class="col-4">
                <div class="card">
                    <div class="card-body">
                        <div class="text-center mb-5">
                            <div class="card-title">Thông tin cơ bản</div>
                            <img src="https://p.ntcdntempv26.com/content/image.jpg?url=https://1.bp.blogspot.com/-DFdQ1q2SaUs/WtuC0Utob9I/AAAAAAABiEc/rRQ9PtVAFVwNPT5zcebGqOzsr_jXV8hwACKgBGAs/h120/14-yaoming.gif"
                                class="rounded-circle border mb-3" width="150px" alt="">
                            <div class="d-flex flex-column">
                                <p class="mb-1">
                                    <span class="h3 fw-bold">Đỗ Hồng Quân</span>
                                    <span class="badge">Chí tôn</span>
                                </p>
                            </div>
                        </div>
                        <div class="mb-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round"
                                class="icon me-2 icon-tabler icons-tabler-outline icon-tabler-user-pentagon">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path
                                    d="M13.163 2.168l8.021 5.828c.694 .504 .984 1.397 .719 2.212l-3.064 9.43a1.978 1.978 0 0 1 -1.881 1.367h-9.916a1.978 1.978 0 0 1 -1.881 -1.367l-3.064 -9.43a1.978 1.978 0 0 1 .719 -2.212l8.021 -5.828a1.978 1.978 0 0 1 2.326 0z" />
                                <path d="M12 13a3 3 0 1 0 0 -6a3 3 0 0 0 0 6z" />
                                <path d="M6 20.703v-.703a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v.707" />
                            </svg>
                            Bí danh: <strong></strong>
                        </div>
                        <div class="mb-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="icon me-2 icon-tabler icons-tabler-outline icon-tabler-user">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
                                <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                            </svg>
                            Tài khoản: <strong></strong>
                        </div>
                        <div class="mb-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="icon me-2 icon-tabler icons-tabler-outline icon-tabler-mail">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M3 7a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10z" />
                                <path d="M3 7l9 6l9 -6" />
                            </svg>
                            Email: <strong></strong>
                        </div>
                        <div class="mb-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round"
                                class="icon icon-tabler me-2 icons-tabler-outline icon-tabler-phone">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path
                                    d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2" />
                            </svg>
                            Số điện thoại: <strong></strong>
                        </div>
                        <div class="mb-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round"
                                class="icon icon-tabler icons-tabler-outline icon-tabler-current-location me-2">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M12 12m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
                                <path d="M12 12m-8 0a8 8 0 1 0 16 0a8 8 0 1 0 -16 0" />
                                <path d="M12 2l0 2" />
                                <path d="M12 20l0 2" />
                                <path d="M20 12l2 0" />
                                <path d="M2 12l2 0" />
                            </svg>
                            Địa chỉ: <strong><span class="flag flag-country-si"></span></strong>
                        </div>
                        <div class="mb-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon me-2 text-secondary" width="24"
                                height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M4 7a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12z" />
                                <path d="M16 3v4" />
                                <path d="M8 3v4" />
                                <path d="M4 11h16" />
                                <path d="M11 15h1" />
                                <path d="M12 15v3" />
                            </svg>
                            Ngày sinh: <strong>13/01/1985</strong>
                        </div>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon me-2 text-secondary" width="24"
                                height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0" />
                                <path d="M12 7v5l3 3" />
                            </svg>
                            Ngày tu luyện: <strong></strong>
                        </div>
                    </div>
                    <div class="card-footer text-center">
                        <a href="#" class="btn btn-red">
                            Khoá tài khoản
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-8">
                <div class="card border-0">
                    <div class="card-header">
                        <ul class="nav nav-tabs card-header-tabs" data-bs-toggle="tabs">
                            <li class="nav-item">
                                <a href="#tabs-bio" class="nav-link active" data-bs-toggle="tab">Giới thiệu</a>
                            </li>
                            <li class="nav-item">
                                <a href="#tabs-store" class="nav-link" data-bs-toggle="tab">Cửa hàng</a>
                            </li>
                            <li class="nav-item">
                                <a href="#tabs-wallet" class="nav-link" data-bs-toggle="tab">Linh thạch</a>
                            </li>
                            <li class="nav-item">
                                <a href="#tabs-change-password" class="nav-link" data-bs-toggle="tab">Đổi mật khẩu</a>
                            </li>
                            <li class="nav-item">
                                <a href="#tabs-favourite" class="nav-link" data-bs-toggle="tab">Truyện yêu thích</a>
                            </li>
                            <li class="nav-item">
                                <a href="#tabs-transaction" class="nav-link" data-bs-toggle="tab">Lịch sử giao dịch</a>
                            </li>
                            <li class="nav-item ms-auto">
                                <a href="#tabs-settings" class="nav-link" title="Settings" data-bs-toggle="tab">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path
                                            d="M10.325 4.317c.426 -1.756 2.924 -1.756 3.35 0a1.724 1.724 0 0 0 2.573 1.066c1.543 -.94 3.31 .826 2.37 2.37a1.724 1.724 0 0 0 1.065 2.572c1.756 .426 1.756 2.924 0 3.35a1.724 1.724 0 0 0 -1.066 2.573c.94 1.543 -.826 3.31 -2.37 2.37a1.724 1.724 0 0 0 -2.572 1.065c-.426 1.756 -2.924 1.756 -3.35 0a1.724 1.724 0 0 0 -2.573 -1.066c-1.543 .94 -3.31 -.826 -2.37 -2.37a1.724 1.724 0 0 0 -1.065 -2.572c-1.756 -.426 -1.756 -2.924 0 -3.35a1.724 1.724 0 0 0 1.066 -2.573c-.94 -1.543 .826 -3.31 2.37 -2.37c1 .608 2.296 .07 2.572 -1.065z" />
                                        <path d="M9 12a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" />
                                    </svg>
                                </a>
                            </li>
                        </ul>
                    </div>

                    {{-- switch các card --}}
                    <div class="card-body">
                        <div class="tab-content">
                            <div class="tab-pane active show" id="tabs-bio">
                                <h4 class="text-primary">Giới thiệu</h4>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt, nihil cupiditate iusto
                                    maxime eaque molestias quia aspernatur est, quae ipsa quisquam a qui suscipit aperiam
                                    consequuntur nulla non consequatur, at autem dignissimos exercitationem atque! Mollitia
                                    aperiam nihil hic, consequatur ab recusandae nulla architecto. Natus perferendis dicta
                                    doloribus inventore dolores ex, accusantium dolorum debitis aut ipsum hic excepturi
                                    sapiente ipsa rem nesciunt cupiditate quae repudiandae explicabo fuga consequuntur iusto
                                    dignissimos. Sapiente inventore labore nihil quia, maxime ea impedit iure dolorum aut
                                    ipsum pariatur, excepturi officiis soluta, eos laboriosam enim. Ipsam temporibus
                                    voluptas harum laboriosam! Sequi incidunt aliquid minima. Eius, consectetur dolorum!</p>
                            </div>
                            <div class="tab-pane" id="tabs-store">
                                <h4 class="text-primary">Cửa hàng</h4>

                            </div>
                            <div class="tab-pane" id="tabs-wallet">
                                <h4 class="text-primary">Giới chỉ</h4>

                                <p class="fw-bold">Linh thạch hiện có</p>
                                <button class="float-end btn btn-primary">Nạp</button>

                                <p class="fw-bold">Vòng quay may mắn</p>
                                <p class="fw-bold">Điểm danh</p>
                                <p class="fw-bold">Giftcode</p>

                            </div>
                            <div class="tab-pane" id="tabs-change-password">
                                <h4 class="mb-5">Đổi mật khẩu</h4>
                                <div class="w-50">
                                    <form action="">
                                        <div class="mb-3">
                                            <label for="" class="form-label">Mật khẩu cũ</label>
                                            <input type="text" name="" id="" class="form-control" />
                                        </div>
                                        <div class="mb-3">
                                            <label for="" class="form-label">Mật khẩu mới</label>
                                            <input type="text" name="" id="" class="form-control" />
                                        </div>
                                        <div class="mb-3">
                                            <label for="" class="form-label">Xác nhận mật khẩu mới</label>
                                            <input type="text" name="" id="" class="form-control" />
                                        </div>
                                        <div class="mb-3">
                                            <button class="btn btn-primary">Đổi mật khẩu</button>
                                        </div>

                                    </form>
                                </div>
                            </div>
                            <div class="tab-pane" id="tabs-favourite">
                                <h4 class="text-primary mb-5">Truyện yêu thích</h4>
                                <div class="row row-cards">

                                    {{-- render truyện yêu thích ở đây --}}
                                    @for ($i = 0; $i < 4; $i++)
                                        <div class="col-sm-4 col-lg-3">
                                            <div class="card card-sm">
                                                <a href="#" class="d-block">
                                                    <img src="https://st.nettruyenff.com/data/comics/32/vo-luyen-dinh-phong-9068.jpg"
                                                        class="card-img-top">
                                                </a>
                                                <div class="card-body">
                                                    <div>
                                                        <div class="fw-bold">Võ Luyện Đỉnh Phong</div>
                                                        <small class="text-secondary">Chap 500</small>
                                                    </div>
                                                    <div class="d-flex justify-content-between">
                                                        <small class="text-secondary">
                                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon"
                                                                width="24" height="24" viewBox="0 0 24 24"
                                                                stroke-width="2" stroke="currentColor" fill="none"
                                                                stroke-linecap="round" stroke-linejoin="round">
                                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                                <path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
                                                                <path
                                                                    d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6" />
                                                            </svg>
                                                            3123
                                                        </small>
                                                        <small class="text-secondary">
                                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon"
                                                                width="24" height="24" viewBox="0 0 24 24"
                                                                stroke-width="2" stroke="currentColor" fill="none"
                                                                stroke-linecap="round" stroke-linejoin="round">
                                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                                <path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
                                                                <path
                                                                    d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6" />
                                                            </svg>
                                                            3123
                                                        </small>
                                                        <small class="text-secondary">
                                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon"
                                                                width="24" height="24" viewBox="0 0 24 24"
                                                                stroke-width="2" stroke="currentColor" fill="none"
                                                                stroke-linecap="round" stroke-linejoin="round">
                                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                                <path
                                                                    d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" />
                                                            </svg>
                                                            123
                                                        </small>
                                                    </div>
                                                </div>
                                                <div class="btn border-0 border-top">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="icon icon-tabler icons-tabler-outline icon-tabler-heart-x">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                        <path
                                                            d="M19.5 12.572l-.5 .428m-6 6l-1 1l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" />
                                                        <path d="M22 22l-5 -5" />
                                                        <path d="M17 22l5 -5" />
                                                    </svg>
                                                    Bỏ thích
                                                </div>
                                            </div>
                                        </div>
                                    @endfor
                                </div>
                                <div class="d-flex align-items-center mt-5">
                                    <p class="m-0 text-secondary">Đang hiển thị <span>1</span> đến <span>8</span> trên
                                        <span>16</span> mục
                                    </p>
                                    <ul class="pagination m-0 ms-auto">
                                        <li class="page-item disabled">
                                            <a class="page-link" href="#" tabindex="-1" aria-disabled="true">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24"
                                                    height="24" viewBox="0 0 24 24" stroke-width="2"
                                                    stroke="currentColor" fill="none" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <path d="M15 6l-6 6l6 6" />
                                                </svg>
                                                trước
                                            </a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item active"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                                        <li class="page-item"><a class="page-link" href="#">5</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#">
                                                sau
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24"
                                                    height="24" viewBox="0 0 24 24" stroke-width="2"
                                                    stroke="currentColor" fill="none" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <path d="M9 6l6 6l-6 6" />
                                                </svg>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="tab-pane" id="tabs-transaction">
                                <h4 class="text-primary">Lịch sử giao dịch</h4>
                                <div class="card mb-3">
                                    <div class="card-body">
                                        <div class="float-end">
                                            <p class="text-secondary">23/11/2002 23:23</p>
                                            <a href="{{ route('invoice') }}" class="btn btn-primary">Xem hoá đơn</a>
                                        </div>
                                        <h4 class="text-success">Nạp tiền</h4>
                                        <p class="text-success">+ 200.000 linh thạch</p>
                                        <p class="text-secondary">Mã giao dịch: cbao1239</p>
                                    </div>
                                </div>
                                <div class="card mb-3">
                                    <div class="card-body">
                                        <div class="float-end">
                                            <p class="text-secondary">23/11/2002 23:23</p>
                                            <a href="{{ route('invoice') }}" class="btn btn-primary">Xem hoá đơn</a>
                                        </div>
                                        <h4 class="text-red">Mua truyện</h4>
                                        <p class="text-red">- 200.000 linh thạch</p>
                                        <p class="fw-bold">
                                            <a href="{{ route('client.detail') }}">Đại quản gia ma là ma hoàng</a>
                                        </p>
                                        <p class="text-secondary">Mã giao dịch: cbao1239</p>
                                    </div>
                                </div>

                                <div class="d-flex align-items-center mt-5">
                                    <p class="m-0 text-secondary">Đang hiển thị <span>1</span> đến <span>8</span> trên
                                        <span>16</span> mục
                                    </p>
                                    <ul class="pagination m-0 ms-auto">
                                        <li class="page-item disabled">
                                            <a class="page-link" href="#" tabindex="-1" aria-disabled="true">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24"
                                                    height="24" viewBox="0 0 24 24" stroke-width="2"
                                                    stroke="currentColor" fill="none" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <path d="M15 6l-6 6l6 6" />
                                                </svg>
                                                trước
                                            </a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item active"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                                        <li class="page-item"><a class="page-link" href="#">5</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#">
                                                sau
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24"
                                                    height="24" viewBox="0 0 24 24" stroke-width="2"
                                                    stroke="currentColor" fill="none" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <path d="M9 6l6 6l-6 6" />
                                                </svg>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="tab-pane" id="tabs-settings">
                                <h4 class="text-primary">Cài đặt</h4>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')

@endsection
