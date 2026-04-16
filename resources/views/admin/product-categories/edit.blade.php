@extends('admin.layouts.app', ['title' => 'ویرایش دسته محصول'])

@section('content')
    <h1 class="h3 mb-4">ویرایش دسته محصول</h1>
    <div class="card border-0 shadow-sm"><div class="card-body">
        <form action="{{ route('admin.product-categories.update', $category) }}" method="POST">@csrf @method('PUT')
            <label class="form-label">نام دسته</label>
            <input type="text" name="name" class="form-control mb-3" required value="{{ old('name', $category->name) }}">
            <button class="btn btn-primary">ذخیره</button>
        </form>
    </div></div>
@endsection
