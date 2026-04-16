@extends('admin.layouts.app', ['title' => 'مدیریت مقالات'])

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3 mb-0">مدیریت مقالات</h1>
        <a href="{{ route('admin.articles.create') }}" class="btn btn-primary">+ افزودن مقاله</a>
    </div>

    <div class="card border-0 shadow-sm">
        <div class="table-responsive">
            <table class="table table-hover align-middle mb-0">
                <thead class="table-light">
                <tr>
                    <th>تصویر</th>
                    <th>عنوان</th>
                    <th>دسته</th>
                    <th>تاریخ انتشار</th>
                    <th>عملیات</th>
                </tr>
                </thead>
                <tbody>
                @forelse($articles as $article)
                    <tr>
                        <td><img src="{{ $article->image_path ? asset('storage/'.$article->image_path) : asset('theme/assets/images/blog-card.png') }}" alt="{{ $article->title }}" class="rounded" width="72" height="48" style="object-fit: cover;"></td>
                        <td>{{ $article->title }}</td>
                        <td>{{ $article->category?->name ?: '-' }}</td>
                        <td>{{ optional($article->published_at)->format('Y-m-d H:i') ?? '-' }}</td>
                        <td>
                            <div class="d-flex gap-2">
                                <a href="{{ route('theme.single-blog', $article->slug) }}" target="_blank" class="btn btn-sm btn-outline-secondary">نمایش</a>
                                <a href="{{ route('admin.articles.edit', $article) }}" class="btn btn-sm btn-outline-primary">ویرایش</a>
                                <form action="{{ route('admin.articles.destroy', $article) }}" method="POST" onsubmit="return confirm('مطمئن هستید؟')">@csrf @method('DELETE')<button type="submit" class="btn btn-sm btn-outline-danger">حذف</button></form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr><td colspan="5" class="text-center py-4">هنوز مقاله‌ای ثبت نشده است.</td></tr>
                @endforelse
                </tbody>
            </table>
        </div>
    </div>

    <div class="mt-3">{{ $articles->links() }}</div>
@endsection
