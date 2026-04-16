@extends('admin.layouts.app', ['title' => 'ویرایش مقاله'])

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3 mb-0">ویرایش مقاله</h1>
    </div>

    <div class="card border-0 shadow-sm">
        <div class="card-body">
            <form action="{{ route('admin.articles.update', $article) }}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @include('admin.articles._form', ['article' => $article])
            </form>
        </div>
    </div>
@endsection
