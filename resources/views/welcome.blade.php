@extends('layout.main')

@section('main-section')

<div class="container">

    <div class="my-5 d-flex justify-content-between align-items-center">
        <div class="h2">All Todos</div>
        <a href="{{route("create")}}" class="btn btn-primary">Add Todo</a>
    </div>

    <div>
        @if (session()->has('message'))

        <div class="alert alert-danger">
            {{session()->get('message')}}
        </div>

        @endif
    </div>
    <table class="table table-stripped">
        <tr>
            <th>Home</th>
            <th>Work</th>
            <th>Due Date</th>
            <th>Action</th>
        </tr>

        @foreach ($todos as $todo)
        <tr valign="middle">
            <td>{{$todo->name}}</td>
            <td>{{$todo->work}}</td>
            <td>{{$todo->dueDate}}</td>
            <td>
                <a href="{{route("update",$todo->id)}}" class="btn btn-warning btn-sm">Update</a>
                <a href="{{route("delete",$todo->id)}}" class="btn btn-danger btn-sm">Delete</a>
            </td>
        </tr>
        @endforeach
    </table>
</div>

@endsection
