@extends('layout')

@section('content')

<h3>Edit Student</h3>

<form method="POST" action="/update-student/{{ $student->id }}">
    @csrf

    <div class="mb-2">
        <label>Name</label>
        <input type="text" name="name" value="{{ $student->name }}" class="form-control">
    </div>

    <div class="mb-2">
        <label>Email</label>
        <input type="text" name="email" value="{{ $student->email }}" class="form-control">
    </div>

    <div class="mb-2">
        <label>Age</label>
        <input type="text" name="age" value="{{ $student->age }}" class="form-control">
    </div>

    <button class="btn btn-primary" onclick="return confirm('Are you sure you want to update')">Update</button>
</form>

@endsection