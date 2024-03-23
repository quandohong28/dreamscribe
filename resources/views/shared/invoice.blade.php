@extends('layouts.shared')

@section('title', 'Hoá đơn')

@section('styles')

@endsection

@section('content')
    <div class="page-wrapper">
        <!-- Page header -->
        <div class="page-header d-print-none">
            <div class="container-xl">
                <div class="row g-2 align-items-center">
                    <div class="col">
                        <h2 class="page-title">
                            Hoá đơn
                        </h2>
                    </div>
                    <!-- Page title actions -->
                    <div class="col-auto ms-auto d-print-none">
                        <button type="button" class="btn btn-primary" onclick="javascript:window.print();">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M17 17h2a2 2 0 0 0 2 -2v-4a2 2 0 0 0 -2 -2h-14a2 2 0 0 0 -2 2v4a2 2 0 0 0 2 2h2" />
                                <path d="M17 9v-4a2 2 0 0 0 -2 -2h-6a2 2 0 0 0 -2 2v4" />
                                <path d="M7 13m0 2a2 2 0 0 1 2 -2h6a2 2 0 0 1 2 2v4a2 2 0 0 1 -2 2h-6a2 2 0 0 1 -2 -2z" />
                            </svg>
                            In
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="page-body">
            <div class="container-xl">
                <div class="card card-lg">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <p class="h3">Dreamscribe</p>
                                <address>
                                    02 Nguyên Xá Bắc Từ Liêm, Hà Nội Việt Nam <br>
                                    03000<br>
                                    cskh@dreamscribe.com
                                </address>
                            </div>
                            <div class="col-6 text-end">
                                {{-- Tên khách hàng --}}
                                <p class="h3">Đỗ Hồng Quân</p>
                                <address>
                                    Địa chỉ: 02 Nguyên Xá Bắc Từ Liêm, Hà Nội<br>
                                    Mã số thuế: null<br>
                                    SĐT: 0362303364<br>
                                    Mail: quandohong28@gmail.com
                                </address>
                            </div>
                            <div class="col-12 my-5">
                                <h1>Hoá đơn số REC/001/15</h1>
                            </div>
                        </div>
                        <table class="table table-transparent table-responsive">
                            <thead>
                                <tr>
                                    <th class="text-center" style="width: 1%"></th>
                                    <th>Sản phẩm</th>
                                    <th class="text-center" style="width: 1%">Số lượng</th>
                                    <th class="text-end" style="width: 1%">Đơn giá</th>
                                    <th class="text-end" style="width: 1%">Thành tiền</th>
                                </tr>
                            </thead>
                            {{-- Xử lý sản phẩm ở đây --}}
                            <tr>
                                <td class="text-center">1</td>
                                <td>
                                    <p class="strong mb-1">Đại quản gia ma hoàng</p>
                                    <div class="text-secondary">Epub</div>
                                </td>
                                <td class="text-center">
                                    1
                                </td>
                                <td class="text-end">100.000đ</td>
                                <td class="text-end">100.000đ</td>
                            </tr>
                            <tr>
                                <td colspan="4" class="strong text-end">Tổng thanh toán (đã bao gồm VAT)</td>
                                <td class="text-end">100.000đ</td>
                            </tr>
                            <tr>
                                <td colspan="4" class="strong text-end">Mã giao dịch</td>
                                <td class="text-end">PDASDJ41</td>
                            </tr>
                            <tr>
                                <td colspan="4" class="strong text-end">
                                    Đã thanh toán
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="icon icon-tabler icons-tabler-outline icon-tabler-check">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M5 12l5 5l10 -10" />
                                    </svg>
                                </td>
                                <td class="text-end">23/11/2024</td>
                            </tr>
                        </table>
                        <p class="text-secondary text-center mt-5">Cảm ơn bạn đã sử dụng dịch vụ của chúng tôi, chúc bạn đọc
                            sách vui vẻ</p>
                        <div class="text-end">
                            <a href="" target="_blank" class="text-end">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="icon icon-tabler icons-tabler-outline icon-tabler-external-link">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M12 6h-6a2 2 0 0 0 -2 2v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-6" />
                                    <path d="M11 13l9 -9" />
                                    <path d="M15 4h5v5" />
                                </svg>
                                Điều khoản và điều kiện</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')

@endsection
