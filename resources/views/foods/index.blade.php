@extends('layouts.main')

@section('container')
<div class="container">
    <div class="row">
        @foreach ($foods as $food)
        <div class="col-md-4 my-2">
            <div class="card">
                <img src="https://source.unsplash.com/150x150/?food" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title text-center">{{ $food->name }}</h5>
                    <p class="card-text text-center">Rp. {{ $food->price }}</p>
                    <a href="/orders/{{ $food->id }}" class="btn btn-primary justify-content-center d-block">Pesan</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection