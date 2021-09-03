@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">orders</h1>
</div>

<div class="table-responsive">
    {{-- <a href="/dashboard/orders/create" class="btn btn-primary">+ Create a new order</a> --}}
    <table class="table table-striped table-sm">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Name</th>
                <th scope="col">No Pesanan</th>
                <th scope="col">No Meja</th>
                <th scope="col">Total</th>
                <th scope="col">Status</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($orders as $order)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $order->name }}</td>
                    <td>{{ $order->no_pesanan }}</td>
                    <td>{{ $order->no_meja }}</td>
                    <td>{{ $order->total }}</td>
                    <td>{{ $order->status }}</td>
                    <td class="d-flex">
                        {{-- <a href="/dashboard/orders/{{ $order->id }}/edit" class="badge bg-success mx-1"><span data-feather="edit"></span></a> --}}
                        <form action="/dashboard/orders/{{ $order->id }}" method="post">
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