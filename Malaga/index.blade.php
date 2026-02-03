@extends('layout')

@section('title', 'Student List')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h2>Student List</h2>
    <a href="{{ route('students.create') }}" class="btn btn-success">Add New Student</a>
</div>

<div class="card shadow-sm">
    <div class="card-body">
        <table class="table table-hover">
            <thead class="table-dark">
                <tr>
                    <th>Name</th>
                    <th>Course</th>
                    <th>Year Level</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>John Doe</td>
                    <td>BSIT</td>
                    <td>3rd Year</td>
                    <td>
                        <a href="{{ route('students.show') }}" class="btn btn-sm btn-info text-white">View</a>
                        <a href="{{ route('students.edit') }}" class="btn btn-sm btn-warning">Edit</a>
                    </td>
                </tr>
                <tr>
                    <td>Jane Smith</td>
                    <td>BSCS</td>
                    <td>2nd Year</td>
                    <td>
                        <a href="#" class="btn btn-sm btn-info text-white">View</a>
                        <a href="#" class="btn btn-sm btn-warning">Edit</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection