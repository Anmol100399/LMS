@extends('layouts.admin')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col">
                <h1 class="display-2 text-success">Trashed Courses</h1>
            </div>
        </div>
        <div class="row">
            @foreach ($courses as $course)
                <div class="col-md-4">
                    <div class="card shadow-sm mb-4">
                        <div class="card-body">
                            <h5 class="card-title">
                                {{ $course->course_name }}
                            </h5>
                            <div class="d-flex justify-content-between">
                                <a href="{{ route('courses.restore', $course->id) }}" class="btn btn-warning btn-sm">
                                    Restore
                                </a>
                                <a href="{{ route('courses.destroy', $course->id) }}" class="btn btn-danger btn-sm">
                                    Delete Permanently
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
