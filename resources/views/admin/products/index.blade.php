@extends('admin.layouts.app', ['title' => 'مدیریت محصولات'])

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3 mb-0">مدیریت محصولات</h1>
        <a href="{{ route('admin.products.create') }}" class="btn btn-primary">+ افزودن محصول</a>
    </div>

    <div class="card border-0 shadow-sm">
        <div class="table-responsive">
            <table class="table table-hover align-middle mb-0">
                <thead class="table-light"><tr><th>تصویر</th><th>نام</th><th>دسته</th><th>قیمت</th><th>وضعیت</th><th>عملیات</th></tr></thead>
                <tbody>
                @forelse($products as $product)
                    <tr>
                        <td><img src="{{ $product->image_path ? asset('storage/'.$product->image_path) : asset('theme/assets/images/16 1.png') }}" alt="{{ $product->name }}" class="rounded" width="72" height="48" style="object-fit: cover;"></td>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->categoryRelation?->name ?: '-' }}</td>
                        <td>{{ number_format((float) $product->discount_price ?: (float) $product->price) }} تومان</td>
                        <td>@if($product->is_active)<span class="badge text-bg-success">فعال</span>@else<span class="badge text-bg-secondary">غیرفعال</span>@endif</td>
                        <td>
                            <div class="d-flex gap-2">
                                <a href="{{ route('theme.single-product', $product->slug) }}" target="_blank" class="btn btn-sm btn-outline-secondary">نمایش</a>
                                <a href="{{ route('admin.products.edit', $product) }}" class="btn btn-sm btn-outline-primary">ویرایش</a>
                                <form action="{{ route('admin.products.destroy', $product) }}" method="POST" onsubmit="return confirm('حذف شود؟')">@csrf @method('DELETE')<button class="btn btn-sm btn-outline-danger" type="submit">حذف</button></form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr><td colspan="6" class="text-center py-4">محصولی ثبت نشده است.</td></tr>
                @endforelse
                </tbody>
            </table>
        </div>
    </div>

    <div class="mt-3">{{ $products->links() }}</div>
@endsection
