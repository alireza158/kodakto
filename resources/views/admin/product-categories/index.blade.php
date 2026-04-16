@extends('admin.layouts.app', ['title' => 'دسته‌بندی محصولات'])

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3 mb-0">دسته‌بندی محصولات</h1>
        <a href="{{ route('admin.product-categories.create') }}" class="btn btn-primary">+ افزودن دسته</a>
    </div>
    <div class="card border-0 shadow-sm"><div class="table-responsive">
        <table class="table table-hover mb-0">
            <thead class="table-light"><tr><th>نام</th><th>دسته مادر</th><th>اسلاگ</th><th>تعداد محصول</th><th>عملیات</th></tr></thead>
            <tbody>
            @forelse($categories as $category)
                <tr>
                    <td>{{ $category->name }}</td>
                    <td>{{ $category->parent?->name ?: 'اصلی' }}</td>
                    <td>{{ $category->slug }}</td>
                    <td>{{ $category->products()->count() }}</td>
                    <td class="d-flex gap-2"><a href="{{ route('admin.product-categories.edit', $category) }}" class="btn btn-sm btn-outline-primary">ویرایش</a><form action="{{ route('admin.product-categories.destroy', $category) }}" method="POST" onsubmit="return confirm('حذف شود؟')">@csrf @method('DELETE')<button class="btn btn-sm btn-outline-danger">حذف</button></form></td>
                </tr>
            @empty
                <tr><td colspan="5" class="text-center py-4">دسته‌ای ثبت نشده است.</td></tr>
            @endforelse
            </tbody>
        </table>
    </div></div>
    <div class="mt-3">{{ $categories->links() }}</div>
@endsection
