@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col">
            <h2 class="display-2">
                Add a student profile
            </h2>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="row">
        <div class="col">
            <form action="{{ route('students.store') }}" method="POST">
                {{ csrf_field() }}
                
                <div class="mb-3">
                    <label for="fname" class="form-label">First Name</label>
                    <input type="text" class="form-control" id="fname" name="fname" value="{{ old('fname') }}">
                    @error('fname')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="lname" class="form-label">Last Name</label>
                    <input type="text" class="form-control" id="lname" name="lname" value="{{ old('lname') }}">
                    @error('lname')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email Address</label>
                    <input type="text" class="form-control" id="email" name="email" value="{{ old('email') }}">
                    @error('email')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="course_name" class="form-label">Select Course</label>
                    <div id="course_name">
                        @foreach ($courses as $course)
                            <div>
                                <input type="checkbox" name="course_name[]" value="{{ $course->id }}" id="course_{{ $course->id }}"
                                    @if(in_array($course->id, old('course_name', []))) checked @endif>
                                <label for="course_{{ $course->id }}">{{ $course->course_name }}</label>
                            </div>
                        @endforeach
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Add Student</button>
            </form>
        </div>
    </div>
@endsection
