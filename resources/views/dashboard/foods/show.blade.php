@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Detail Foods</h1>
</div>
    <div class="row">
        <div class="col-lg-8">
            <div class="card mx-2" style="width: 18rem;">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{ $food->name }}</h5>
                    <p class="card-text">{{ $food->price }}</p>
                    <div>
                        <a href="/dashboard/foods" class="btn btn-success"><span data-feather="arrow-left"></span> Back to Foods</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection