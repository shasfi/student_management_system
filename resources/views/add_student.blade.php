@extends('layout')

@section('content')

<h3>Add Student</h3>

@if($errors->any())
    @foreach($errors->all() as $error)
        <p class="text-danger">{{ $error }}</p>
    @endforeach
@endif

<form method="POST" action="/store-student">
    @csrf

    <div class="mb-2">
        <label>Name</label>
        <input type="text" name="name" class="form-control">
    </div>

    <div class="mb-2">
        <label>Email</label>
        <input type="text" name="email" class="form-control">
    </div>

    <div class="mb-2">
        <label>Age</label>
        <input type="text" name="age" class="form-control">
    </div>

    <button class="btn btn-success">Save</button>
</form>

@endsection