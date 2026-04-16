@extends('admin.layouts.app', ['title' => 'داشبورد ادمین'])

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3 mb-0">داشبورد مدیریت</h1>
        <div class="d-flex gap-2">
            <a href="{{ route('admin.articles.create') }}" class="btn btn-primary">افزودن مقاله</a>
            <a href="{{ route('admin.products.create') }}" class="btn btn-outline-primary">افزودن محصول</a>
        </div>
    </div>

    <div class="row g-3 mb-4">
        <div class="col-md-6 col-xl-2"><div class="card border-0 shadow-sm"><div class="card-body"><p class="text-muted mb-2">کل مقالات</p><h2 class="mb-0">{{ $totalArticles }}</h2></div></div></div>
        <div class="col-md-6 col-xl-2"><div class="card border-0 shadow-sm"><div class="card-body"><p class="text-muted mb-2">دسته مقاله</p><h2 class="mb-0">{{ $articleCategoriesCount }}</h2></div></div></div>
        <div class="col-md-6 col-xl-2"><div class="card border-0 shadow-sm"><div class="card-body"><p class="text-muted mb-2">منتشرشده</p><h2 class="mb-0">{{ $publishedArticles }}</h2></div></div></div>
        <div class="col-md-6 col-xl-2"><div class="card border-0 shadow-sm"><div class="card-body"><p class="text-muted mb-2">کل محصولات</p><h2 class="mb-0">{{ $totalProducts }}</h2></div></div></div>
        <div class="col-md-6 col-xl-2"><div class="card border-0 shadow-sm"><div class="card-body"><p class="text-muted mb-2">دسته محصول</p><h2 class="mb-0">{{ $productCategoriesCount }}</h2></div></div></div>
        <div class="col-md-6 col-xl-2"><div class="card border-0 shadow-sm"><div class="card-body"><p class="text-muted mb-2">محصول فعال</p><h2 class="mb-0">{{ $activeProducts }}</h2></div></div></div>
        <div class="col-md-6 col-xl-2"><div class="card border-0 shadow-sm"><div class="card-body"><p class="text-muted mb-2">کل پزشکان</p><h2 class="mb-0">{{ $totalDoctors }}</h2></div></div></div>
    </div>

    <div class="row g-3">
        <div class="col-lg-6">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-header bg-white d-flex justify-content-between align-items-center">
                    <h2 class="h6 mb-0">آخرین مقالات</h2>
                    <a href="{{ route('admin.articles.index') }}" class="btn btn-sm btn-outline-secondary">مدیریت</a>
                </div>
                <ul class="list-group list-group-flush">
                    @forelse($latestArticles as $article)
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <span>{{ $article->title }}</span>
                            <a href="{{ route('admin.articles.edit', $article) }}" class="btn btn-sm btn-outline-primary">ویرایش</a>
                        </li>
                    @empty
                        <li class="list-group-item text-center">مقاله‌ای وجود ندارد.</li>
                    @endforelse
                </ul>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-header bg-white d-flex justify-content-between align-items-center">
                    <h2 class="h6 mb-0">آخرین محصولات</h2>
                    <a href="{{ route('admin.products.index') }}" class="btn btn-sm btn-outline-secondary">مدیریت</a>
                </div>
                <ul class="list-group list-group-flush">
                    @forelse($latestProducts as $product)
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <span>{{ $product->name }}</span>
                            <a href="{{ route('admin.products.edit', $product) }}" class="btn btn-sm btn-outline-primary">ویرایش</a>
                        </li>
                    @empty
                        <li class="list-group-item text-center">محصولی وجود ندارد.</li>
                    @endforelse
                </ul>
            </div>
        </div>
    </div>
@endsection
