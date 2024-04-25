@extends('layouts.client')

@section('title', 'Trang chủ')

@section('styles')

@endsection

@section('content')
    <div class="card my-3">
        <div class="card-body">
            <div class="row mb-5">
                <div class="col-8">
                    <div class="list-group-item">

                        {{-- Thông tin truyện --}}
                        <div class="row mb-5">
                            <div class="col-4">
                                <div class="mb-3">
                                    <img src="https://st.nettruyenff.com/data/comics/146/nguyen-ton.jpg"
                                        style="object-fit:cover" class="rounded">
                                </div>
                                <div class="text-center">
                                    <button class="btn">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="icon icon-tabler icons-tabler-outline icon-tabler-heart-plus">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M12 20l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.96 6.053" />
                                            <path d="M16 19h6" />
                                            <path d="M19 16v6" />
                                        </svg>
                                        Yêu thích
                                    </button>
    
                                    {{-- <button class="btn btn-red">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="icon icon-tabler icons-tabler-outline icon-tabler-heart-plus">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M12 20l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.96 6.053" />
                                            <path d="M16 19h6" />
                                            <path d="M19 16v6" />
                                        </svg>
                                        Đang yêu thích
                                    </button> --}}
                                </div>

                            </div>
                            <div class="col-8">
                                <h1 class="fw-bold mb-0">Nguyên Tôn</h1>
                                <p class="mb-5 small text-secondary">[cập nhật mới nhất: 12/03/2031 12:45]</p>
                                <table class="table border-light">
                                    <tbody>
                                        <tr>
                                            <th class="align-bottom">
                                                <span class="icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="icon icon-tabler icons-tabler-outline icon-tabler-user-check">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                        <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
                                                        <path d="M6 21v-2a4 4 0 0 1 4 -4h4" />
                                                        <path d="M15 19l2 2l4 -4" />
                                                    </svg>
                                                </span>
                                                Tác giả
                                            </th>
                                            <td class="align-bottom">
                                                Khuyết danh
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="align-bottom">
                                                <span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        class="icon icon-tabler icons-tabler-outline icon-tabler-chart-bar">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                        <path
                                                            d="M3 12m0 1a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v6a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z" />
                                                        <path
                                                            d="M9 8m0 1a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v10a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z" />
                                                        <path
                                                            d="M15 4m0 1a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v14a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z" />
                                                        <path d="M4 20l14 0" />
                                                    </svg>
                                                </span>
                                                Tình trạng
                                            </th>
                                            <td class="align-bottom">Đang cập nhật</td>
                                        </tr>

                                        <tr>
                                            <th class="align-bottom">
                                                <span class="icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="icon icon-tabler icons-tabler-outline icon-tabler-tag">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                        <path d="M7.5 7.5m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                                        <path
                                                            d="M3 6v5.172a2 2 0 0 0 .586 1.414l7.71 7.71a2.41 2.41 0 0 0 3.408 0l5.592 -5.592a2.41 2.41 0 0 0 0 -3.408l-7.71 -7.71a2 2 0 0 0 -1.414 -.586h-5.172a3 3 0 0 0 -3 3z" />
                                                    </svg>
                                                </span>
                                                Thể loại
                                            </th>
                                            <td class="align-bottom">Chuyển sinh - Tu tiên</td>
                                        </tr>
                                        <tr>
                                            <th class="align-bottom">
                                                <span class="icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="icon icon-tabler icons-tabler-outline icon-tabler-eye">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                        <path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
                                                        <path
                                                            d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6" />
                                                    </svg>
                                                </span>
                                                Lượt xem
                                            </th>
                                            <td class="align-bottom">123</td>
                                        </tr>

                                        <tr>
                                            <th class="align-bottom">
                                                <span class="icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="icon icon-tabler icons-tabler-outline icon-tabler-eye">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                        <path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
                                                        <path
                                                            d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6" />
                                                    </svg>
                                                </span>
                                                Xếp hạng
                                            </th>
                                            <td class="align-bottom">
                                                @for ($i = 0; $i < 5; $i++)
                                                    <span class="icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                            class="icon icon-tabler icons-tabler-outline icon-tabler-star icon-filled text-yellow">
                                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                            <path
                                                                d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" />
                                                        </svg>
                                                    </span>
                                                @endfor
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>

                                <div class="btn-list">

                                    <a href="{{ route('client.read') }}" class="btn">Đọc tiếp</a>
                                    <a href="{{ route('client.read') }}" class="btn btn-success">Đọc từ đầu</a>
                                    <a href="{{ route('client.read') }}" class="btn btn-primary">Đọc mới nhất</a>
                                </div>


                            </div>
                        </div>

                        {{-- Nội dung tóm tắt --}}
                        <div class="row mb-3">
                            <h4 class="card-title fw-bold text-uppercase text-primary">tóm tắt</h4>
                            <p>
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laudantium, harum ipsam? Dolore
                                porro at est pariatur architecto, delectus odio deleniti! Sapiente facilis amet magni veniam
                                vel ad perspiciatis facere dolore distinctio inventore, quod culpa perferendis dicta
                                obcaecati fugit explicabo totam nesciunt nisi doloribus voluptatum? Et rem magni ullam sequi
                                porro aliquam ex similique repellendus nihil voluptate blanditiis eum, est, reprehenderit
                                beatae omnis mollitia perferendis dolorem voluptatem inventore voluptates cum placeat
                                excepturi possimus? Voluptatem earum vel quas ratione at cumque id ipsa ea veritatis impedit
                                tempore, quasi, excepturi perferendis magni soluta maiores iure consequuntur amet atque
                                commodi consectetur placeat nesciunt ducimus!
                            </p>
                        </div>

                        {{-- danh sách chương --}}
                        <div class="row mb-5">

                            <h4 class="card-title fw-bold text-uppercase text-primary">danh sách chương</h4>
                            <div class="card">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>Số chap</th>
                                                    <th>Tên chap</th>
                                                    <th>Cập nhật</th>
                                                    <th>Lượt xem</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @for ($i = 15; $i > 0; $i--)
                                                    <tr class="">
                                                        <td class="fw-bold">
                                                            <a href="#">Chapter {{ $i }}</a>
                                                        </td>
                                                        <td class="fw-bold"><a href="#">Ma hoàng cái thế</a></td>
                                                        <td class="text-secondary fst-italic">23/11/2002 13:11</td>
                                                        <td class="text-secondary fst-italic">
                                                            123
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="icon icon-tabler icons-tabler-outline icon-tabler-eye">
                                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                                <path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
                                                                <path
                                                                    d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6" />
                                                            </svg>
                                                        </td>
                                                    </tr>
                                                @endfor
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                {{-- Phân trang --}}
                                <div class="card-footer">
                                    <div class="d-flex align-items-center">
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
                            </div>
                        </div>

                        <div class="row">
                            <h4 class="card-title fw-bold text-uppercase text-primary">bình luận</h4>
                            <div class="card">
                                <div class="card-body scrollable">
                                    <div class="chat">
                                        <div class="chat-bubbles">

                                            {{-- Nếu là của mình thì lấy cái này --}}
                                            <div class="chat-item">
                                                <div class="row align-items-end justify-content-end">
                                                    <div class="col col-lg-6">
                                                        <div class="chat-bubble chat-bubble-me">
                                                            <div class="chat-bubble-title">
                                                                <div class="row">
                                                                    <div class="col chat-bubble-author">
                                                                        <span>Đỗ Hồng Quân</span>
                                                                        <span class="badge me-3">Chí tôn</span>
                                                                        <a href="#" class="small">Chap 312</a>
                                                                    </div>
                                                                    <div class="col-auto chat-bubble-date">09:32</div>
                                                                </div>
                                                            </div>
                                                            <hr class="my-2">
                                                            <div class="chat-bubble-body mb-4">
                                                                <p>Truyện hay vãi loè</p>
                                                            </div>
                                                            <div class="d-flex gap-3">
                                                                <span>
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="icon icon-tabler icons-tabler-outline icon-tabler-message-circle">
                                                                        <path stroke="none" d="M0 0h24v24H0z"
                                                                            fill="none" />
                                                                        <path
                                                                            d="M3 20l1.3 -3.9c-2.324 -3.437 -1.426 -7.872 2.1 -10.374c3.526 -2.501 8.59 -2.296 11.845 .48c3.255 2.777 3.695 7.266 1.029 10.501c-2.666 3.235 -7.615 4.215 -11.574 2.293l-4.7 1" />
                                                                    </svg>
                                                                    Trả lời
                                                                </span>
                                                                <span>
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="icon icon-tabler icons-tabler-outline icon-tabler-thumb-up">
                                                                        <path stroke="none" d="M0 0h24v24H0z"
                                                                            fill="none" />
                                                                        <path
                                                                            d="M7 11v8a1 1 0 0 1 -1 1h-2a1 1 0 0 1 -1 -1v-7a1 1 0 0 1 1 -1h3a4 4 0 0 0 4 -4v-1a2 2 0 0 1 4 0v5h3a2 2 0 0 1 2 2l-1 5a2 3 0 0 1 -2 2h-7a3 3 0 0 1 -3 -3" />
                                                                    </svg>
                                                                    0
                                                                </span>
                                                                <span>
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="icon icon-tabler icons-tabler-outline icon-tabler-thumb-down">
                                                                        <path stroke="none" d="M0 0h24v24H0z"
                                                                            fill="none" />
                                                                        <path
                                                                            d="M7 13v-8a1 1 0 0 0 -1 -1h-2a1 1 0 0 0 -1 1v7a1 1 0 0 0 1 1h3a4 4 0 0 1 4 4v1a2 2 0 0 0 4 0v-5h3a2 2 0 0 0 2 -2l-1 -5a2 3 0 0 0 -2 -2h-7a3 3 0 0 0 -3 3" />
                                                                    </svg>
                                                                    0
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-auto"><span class="avatar"
                                                            style="background-image: url(https://preview.tabler.io/static/avatars/000f.jpg)"></span>
                                                    </div>
                                                </div>
                                            </div>

                                            {{-- Nếu là của người khác thì lấy cái này --}}
                                            <div class="chat-item">
                                                <div class="row align-items-end">
                                                    <div class="col-auto"><span class="avatar"
                                                            style="background-image: url(https://preview.tabler.io/static/avatars/000f.jpg)"></span>
                                                    </div>
                                                    <div class="col col-lg-6">
                                                        <div class="chat-bubble">
                                                            <div class="chat-bubble-title">
                                                                <div class="row">
                                                                    <div class="col chat-bubble-author">
                                                                        <div class="col chat-bubble-author">
                                                                            <span>Linka</span>
                                                                            <span class="badge me-3">Chí tôn</span>
                                                                            <a href="#" class="small">Chap 312</a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-auto chat-bubble-date">09:34</div>
                                                                </div>
                                                            </div>
                                                            <hr class="my-2">
                                                            <div class="chat-bubble-body mb-4">
                                                                <p>Như bòi</p>
                                                            </div>
                                                            <div class="d-flex gap-3">
                                                                <span>
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="icon icon-tabler icons-tabler-outline icon-tabler-message-circle">
                                                                        <path stroke="none" d="M0 0h24v24H0z"
                                                                            fill="none" />
                                                                        <path
                                                                            d="M3 20l1.3 -3.9c-2.324 -3.437 -1.426 -7.872 2.1 -10.374c3.526 -2.501 8.59 -2.296 11.845 .48c3.255 2.777 3.695 7.266 1.029 10.501c-2.666 3.235 -7.615 4.215 -11.574 2.293l-4.7 1" />
                                                                    </svg>
                                                                    Trả lời
                                                                </span>
                                                                <span>
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="icon icon-tabler icons-tabler-outline icon-tabler-thumb-up">
                                                                        <path stroke="none" d="M0 0h24v24H0z"
                                                                            fill="none" />
                                                                        <path
                                                                            d="M7 11v8a1 1 0 0 1 -1 1h-2a1 1 0 0 1 -1 -1v-7a1 1 0 0 1 1 -1h3a4 4 0 0 0 4 -4v-1a2 2 0 0 1 4 0v5h3a2 2 0 0 1 2 2l-1 5a2 3 0 0 1 -2 2h-7a3 3 0 0 1 -3 -3" />
                                                                    </svg>
                                                                    0
                                                                </span>
                                                                <span>
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="icon icon-tabler icons-tabler-outline icon-tabler-thumb-down">
                                                                        <path stroke="none" d="M0 0h24v24H0z"
                                                                            fill="none" />
                                                                        <path
                                                                            d="M7 13v-8a1 1 0 0 0 -1 -1h-2a1 1 0 0 0 -1 1v7a1 1 0 0 0 1 1h3a4 4 0 0 1 4 4v1a2 2 0 0 0 4 0v-5h3a2 2 0 0 0 2 -2l-1 -5a2 3 0 0 0 -2 -2h-7a3 3 0 0 0 -3 3" />
                                                                    </svg>
                                                                    0
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <p class="text-red mb-3">Tính năng yêu cầu đăng nhập</p>
                                    <form action="">
                                        <div class="input-group input-group-flat mb-3">
                                            <input type="text" class="form-control" autocomplete="off"
                                                placeholder="Nhập nội dung" />
                                            <button class="btn btn-success">Bình luận</button>
                                        </div>
                                        <div class="d-flex gap-2">
                                            @for ($i = 0; $i < 10; $i++)
                                                <div class="rounded border p-2">
                                                    <img src="https://st.nettruyenff.com/Data/Sites/1/skins/comic/images/emo/trollface.png"
                                                        width="50px" alt="">
                                                </div>
                                            @endfor
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-4">
                    {{-- Liên quan --}}
                    <div class="card mb-3">
                        <div class="card-header d-flex justify-content-between">
                            <h5 class="h4 card-title fw-bold text-uppercase text-primary">liên quan</h5>
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
                                            <p class="text-secondary mt-n1">Chap đang đọc: 120</p>
                                            <p class="text-secondary mt-n1">Cập nhật mới nhất: 131</p>
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
