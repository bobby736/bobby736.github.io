@extends('layout')

@section('title', 'Welcome to the Student Portal')

@section('content')
<div class="p-5 mb-4 bg-white border rounded-3 text-center">
    <div class="container-fluid py-5">
        <h1 class="display-5 fw-bold">Welcome to the Student Portal</h1>
        <p class="col-md-8 fs-4 mx-auto">
            This system allows you to manage student records efficiently. 
            You can view, add, and edit student information with ease.
        </p>
        <a href="{{ route('students.index') }}" class="btn btn-primary btn-lg">View Student List</a>
    </div>
</div>
@endsection