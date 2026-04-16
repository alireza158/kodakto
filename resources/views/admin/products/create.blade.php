@extends('admin.layouts.app', ['title' => 'افزودن محصول'])

@section('content')
    <h1 class="h3 mb-4">افزودن محصول جدید</h1>
    <div class="card border-0 shadow-sm">
        <div class="card-body">
            <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data">
                @include('admin.products._form')
            </form>
        </div>
    </div>
@endsection
