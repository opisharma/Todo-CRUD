@extends('layout.main')

@section('main-section')

<div class="container">

    <div class="my-5 d-flex justify-content-between align-items-center">
        <div class="h2">Update</div>
        <a href="{{route("home")}}" class="btn btn-primary">Back</a>
    </div>
    <div>
        @if (session()->has('message'))

        <div class="alert alert-success">
            {{session()->get('message')}}
        </div>

        @endif
    </div>

    <div class="card">
        <div class="card-body">
            <form action="{{route('updateData')}}" method="post">
                @csrf
                <label for="" class="form-label mt-3">Name</label>
                <input type="text" name="name" class="form-control" value="{{$todo->name}}">
                <label for="" class="form-label mt-3">Work</label>
                <input type="text" name="work" class="form-control" value="{{$todo->work}}">
                <label for="" class="form-label mt-3">Due Date</label>
                <input type="date" name="dueDate" class="form-control" value="{{$todo->dueDate}}">
                <input type="number" name="id" value="{{$todo->id}}"  hidden>
                <button class="btn-primary btn-lg mt-4">Update</button>
            </form>
        </div>
    </div>

</div>

@endsection
