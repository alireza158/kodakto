@extends('admin.layouts.app', ['title' => 'ویرایش وبینار'])

@section('content')
    <h1 class="h3 mb-4">ویرایش وبینار</h1>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('admin.webinars.update', $webinar) }}" enctype="multipart/form-data">
        @method('PUT')
        @include('admin.webinars._form', ['webinar' => $webinar])
    </form>
@endsection
