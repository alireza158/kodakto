<!doctype html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? 'پنل مدیریت' }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.rtl.min.css" rel="stylesheet">

    <style>
        body {
            margin: 0;
            background: #f4f7fb;
            font-family: Tahoma, sans-serif;
        }

        .admin-layout {
            min-height: 100vh;
        }

        .sidebar {
            min-height: 100vh;
            background: linear-gradient(180deg, #1f2937 0%, #111827 100%);
            padding: 24px 16px;
            box-shadow: -4px 0 20px rgba(0, 0, 0, 0.08);
        }

        .sidebar-header {
            padding: 0 10px 20px;
            margin-bottom: 20px;
            border-bottom: 1px solid rgba(255,255,255,0.08);
        }

        .sidebar-title {
            color: #fff;
            font-size: 1.2rem;
            font-weight: 700;
            margin-bottom: 6px;
        }

        .sidebar-subtitle {
            color: #9ca3af;
            font-size: 0.85rem;
            margin: 0;
        }

        .menu-section {
            margin-bottom: 24px;
        }

        .menu-section-title {
            color: #9ca3af;
            font-size: 0.78rem;
            font-weight: 700;
            margin-bottom: 10px;
            padding: 0 10px;
        }

        .sidebar .nav {
            gap: 8px;
        }

        .sidebar .nav-link {
            display: flex;
            align-items: center;
            justify-content: space-between;
            color: #e5e7eb;
            background: rgba(255,255,255,0.03);
            border: 1px solid transparent;
            border-radius: 12px;
            padding: 12px 14px;
            font-size: 0.95rem;
            font-weight: 500;
            transition: all 0.25s ease;
        }

        .sidebar .nav-link:hover {
            background: rgba(255,255,255,0.08);
            color: #fff;
            border-color: rgba(255,255,255,0.08);
            transform: translateX(-2px);
        }

        .sidebar .nav-link.active {
            background: linear-gradient(90deg, #0d6efd, #3b82f6);
            color: #fff;
            border-color: transparent;
            box-shadow: 0 8px 20px rgba(13, 110, 253, 0.25);
        }

        .nav-link-text {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .nav-icon {
            width: 32px;
            height: 32px;
            border-radius: 10px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            background: rgba(255,255,255,0.08);
            font-size: 0.85rem;
            flex-shrink: 0;
        }

        .nav-link.active .nav-icon {
            background: rgba(255,255,255,0.18);
        }

        .content-wrap {
            min-height: 100vh;
            padding: 32px 24px;
        }

        .topbar {
            background: #fff;
            border-radius: 18px;
            padding: 18px 22px;
            margin-bottom: 24px;
            box-shadow: 0 10px 30px rgba(15, 23, 42, 0.06);
            border: 1px solid #eef2f7;
        }

        .topbar-title {
            margin: 0;
            font-size: 1.35rem;
            font-weight: 700;
            color: #1f2937;
        }

        .topbar-desc {
            margin: 6px 0 0;
            color: #6b7280;
            font-size: 0.92rem;
        }

        .content-card {
            background: #fff;
            border-radius: 20px;
            padding: 24px;
            box-shadow: 0 10px 30px rgba(15, 23, 42, 0.05);
            border: 1px solid #eef2f7;
        }

        .alert {
            border-radius: 14px;
        }

        .alert ul {
            padding-right: 18px;
        }

        @media (max-width: 991.98px) {
            .sidebar {
                min-height: auto;
                border-radius: 0 0 20px 20px;
            }

            .content-wrap {
                padding: 20px 14px;
            }

            .topbar,
            .content-card {
                padding: 18px;
            }
        }
    </style>
</head>
<body>
<div class="container-fluid">
    <div class="row admin-layout">

        <aside class="col-12 col-lg-3 col-xl-2 sidebar">
            <div class="sidebar-header">
                <h1 class="sidebar-title">پنل مدیریت</h1>
                <p class="sidebar-subtitle">مدیریت کامل بخش‌های سایت</p>
            </div>

            <div class="menu-section">
                <div class="menu-section-title">بخش‌های اصلی</div>
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}"
                           href="{{ route('admin.dashboard') }}">
                            <span class="nav-link-text">
                                <span class="nav-icon">🏠</span>
                                داشبورد
                            </span>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="menu-section">
                <div class="menu-section-title">مدیریت محتوا</div>
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('admin.article-categories.*') ? 'active' : '' }}"
                           href="{{ route('admin.article-categories.index') }}">
                            <span class="nav-link-text">
                                <span class="nav-icon">📚</span>
                                دسته‌بندی مقالات
                            </span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('admin.articles.*') && !request()->routeIs('admin.articles.create') ? 'active' : '' }}"
                           href="{{ route('admin.articles.index') }}">
                            <span class="nav-link-text">
                                <span class="nav-icon">📝</span>
                                مقاله‌ها
                            </span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('admin.articles.create') ? 'active' : '' }}"
                           href="{{ route('admin.articles.create') }}">
                            <span class="nav-link-text">
                                <span class="nav-icon">➕</span>
                                افزودن مقاله
                            </span>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="menu-section">
                <div class="menu-section-title">مدیریت محصولات</div>
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('admin.product-categories.*') ? 'active' : '' }}"
                           href="{{ route('admin.product-categories.index') }}">
                            <span class="nav-link-text">
                                <span class="nav-icon">🗂️</span>
                                دسته‌بندی محصولات
                            </span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('admin.products.*') && !request()->routeIs('admin.products.create') ? 'active' : '' }}"
                           href="{{ route('admin.products.index') }}">
                            <span class="nav-link-text">
                                <span class="nav-icon">🛍️</span>
                                محصولات
                            </span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('admin.products.create') ? 'active' : '' }}"
                           href="{{ route('admin.products.create') }}">
                            <span class="nav-link-text">
                                <span class="nav-icon">➕</span>
                                افزودن محصول
                            </span>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="menu-section">
                <div class="menu-section-title">مدیریت پزشکان</div>
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('admin.doctors.*') && !request()->routeIs('admin.doctors.create') ? 'active' : '' }}"
                           href="{{ route('admin.doctors.index') }}">
                            <span class="nav-link-text">
                                <span class="nav-icon">👨‍⚕️</span>
                                پزشکان
                            </span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('admin.doctors.create') ? 'active' : '' }}"
                           href="{{ route('admin.doctors.create') }}">
                            <span class="nav-link-text">
                                <span class="nav-icon">➕</span>
                                افزودن پزشک
                            </span>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="menu-section">
                <div class="menu-section-title">مدیریت وبینارها</div>
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('admin.webinars.*') && !request()->routeIs('admin.webinars.create') ? 'active' : '' }}"
                           href="{{ route('admin.webinars.index') }}">
                            <span class="nav-link-text">
                                <span class="nav-icon">🎥</span>
                                وبینارها
                            </span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('admin.webinars.create') ? 'active' : '' }}"
                           href="{{ route('admin.webinars.create') }}">
                            <span class="nav-link-text">
                                <span class="nav-icon">➕</span>
                                افزودن وبینار
                            </span>
                        </a>
                    </li>
                </ul>
            </div>
        </aside>

        <main class="col-12 col-lg-9 col-xl-10 content-wrap">
            <div class="topbar">
                <h2 class="topbar-title">{{ $title ?? 'پنل مدیریت' }}</h2>
                <p class="topbar-desc">از این بخش می‌توانید محتوا، محصولات، اطلاعات پزشکان و وبینارها را مدیریت کنید.</p>
            </div>

            @if (session('status'))
                <div class="alert alert-success shadow-sm">
                    {{ session('status') }}
                </div>
            @endif

            @if ($errors->any())
                <div class="alert alert-danger shadow-sm">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="content-card">
                @yield('content')
            </div>
        </main>

    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
