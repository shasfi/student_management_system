@extends('layout')

@section('content')

<h3>Student List</h3>

<table class="table table-bordered">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Age</th>
        <th>Action</th>
    </tr>

    @foreach($students as $stu)
    <tr>
        <td>{{ $stu->id }}</td>
        <td>{{ $stu->name }}</td>
        <td>{{ $stu->email }}</td>
        <td>{{ $stu->age }}</td>
        <td>
            <a href="/edit-student/{{ $stu->id }}" class="btn btn-warning btn-sm">Edit</a>
            <a href="/delete-student/{{ $stu->id }}"class="btn btn-danger btn-sm"onclick="return confirm('Are you sure you want to delete')">Delete</a>

        </td>
    </tr>
    @endforeach
</table>
@endsection