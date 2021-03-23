@extends('layout.master')
@section('content')
    {{-- <h1>Main Page </h1> --}}
    <h5 class="mt-2 mb-3 ">Hello, User!!!</h5>


    <form class="mb-3" action="{{ url('/editTodo') }}/{{ $data['id'] }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{$data['title']}}">

        </div>
        <div class="mb-3">
            <label for="desc" class="form-label">Description</label>
            <input type="text" class="form-control" id="description" name="description" value="{{$data['description']}}">
        </div>

        <button type="submit" class="btn btn-primary">Update Todo</button>
    </form>
@endsection


