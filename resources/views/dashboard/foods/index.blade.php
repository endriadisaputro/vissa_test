@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Foods</h1>
</div>

<div class="table-responsive">
    <a href="/dashboard/foods/create" class="btn btn-primary">+ Create a new Food</a>
    <table class="table table-striped table-sm">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Name</th>
                <th scope="col">Price</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($foods as $food)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $food->name }}</td>
                    <td>{{ $food->price }}</td>
                    <td class="d-flex">
                        <a href="/dashboard/foods/{{ $food->id }}" class="badge bg-info mx-1"><span data-feather="eye"></span></a>
                        <a href="/dashboard/foods/{{ $food->id }}/edit" class="badge bg-success mx-1"><span data-feather="edit"></span></a>
                        <form action="/dashboard/foods/{{ $food->id }}" method="post">
                            @csrf
                            @method('delete')
                            <button class="badge bg-danger"><span data-feather="x-circle"></span></button>
                        </form>
                    </td>
                </tr> 
            @endforeach
        </tbody>
    </table>
</div>
@endsection