@extends('layout')

@section('title', 'Student Profile')

@section('content')
<div class="card shadow-sm mx-auto" style="max-width: 500px;">
    <div class="card-header bg-info text-white text-center">
        <h3>Student Profile</h3>
    </div>
    <div class="card-body">
        <ul class="list-group list-group-flush">
            <li class="list-group-item"><strong>Name:</strong> John Doe</li>
            <li class="list-group-item"><strong>Email:</strong> john.doe@example.com</li>
            <li class="list-group-item"><strong>Course:</strong> BS Information Technology</li>
            <li class="list-group-item"><strong>Year Level:</strong> 3rd Year</li>
        </ul>
        <div class="mt-4 text-center">
            <a href="{{ route('students.index') }}" class="btn btn-secondary">Back to Student List</a>
        </div>
    </div>
</div>
@endsection