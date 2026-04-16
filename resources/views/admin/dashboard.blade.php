@extends('admin.layouts.app', ['title' => 'داشبورد ادمین'])

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3 mb-0">داشبورد مدیریت</h1>
        <a href="{{ route('admin.articles.create') }}" class="btn btn-primary">افزودن مقاله جدید</a>
    </div>

    <div class="row g-3 mb-4">
        <div class="col-md-6 col-xl-4">
            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <p class="text-muted mb-2">تعداد کل مقالات</p>
                    <h2 class="mb-0">{{ $totalArticles }}</h2>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-4">
            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <p class="text-muted mb-2">مقالات منتشرشده</p>
                    <h2 class="mb-0">{{ $publishedArticles }}</h2>
                </div>
            </div>
        </div>
    </div>

    <div class="card border-0 shadow-sm">
        <div class="card-header bg-white d-flex justify-content-between align-items-center">
            <h2 class="h5 mb-0">آخرین مقالات</h2>
            <a href="{{ route('admin.articles.index') }}" class="btn btn-sm btn-outline-secondary">مدیریت همه</a>
        </div>
        <div class="table-responsive">
            <table class="table table-hover mb-0 align-middle">
                <thead class="table-light">
                <tr>
                    <th>عنوان</th>
                    <th>موضوع</th>
                    <th>تاریخ انتشار</th>
                    <th>عملیات</th>
                </tr>
                </thead>
                <tbody>
                @forelse($latestArticles as $article)
                    <tr>
                        <td>{{ $article->title }}</td>
                        <td>{{ $article->subject }}</td>
                        <td>{{ optional($article->published_at)->format('Y-m-d H:i') ?? '-' }}</td>
                        <td>
                            <a href="{{ route('admin.articles.edit', $article) }}" class="btn btn-sm btn-outline-primary">ویرایش</a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="text-center py-4">هنوز مقاله‌ای ثبت نشده است.</td>
                    </tr>
                @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
