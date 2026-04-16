@extends('admin.layouts.app', ['title' => 'ویرایش محصول'])

@section('content')
    <h1 class="h3 mb-4">ویرایش محصول</h1>
    <div class="card border-0 shadow-sm">
        <div class="card-body">
            <form action="{{ route('admin.products.update', $product) }}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @include('admin.products._form', ['product' => $product])
            </form>
        </div>
    </div>
@endsection
