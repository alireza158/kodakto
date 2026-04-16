@extends('admin.layouts.app', ['title' => 'افزودن پزشک'])
@section('content')
<h1 class="h3 mb-4">افزودن پزشک</h1>
<div class="card border-0 shadow-sm"><div class="card-body"><form method="POST" action="{{ route('admin.doctors.store') }}" enctype="multipart/form-data">@include('admin.doctors._form')</form></div></div>
@endsection
