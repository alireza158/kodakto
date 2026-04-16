@extends('admin.layouts.app', ['title' => 'افزودن دسته مقاله'])

@section('content')
    <h1 class="h3 mb-4">افزودن دسته مقاله</h1>
    <div class="card border-0 shadow-sm"><div class="card-body">
        <form action="{{ route('admin.article-categories.store') }}" method="POST">@csrf
            <label class="form-label">نام دسته</label>
            <input type="text" name="name" class="form-control mb-3" required value="{{ old('name') }}">
            <button class="btn btn-primary">ذخیره</button>
        </form>
    </div></div>
@endsection
