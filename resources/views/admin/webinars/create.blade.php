@extends('admin.layouts.app', ['title' => 'افزودن وبینار'])

@section('content')
    <h1 class="h3 mb-4">افزودن وبینار</h1>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('admin.webinars.store') }}" enctype="multipart/form-data">
        @include('admin.webinars._form')
    </form>
@endsection
