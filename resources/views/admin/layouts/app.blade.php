<!doctype html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? 'پنل مدیریت' }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.rtl.min.css" rel="stylesheet">
    <style>
        body { background: #f5f7fb; }
        .sidebar { min-height: 100vh; background: linear-gradient(180deg, #212529, #343a40); }
        .sidebar .nav-link { color: #dee2e6; border-radius: .5rem; }
        .sidebar .nav-link.active, .sidebar .nav-link:hover { background: rgba(255,255,255,.12); color: #fff; }
        .content-wrap { min-height: 100vh; }
    </style>
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <aside class="col-12 col-md-3 col-lg-2 p-3 sidebar">
            <h5 class="text-white mb-4">پنل ادمین</h5>
            <ul class="nav flex-column gap-2">
                <li class="nav-item"><a class="nav-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}" href="{{ route('admin.dashboard') }}">داشبورد</a></li>
                <li class="nav-item"><a class="nav-link {{ request()->routeIs('admin.article-categories.*') ? 'active' : '' }}" href="{{ route('admin.article-categories.index') }}">دسته‌بندی مقالات</a></li>
                <li class="nav-item"><a class="nav-link {{ request()->routeIs('admin.articles.*') ? 'active' : '' }}" href="{{ route('admin.articles.index') }}">مقاله‌ها</a></li>
                <li class="nav-item"><a class="nav-link {{ request()->routeIs('admin.product-categories.*') ? 'active' : '' }}" href="{{ route('admin.product-categories.index') }}">دسته‌بندی محصولات</a></li>
                <li class="nav-item"><a class="nav-link {{ request()->routeIs('admin.products.*') ? 'active' : '' }}" href="{{ route('admin.products.index') }}">محصولات</a></li>
                <li class="nav-item"><a class="nav-link {{ request()->routeIs('admin.doctors.*') ? 'active' : '' }}" href="{{ route('admin.doctors.index') }}">پزشکان</a></li>
                <li class="nav-item"><a class="nav-link {{ request()->routeIs('admin.articles.create') ? 'active' : '' }}" href="{{ route('admin.articles.create') }}">افزودن مقاله</a></li>
                <li class="nav-item"><a class="nav-link {{ request()->routeIs('admin.products.create') ? 'active' : '' }}" href="{{ route('admin.products.create') }}">افزودن محصول</a></li>
                <li class="nav-item"><a class="nav-link {{ request()->routeIs('admin.doctors.create') ? 'active' : '' }}" href="{{ route('admin.doctors.create') }}">افزودن پزشک</a></li>
            </ul>
        </aside>

        <main class="col-12 col-md-9 col-lg-10 p-4 content-wrap">
            @if (session('status'))
                <div class="alert alert-success">{{ session('status') }}</div>
            @endif

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @yield('content')
        </main>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
