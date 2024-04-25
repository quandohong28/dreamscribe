@extends('layouts.client')

@section('title', 'Trang chủ')

@section('styles')

@endsection

@section('content')

    {{-- Truyện hot --}}
    <div class="card text-start mt-3">
        <div class="card-body">
            <div class="row mb-5">
                <h4 class="card-title fw-bold text-uppercase text-primary">tìm theo tên truyện</h4>
                <form action="#" class="d-flex gap-2" method="get" autocomplete="off" novalidate>
                    <div class="input-icon">
                        <span class="input-icon-addon">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0" />
                                <path d="M21 21l-6 -6" />
                            </svg>
                        </span>

                        {{-- Xử lý placehoder thành tên truyện đứng đầu bảng xếp hạng --}}
                        <input type="text" value="" class="form-control" placeholder="nhập tên truyện"
                            aria-label="Search in website">
                    </div>
                </form>
            </div>
            <div class="row mb-5">
                <h4 class="card-title fw-bold text-uppercase text-primary">bộ lọc tìm kiếm</h4>
                <div class="col-8">
                    <div class="row mb-5">
                        <p class="fw-bold">Thể loại</p>
                        <div class="form-selectgroup">
                            <div class="row">
                                @php
                                    $theLoai = [
                                        'tu tiên',
                                        'chuyển sinh',
                                        'manga',
                                        'anime',
                                        'việt nam',
                                        'trung quốc',
                                        'manhwa',
                                        'manwa',
                                        'mecha',
                                        'shounen',
                                        'đam mỹ',
                                        'xuyên không',
                                        'ngôn tình',
                                        'one shot',
                                        'shoujo ai',
                                    ];
                                @endphp
                                @foreach ($theLoai as $item)
                                    <label class="form-selectgroup-item small col-auto mb-4">
                                        <input type="checkbox" name="name" value="HTML" class="form-selectgroup-input">
                                        <span class="form-selectgroup-label p-1 badge">{{ $item }}</span>
                                    </label>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <div class="row mb-5">
                        <p class="fw-bold">Quốc gia</p>
                        <div class="form-selectgroup">
                            <div class="row">
                                @php
                                    $theLoai = [
                                        'Mỹ',
                                        'Nhật Bản',
                                        'Hà Lan',
                                        'Thuỵ Điển',
                                        'Việt Nam',
                                        'Trung Quốc',
                                        'Hàn quốc',
                                        'Thái Lan',
                                    ];
                                @endphp
                                @foreach ($theLoai as $item)
                                    <label class="form-selectgroup-item small col-auto mb-4">
                                        <input type="checkbox" name="name" value="HTML" class="form-selectgroup-input">
                                        <span class="form-selectgroup-label p-1 badge">{{ $item }}</span>
                                    </label>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="button-group">
                            <button class="btn btn-outline-secondary">Xoá bộ lọc</button>
                            <button class="btn btn-primary" id="result">Tìm kiếm</button>
                        </div>
                    </div>

                </div>
                <div class="col-4">
                    <div class="row mb-5">
                        <p class="fw-bold">Tình trạng</p>
                        <div class="button-group">
                            <button class="btn btn-success me-2">Hoàn thành</button>
                            <button class="btn btn-outline-primary">Đang tiến hành</button>
                        </div>
                    </div>
                    <div class="row mb-5">
                        <p class="fw-bold">Sắp xếp theo</p>
                        <div class="form-selectgroup">
                            <div class="row">
                                @php
                                    $theLoai = [
                                        'Ngày cập nhật',
                                        'Truyện mới',
                                        'Top',
                                        'Top tháng',
                                        'Top tuần',
                                        'Top ngày',
                                        'Theo dõi',
                                        'Bình luận',
                                        'Số chap',
                                    ];
                                @endphp
                                @foreach ($theLoai as $item)
                                    <label class="form-selectgroup-item small col-auto mb-4">
                                        <input type="checkbox" name="name" value="HTML" class="form-selectgroup-input">
                                        <span class="form-selectgroup-label p-1 badge">{{ $item }}</span>
                                    </label>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-5">
                <h4 class="card-title fw-bold text-uppercase text-primary">kết quả tìm kiếm</h4>

                {{-- <div class="row mb-5">
                    render tìm thấy ở đây
                    @for ($i = 0; $i < 2; $i++)
                        <div class="col-sm-3 col-lg-2">
                            <div class="card card-sm position-relative overflow-hidden">
                                <a href="{{ route('client.detail') }}" class="d-block">
                                    <img src="https://st.nettruyenhh.com/data/comics/188/dai-quan-gia-la-ma-hoang-904.jpg"
                                        class="card-img-top">
                                </a>
                                <div class="card-body py-2 text-primary opacity-55 fixed-bottom small">
                                    <div class="d-flex justify-content-between">
                                        <small class="text-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24"
                                                height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                <path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
                                                <path
                                                    d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6" />
                                            </svg>
                                            3123
                                        </small>
                                        <small class="text-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24"
                                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                <path
                                                    d="M21 14l-3 -3h-7a1 1 0 0 1 -1 -1v-6a1 1 0 0 1 1 -1h9a1 1 0 0 1 1 1v10" />
                                                <path d="M14 15v2a1 1 0 0 1 -1 1h-7l-3 3v-10a1 1 0 0 1 1 -1h2" />
                                            </svg>
                                            3123
                                        </small>
                                        <small class="text-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24"
                                                height="24" viewBox="0 0 24 24" stroke-width="2"
                                                stroke="currentColor" fill="none" stroke-linecap="round"
                                                stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                <path
                                                    d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" />
                                            </svg>
                                            123
                                        </small>
                                    </div>
                                </div>

                            </div>
                            <div class="mt-2 px-2">
                                <div class="fw-bold mb-2">Đại quản gia là Ma hoàng</div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <small class="text-secondary">Chap 500</small>
                                    <div>
                                        @if ($i % 4 !== 0)
                                            <div class="btn btn-outline-secondary btn-sm">
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
                                        @else
                                            <div class="btn btn-red btn-sm">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="icon icon-tabler icons-tabler-outline icon-tabler-heart">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <path
                                                        d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" />
                                                </svg>
                                                Yêu thích
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endfor
                </div> --}}

                <div class="empty">
                    <div class="empty-img"><img src="{{ asset('assets/illustrations/undraw_quitting_time_dm8t.svg') }}"
                            height="128" alt="">
                    </div>
                    <p class="empty-title">Không tìm thấy truyện</p>
                    <p class="empty-subtitle text-secondary">
                        Hãy thử điều chỉnh tìm kiếm hoặc bộ lọc của bạn để tìm thấy những gì bạn đang tìm kiếm.
                    </p>
                </div>

                <div class="my-5">
                    <div class="row row-cards mb-5">
                        <h4 class="card-title fw-bold text-uppercase text-primary">truyện hot</h4>
                        <div class="row">
                            <div class="col-8">
                                <div class="row row-cards mb-5">
                                    {{-- render truyện hot ở đây --}}
                                    @for ($i = 0; $i < 15; $i++)
                                        <div class="col-sm-4 col-lg-3">
                                            <div class="card card-sm position-relative overflow-hidden">
                                                <a href="{{ route('client.detail') }}" class="d-block">
                                                    <img src="https://st.nettruyenhh.com/data/comics/188/dai-quan-gia-la-ma-hoang-904.jpg"
                                                        class="card-img-top">
                                                </a>
                                                <div class="card-body py-2 text-primary opacity-55 fixed-bottom small">
                                                    <div class="d-flex justify-content-between">
                                                        <small class="text-center">
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
                                                        <small class="text-center">
                                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon"
                                                                width="24" height="24" viewBox="0 0 24 24"
                                                                fill="none" stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round">
                                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                                <path
                                                                    d="M21 14l-3 -3h-7a1 1 0 0 1 -1 -1v-6a1 1 0 0 1 1 -1h9a1 1 0 0 1 1 1v10" />
                                                                <path
                                                                    d="M14 15v2a1 1 0 0 1 -1 1h-7l-3 3v-10a1 1 0 0 1 1 -1h2" />
                                                            </svg>
                                                            3123
                                                        </small>
                                                        <small class="text-center">
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

                                            </div>
                                            <div class="mt-2 px-2">
                                                <div class="fw-bold mb-2">Đại quản gia là Ma hoàng</div>
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <small class="text-secondary">Chap 500</small>
                                                    <div>
                                                        @if ($i % 4 !== 0)
                                                            <div class="btn btn-outline-secondary btn-sm">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none"
                                                                    stroke="currentColor" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round"
                                                                    class="icon icon-tabler icons-tabler-outline icon-tabler-heart-x">
                                                                    <path stroke="none" d="M0 0h24v24H0z"
                                                                        fill="none" />
                                                                    <path
                                                                        d="M19.5 12.572l-.5 .428m-6 6l-1 1l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" />
                                                                    <path d="M22 22l-5 -5" />
                                                                    <path d="M17 22l5 -5" />
                                                                </svg>
                                                                Bỏ thích
                                                            </div>
                                                        @else
                                                            <div class="btn btn-red btn-sm">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none"
                                                                    stroke="currentColor" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round"
                                                                    class="icon icon-tabler icons-tabler-outline icon-tabler-heart">
                                                                    <path stroke="none" d="M0 0h24v24H0z"
                                                                        fill="none" />
                                                                    <path
                                                                        d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" />
                                                                </svg>
                                                                Yêu thích
                                                            </div>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endfor
                                </div>
                            </div>
                            <div class="col-4">

                                {{-- Lịch sử đọc --}}
                                <div class="card mb-3">
                                    <div class="card-header d-flex justify-content-between">
                                        <h5 class="h4 card-title fw-bold text-uppercase text-primary">lịch sử đọc truyện
                                        </h5>
                                        <a href="{{ route('client.history') }}" class="">Xem tất cả</a>
                                    </div>
                                    <div class="list-group list-group-flush list-group-hoverable">
                                        @for ($i = 0; $i < 3; $i++)
                                            <a href="#" class="list-group-item">
                                                <div class="row align-items-center">
                                                    <div class="col-auto">
                                                        <span>
                                                            <img src="https://st.nettruyenff.com/data/comics/146/nguyen-ton.jpg"
                                                                style="object-fit:cover" width="100px" height="120px"
                                                                alt="" class="rounded">
                                                        </span>
                                                    </div>
                                                    <div class="col text-truncate">
                                                        <p class="fw-bold">Nguyên Tôn</p>
                                                        <p class=text-secondary mt-n1">Chương đang đọc: 120</p>
                                                        <p class=text-secondary mt-n1">Cập nhật mới nhất: 131</p>
                                                    </div>
                                                </div>
                                            </a>
                                        @endfor
                                    </div>
                                </div>

                                {{-- yêu thích --}}
                                <div class="card">
                                    <div class="card-header d-flex justify-content-between">
                                        <h5 class="h4 card-title fw-bold text-uppercase text-primary">truyện yêu thích</h5>
                                        <a href="{{ route('client.history') }}" class="">Xem tất cả</a>
                                    </div>
                                    <div class="list-group list-group-flush list-group-hoverable">
                                        @for ($i = 0; $i < 3; $i++)
                                            <a href="#" class="list-group-item">
                                                <div class="row align-items-center">
                                                    <div class="col-auto">
                                                        <span>
                                                            <img src="https://st.nettruyenff.com/data/comics/146/nguyen-ton.jpg"
                                                                style="object-fit:cover" width="100px" height="120px"
                                                                alt="" class="rounded">
                                                        </span>
                                                    </div>
                                                    <div class="col text-truncate">
                                                        <p class="fw-bold">Nguyên Tôn</p>
                                                        <p class=text-secondary mt-n1">Chap đang đọc: 120</p>
                                                        <p class=text-secondary mt-n1">Cập nhật mới nhất: 131</p>
                                                    </div>
                                                </div>
                                            </a>
                                        @endfor
                                    </div>
                                </div>
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
