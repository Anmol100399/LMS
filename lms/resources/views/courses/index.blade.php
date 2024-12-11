@extends('layouts.admin')
@section('content')
    <div class="container mt-5">
        <div class="row mb-4">
            <div class="col text-center">
                <h1 class="display-2 text-primary">All Courses</h1>
                <a href="{{ route('courses.create') }}" class="btn btn-success mt-3">Add a New Course</a>
            </div>
        </div>
        <div class="row">
            @foreach ($courses as $course)
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title text-dark">
                                {{ $course->course_name }}
                            </h5>
                            <div class="mt-3">
                                <a href="{{ route('courses.edit', $course->id) }}" class="btn btn-primary btn-sm">
                                    Edit
                                </a>
                                <a href="{{ route('courses.trash', $course->id) }}" class="btn btn-danger btn-sm">
                                    Delete
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
