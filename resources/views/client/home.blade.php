@extends('layouts.client')

@section('title', 'Trang chủ')

@section('styles')

@endsection

@section('content')

    {{-- Truyện hot --}}
    <div class="card text-start mt-3">
        <div class="card-body">
            <h4 class="card-title fw-bold text-uppercase text-primary">truyện hot</h4>
            <div class="row row-cards">

                {{-- render truyện hot ở đây --}}
                @for ($i = 0; $i < 6; $i++)
                    <div class="col-sm-3 col-lg-2">
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
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
                                            <path
                                                d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6" />
                                        </svg>
                                        3123
                                    </small>
                                    <small class="text-secondary">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
                                            <path
                                                d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6" />
                                        </svg>
                                        3123
                                    </small>
                                    <small class="text-secondary">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
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
                    </div>
                @endfor
            </div>

        </div>
        <div class="card-footer d-flex align-items-center">
            <p class="m-0 text-secondary">Đang hiển thị <span>1</span> đến <span>8</span> trên
                <span>16</span> mục
            </p>
            <ul class="pagination m-0 ms-auto">
                <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1" aria-disabled="true">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
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
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M9 6l6 6l-6 6" />
                        </svg>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    {{-- Truyện mới cập nhật - Lịch sử đọc - Yêu thích --}}
    <div class="card text-start mt-3">
        <div class="card-body">
            <div class="row">
                <div class="col-8">
                    <h4 class="card-title fw-bold text-uppercase text-primary">truyện mới cập nhật</h4>
                    <div class="row row-cards mb-5">

                        {{-- render truyện hot ở đây --}}
                        @for ($i = 0; $i < 15; $i++)
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
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24"
                                                    height="24" viewBox="0 0 24 24" stroke-width="2"
                                                    stroke="currentColor" fill="none" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
                                                    <path
                                                        d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6" />
                                                </svg>
                                                3123
                                            </small>
                                            <small class="text-secondary">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24"
                                                    height="24" viewBox="0 0 24 24" stroke-width="2"
                                                    stroke="currentColor" fill="none" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
                                                    <path
                                                        d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6" />
                                                </svg>
                                                3123
                                            </small>
                                            <small class="text-secondary">
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
                            </div>
                        @endfor
                    </div>

                    <div class="d-flex align-items-center">
                        <p class="m-0 text-secondary">Đang hiển thị <span>1</span> đến <span>8</span> trên
                            <span>16</span> mục
                        </p>
                        <ul class="pagination m-0 ms-auto">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" tabindex="-1" aria-disabled="true">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                        stroke-linecap="round" stroke-linejoin="round">
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
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M9 6l6 6l-6 6" />
                                    </svg>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-4">

                    {{-- Lịch sử đọc --}}
                    <div class="card mb-3">
                        <div class="card-header d-flex justify-content-between">
                            <h5 class="h4 card-title fw-bold text-uppercase text-primary">lịch sử đọc truyện</h5>
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



@endsection

@section('scripts')

@endsection
