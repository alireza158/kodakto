@extends('admin.layouts.app', ['title' => 'افزودن مقاله'])

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3 mb-0">افزودن مقاله جدید</h1>
    </div>

    <div class="card border-0 shadow-sm">
        <div class="card-body">
            <form action="{{ route('admin.articles.store') }}" method="POST" enctype="multipart/form-data">
                @include('admin.articles._form')
            </form>
        </div>
    </div>
@endsection
