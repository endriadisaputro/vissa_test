@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Create a new Foods</h1>
</div>
<div class="row">
    <div class="col-lg-6">
        <form action="/dashboard/foods" method="post">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Nama Makanan</label>
                <input type="text" name="name" class="form-control" id="name">
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Harga Makanan</label>
                <input type="number" name="price" class="form-control" id="price">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@endsection