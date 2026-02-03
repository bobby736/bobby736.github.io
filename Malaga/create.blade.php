@extends('layout')

@section('title', 'Add Student')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card shadow-sm">
            <div class="card-header bg-primary text-white"><h4>Add New Student</h4></div>
            <div class="card-body">
                <form>
                    <div class="mb-3">
                        <label class="form-label">Full Name</label>
                        <input type="text" class="form-control" placeholder="Enter name">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" class="form-control" placeholder="Enter email">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Course</label>
                        <input type="text" class="form-control" placeholder="e.g. BSIT">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Year Level</label>
                        <select class="form-select">
                            <option>1st Year</option>
                            <option>2nd Year</option>
                            <option>3rd Year</option>
                            <option>4th Year</option>
                        </select>
                    </div>
                    <button type="button" class="btn btn-primary">Save Student</button>
                    <a href="{{ route('students.index') }}" class="btn btn-secondary">Cancel</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection