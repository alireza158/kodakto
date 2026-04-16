@extends('admin.layouts.app', ['title' => 'ویرایش پزشک'])
@section('content')
<h1 class="h3 mb-4">ویرایش پزشک</h1>
<div class="card border-0 shadow-sm"><div class="card-body"><form method="POST" action="{{ route('admin.doctors.update', $doctor) }}" enctype="multipart/form-data">@method('PUT')@include('admin.doctors._form', ['doctor' => $doctor])</form></div></div>
@endsection
