<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Laravel App Week 2')</title>
    
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom Style CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

    <!-- Header & Navigation Bar -->
    <header class="bg-dark text-white p-3 mb-4 shadow-sm">
        <div class="container d-flex flex-column flex-md-row justify-content-between align-items-center">
            <h1 class="h3 mb-2 mb-md-0 fw-bold text-warning">Laravel EBD App</h1>
            <nav>
                <ul class="nav nav-pills">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('home') }}">หน้าแรก (Home)</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('about') }}">เกี่ยวกับเรา (About)</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('contact') }}">ติดต่อเรา (Contact)</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Main Container -->
    <div class="container my-4 flex-grow-1">
        <div class="row">
            <!-- Main Content Area -->
            <main class="col-lg-8 mb-4">
                @yield('content')
            </main>

            <!-- Sidebar Area -->
            <aside class="col-lg-4">
                <div class="card mb-4 shadow-sm">
                    <div class="card-header bg-primary text-white fw-bold">
                        ข่าวสาร & ประกาศ
                    </div>
                    <div class="card-body">
                        <p class="card-text">
                            ยินดีต้อนรับเข้าสู่ระบบ การสร้าง Master Layout ด้วย Laravel Blade Template ประจำสัปดาห์ที่ 2
                        </p>
                    </div>
                </div>

                <div class="card shadow-sm">
                    <div class="card-header bg-secondary text-white fw-bold">
                        ลิงก์อ้างอิง
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><a href="https://laravel.com" target="_blank" class="text-decoration-none">Laravel Official Site</a></li>
                        <li class="list-group-item"><a href="https://getbootstrap.com" target="_blank" class="text-decoration-none">Bootstrap Documentation</a></li>
                    </ul>
                </div>
            </aside>
        </div>
    </div>

    <!-- Footer Area -->
    <footer class="bg-dark text-white text-center py-3 mt-auto">
        <div class="container">
            <p class="mb-1">&copy; {{ date('Y') }} EBD Laravel Assignment. All Rights Reserved.</p>
            <small class="text-muted">งานสัปดาห์ที่ 2 : Blade Template & Layout Inheritance</small>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>