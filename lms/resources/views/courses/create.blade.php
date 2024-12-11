@extends('layouts.admin')
@section('content')
    <div class="container mt-5">
        <div class="row mb-4">
            <div class="col">
                <a href="{{ route('courses.index') }}" class="btn btn-secondary btn-md">
                    &larr; Back
                </a>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col text-center">
                <h2 class="display-2 text-success">Add a Course</h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form action="{{ route('courses.store') }}" method="POST" class="shadow-sm p-4 bg-light rounded">
                    {{ csrf_field() }}
                    <div class="mb-3">
                        <label for="course_name" class="form-label">Course Name</label>
                        <input type="text" class="form-control" id="course_name" name="course_name" placeholder="Enter course name">
                    </div>
                    <div class="mb-3">
                        <label for="course_index" class="form-label">Course Index</label>
                        <input type="number" class="form-control" id="course_index" name="course_index" placeholder="Enter course index">
                    </div>
                    <div class="mb-3">
                        <label for="course_description" class="form-label">Course Description</label>
                        <input type="text" class="form-control" id="course_description" name="course_description" placeholder="Enter course description">
                    </div>
                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-primary btn-lg">Add Course</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
