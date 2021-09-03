@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Create a new orders</h1>
</div>
<div class="row mb-5">
    <div class="col-lg-6">
        <form action="/dashboard/orders" method="post">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Nama Pemesan</label>
                <input type="text" name="name" class="form-control" id="name" value="{{ $order->name }}">
            </div>
            <div class="mb-3">
                <label for="no_pesanan" class="form-label">No Pesanan</label>
                <input type="text" name="no_pesanan" class="form-control" id="price" value="{{ $order->no_pesanan }}">
            </div>
            <div class="mb-3">
                <label for="no_meja" class="form-label">No Meja</label>
                <input type="number" name="no_meja" class="form-control" id="price" value="{{ $order->no_meja }}">
            </div>
            <div class="mb-3">
                <label for="food_id" class="form-label">Makanan</label>
                <input type="text" name="food_id" class="form-control" id="price" value="{{ $order->food_id }}">
            </div>
            <div class="mb-3">
                <label for="total" class="form-label">Total</label>
                <input type="number" name="total" class="form-control" id="price" value="{{ $order->total }}">
            </div>
            <div class="mb-3">
                <label for="status" class="form-label">Status</label>
                <input type="text" name="status" class="form-control" id="price" value="{{ $order->status }}">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@endsection