@extends('layout')

@section('title', 'Edit Student')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card shadow-sm border-warning">
            <div class="card-header bg-warning"><h4>Edit Student</h4></div>
            <div class="card-body">
                <form>
                    <div class="mb-3">
                        <label class="form-label">Full Name</label>
                        <input type="text" class="form-control" value="John Doe">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" class="form-control" value="john.doe@example.com">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Course</label>
                        <input type="text" class="form-control" value="BSIT">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Year Level</label>
                        <select class="form-select">
                            <option>1st Year</option>
                            <option>2nd Year</option>
                            <option selected>3rd Year</option>
                            <option>4th Year</option>
                        </select>
                    </div>
                    <button type="button" class="btn btn-warning">Update</button>
                    <a href="{{ route('students.index') }}" class="btn btn-secondary">Cancel</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection