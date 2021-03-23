@extends('layout.master')
@section('content')
    {{-- <h1>Main Page </h1> --}}
    <h5 class="mt-2 mb-3 ">Hello, User!!!</h5>


    <form class="mb-3" action="{{ url('addTodo') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title" required>

        </div>
        <div class="mb-3">
            <label for="desc" class="form-label">Description</label>
            <input type="text" class="form-control" id="description" name="description" required>
        </div>

        <button type="submit" class="btn btn-primary">Add Todo</button>
    </form>
    <table class="table table-striped mb-10">

        <thead>
            <tr>
                <th>SN</th>
                <th>Title</th>
                <th>Description</th>
                <th>Created At</th>
                <th>Updated At</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody {{ $i = 0 }}>
            {{-- Hardly Coded Data for development --}}
            {{-- <tr>
                <td>1</td>
                <td>sample title</td>
                <td>sample description</td>
                <td>2021-03-11 17:44:03.601079</td>
                <td></td>
                <td>
                    <button type="button" class="btn btn-outline-warning btn-sm mx-1" data-bs-toggle="modal"
                        data-bs-target="#staticBackdrop">Update</button>
                    <button type="button" class="btn btn-outline-danger btn-sm mx-1">Delete</button>
            </tr> --}}
            
            @foreach ($data as $item)
                <tr>
                    <td>{{ ++$i }}</td>
                    <td >{{ $item['title'] }}</td>
                    <td >{{ $item['description'] }}</td>
                    <td>{{ $item['created_at'] }}</td>
                    <td>{{ $item['updated_at'] }}</td>
                    <td>

                        <button type="button" class="btn btn-outline-warning btn-sm mx-1 mt-1">
                            <a href="{{ url('/editViewTodo') }}/{{ $item['id'] }}" style="text-decoration: none">
                                Update
                            </a>
                        </button>

                        <button type="button" class="btn btn-outline-danger btn-sm mx-1 mt-1">
                            <a href="{{ url('/deleteTodo') }}/{{ $item['id'] }}" style="text-decoration: none">
                                Delete
                            </a>
                        </button>

                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>
@endsection


{{-- <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
    Launch static backdrop modal
</button> --}}

{{-- <!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Update Todo</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form class="mb-3" action="{{ url('/editTodo') }}/{{ $item['id'] }}" method="POST">
                <div class="modal-body">
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control" id="title" name="title" value="{{ $item['title'] }}"
                            required>

                    </div>
                    <div class="mb-3">
                        <label for="desc" class="form-label">Description</label>
                        <input type="text" class="form-control" id="description" name="description"
                            value="{{ $item['description'] }}" required>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Add Todo</button>
                </div>
            </form>
        </div>
    </div>
</div> --}}
