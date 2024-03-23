<header
    class="navbar navbar-expand-md navbar-transparent d-print-none d-flex justify-content-between align-items-center px-5 py-3">
    <div class="d-flex gap-3 align-items-center">
        <h1 class="navbar-brand">
            <a href="{{ route('admin.dashboard') }}">
                <img src="{{ asset('assets/logo/logo.svg') }}" style="height: 3rem !important" alt="Dreamscribe"
                    class="navbar-brand-image">
            </a>
        </h1>
        <div>
            <h3>Xin chào
                <a href="{{ route('admin.profile') }}" class="text-primary">Đỗ Hồng Quân</a>
                <div id="time" class="mt-1 small text-secondary"></div>
        </div>
    </div>
    <div class="navbar-nav flex-row order-md-last">
        <div class="d-none d-md-flex">
            <button id="enableDarkmodeButton" class="nav-link px-0" title="Enable dark mode" data-bs-toggle="tooltip"
                data-bs-placement="bottom">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24"
                    stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                    stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M12 3c.132 0 .263 0 .393 0a7.5 7.5 0 0 0 7.92 12.446a9 9 0 1 1 -8.313 -12.454z" />
                </svg>
            </button>
            <button id="enableLightmodeButton" class="nav-link px-0" title="Enable light mode" data-bs-toggle="tooltip"
                data-bs-placement="bottom">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24"
                    stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                    stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M12 12m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />
                    <path
                        d="M3 12h1m8 -9v1m8 8h1m-9 8v1m-6.4 -15.4l.7 .7m12.1 -.7l-.7 .7m0 11.4l.7 .7m-12.1 -.7l-.7 .7" />
                </svg>
            </button>

            {{-- Xử lý thông báo ở đây --}}
            <div class="nav-item dropdown d-none d-md-flex me-3">
                <a href="#" class="nav-link px-0" data-bs-toggle="dropdown" tabindex="-1"
                    aria-label="Show notifications">
                    <!-- Download SVG icon from http://tabler-icons.io/i/bell -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path
                            d="M10 5a2 2 0 1 1 4 0a7 7 0 0 1 4 6v3a4 4 0 0 0 2 3h-16a4 4 0 0 0 2 -3v-3a7 7 0 0 1 4 -6" />
                        <path d="M9 17v1a3 3 0 0 0 6 0v-1" />
                    </svg>
                    <span class="badge bg-red"></span>
                </a>
                <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-end dropdown-menu-card">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between">
                            <h3 class="card-title">Mới cập nhật</h3>
                            <a href="{{ route('admin.profile') }}">Xem tất cả</a>
                        </div>
                        <div class="list-group list-group-flush list-group-hoverable">
                            <div class="list-group-item">
                                <div class="row align-items-center">
                                    <div class="col-auto"><span
                                            class="status-dot status-dot-animated bg-red d-block"></span>
                                    </div>
                                    <div class="col text-truncate">
                                        <a href="#" class="text-body d-block">Example 1</a>
                                        <div class="d-block text-secondary text-truncate mt-n1">
                                            Change deprecated html tags to text decoration classes (#29604)
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <a href="#" class="list-group-item-actions">
                                            <!-- Download SVG icon from http://tabler-icons.io/i/star -->
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon text-muted"
                                                width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                                stroke="currentColor" fill="none" stroke-linecap="round"
                                                stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                <path
                                                    d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="row align-items-center">
                                    <div class="col-auto"><span class="status-dot d-block"></span></div>
                                    <div class="col text-truncate">
                                        <a href="#" class="text-body d-block">Example 2</a>
                                        <div class="d-block text-secondary text-truncate mt-n1">
                                            justify-content:between ⇒ justify-content:space-between (#29734)
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <a href="#" class="list-group-item-actions show">
                                            <!-- Download SVG icon from http://tabler-icons.io/i/star -->
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon text-yellow"
                                                width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                                stroke="currentColor" fill="none" stroke-linecap="round"
                                                stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                <path
                                                    d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="row align-items-center">
                                    <div class="col-auto"><span class="status-dot d-block"></span></div>
                                    <div class="col text-truncate">
                                        <a href="#" class="text-body d-block">Example 3</a>
                                        <div class="d-block text-secondary text-truncate mt-n1">
                                            Update change-version.js (#29736)
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <a href="#" class="list-group-item-actions">
                                            <!-- Download SVG icon from http://tabler-icons.io/i/star -->
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon text-muted"
                                                width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                                stroke="currentColor" fill="none" stroke-linecap="round"
                                                stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                <path
                                                    d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="row align-items-center">
                                    <div class="col-auto"><span
                                            class="status-dot status-dot-animated bg-green d-block"></span>
                                    </div>
                                    <div class="col text-truncate">
                                        <a href="#" class="text-body d-block">Example 4</a>
                                        <div class="d-block text-secondary text-truncate mt-n1">
                                            Regenerate package-lock.json (#29730)
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <a href="#" class="list-group-item-actions">
                                            <!-- Download SVG icon from http://tabler-icons.io/i/star -->
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon text-muted"
                                                width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                                stroke="currentColor" fill="none" stroke-linecap="round"
                                                stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                <path
                                                    d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="nav-item dropdown">
            <a href="#" class="nav-link d-flex lh-1 text-reset p-0" data-bs-toggle="dropdown"
                aria-label="Open user menu">
                <span class="avatar avatar-sm" style="background-image: url(./static/avatars/000m.jpg)"></span>
                <div class="d-none d-xl-block ps-2">
                    <div>Paweł Kuna</div>
                    <div class="mt-1 small text-secondary">Admin</div>
                </div>
            </a>
            <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <a href="{{ route('admin.profile') }}" class="dropdown-item">
                    <span class="nav-link-icon d-md-none d-lg-inline-block">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round"
                            class="icon icon-tabler icons-tabler-outline icon-tabler-info-circle">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0" />
                            <path d="M12 9h.01" />
                            <path d="M11 12h1v4h1" />
                        </svg>
                    </span>
                    <span>Trang cá nhân</span>
                </a>
                <a href="{{ route('admin.feedback') }}" class="dropdown-item">
                    <span class="nav-link-icon d-md-none d-lg-inline-block">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round"
                            class="icon icon-tabler icons-tabler-outline icon-tabler-message-report">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path
                                d="M18 4a3 3 0 0 1 3 3v8a3 3 0 0 1 -3 3h-5l-5 3v-3h-2a3 3 0 0 1 -3 -3v-8a3 3 0 0 1 3 -3h12z" />
                            <path d="M12 8v3" />
                            <path d="M12 14v.01" />
                        </svg>
                    </span>
                    <span>Phản hồi</span>
                </a>
                <a href="{{ route('admin.setting') }}" class="dropdown-item">
                    <span class="nav-link-icon d-md-none d-lg-inline-block">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round"
                            class="icon icon-tabler icons-tabler-outline icon-tabler-settings-2">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path
                                d="M19.875 6.27a2.225 2.225 0 0 1 1.125 1.948v7.284c0 .809 -.443 1.555 -1.158 1.948l-6.75 4.27a2.269 2.269 0 0 1 -2.184 0l-6.75 -4.27a2.225 2.225 0 0 1 -1.158 -1.948v-7.285c0 -.809 .443 -1.554 1.158 -1.947l6.75 -3.98a2.33 2.33 0 0 1 2.25 0l6.75 3.98h-.033z" />
                            <path d="M12 12m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
                        </svg>
                    </span>
                    <span>Cài đặt</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="{{ route('auth.lock') }}" class="dropdown-item">
                    <span class="nav-link-icon d-md-none d-lg-inline-block">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-lock">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M5 13a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v6a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2v-6z" />
                            <path d="M11 16a1 1 0 1 0 2 0a1 1 0 0 0 -2 0" />
                            <path d="M8 11v-4a4 4 0 1 1 8 0v4" />
                        </svg>
                    </span>
                    <span>Khoá màn hình</span>
                </a>
                <a href="{{ route('auth.logout') }}" class="dropdown-item">
                    <span class="nav-link-icon d-md-none d-lg-inline-block text-red">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-logout">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M14 8v-2a2 2 0 0 0 -2 -2h-7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2 -2v-2" />
                            <path d="M9 12h12l-3 -3" />
                            <path d="M18 15l3 -3" />
                        </svg>
                    </span>
                    <span class="text-red">Đăng xuất</span>
                </a>
            </div>
        </div>
    </div>
</header>

<script>
    const currentDate = new Date();
    const currentHour = (currentDate.getHours() < 10) ? "0" + currentDate.getHours() : currentDate.getHours();
    const currentMinute = (currentDate.getMinutes() < 10) ? "0" + currentDate.getMinutes() : currentDate.getMinutes();
    const currentDay = currentDate.getDate();
    const currentMonth = currentDate.getMonth() + 1; // Phải cộng thêm 1 vì tháng bắt đầu từ 0
    const currentYear = currentDate.getFullYear();
    document.getElementById('time').innerHTML = currentDay + "/" + currentMonth + "/" + currentYear + " " +
        currentHour + ":" + currentMinute


    var themeStorageKey = "tablerTheme";
    var defaultTheme = "light";

    // Định nghĩa hàm để thay đổi chủ đề
    function toggleTheme() {
        var selectedTheme = localStorage.getItem(themeStorageKey) || defaultTheme;

        // Đảo ngược giá trị chủ đề
        selectedTheme = selectedTheme === 'dark' ? 'light' : 'dark';

        // Lưu giá trị chủ đề mới vào localStorage
        localStorage.setItem(themeStorageKey, selectedTheme);

        // Thiết lập hoặc xóa thuộc tính data-bs-theme của thẻ body
        if (selectedTheme === 'dark') {
            document.body.setAttribute("data-bs-theme", selectedTheme);
        } else {
            document.body.removeAttribute("data-bs-theme");
        }

        // Cập nhật trạng thái nút
        updateButtonState(selectedTheme);
    }

    // Hàm để cập nhật trạng thái nút
    function updateButtonState(theme) {
        var enableDarkmodeButton = document.getElementById("enableDarkmodeButton");
        var enableLightmodeButton = document.getElementById("enableLightmodeButton");

        if (theme === 'dark') {
            enableDarkmodeButton.style.display = "none";
            enableLightmodeButton.style.display = "block";
            document.body.setAttribute("data-bs-theme", 'dark');
        } else {
            enableDarkmodeButton.style.display = "block";
            enableLightmodeButton.style.display = "none";
        }
    }

    // Khởi tạo trạng thái ban đầu
    updateButtonState(localStorage.getItem(themeStorageKey) || defaultTheme);

    // Gắn sự kiện onclick cho nút enableDarkmodeButton
    var enableDarkmodeButton = document.getElementById("enableDarkmodeButton");
    if (enableDarkmodeButton) {
        enableDarkmodeButton.onclick = function() {
            toggleTheme();
        };
    }

    // Gắn sự kiện onclick cho nút enableLightmodeButton
    var enableLightmodeButton = document.getElementById("enableLightmodeButton");
    if (enableLightmodeButton) {
        enableLightmodeButton.onclick = function() {
            toggleTheme();
        };
    }
</script>
