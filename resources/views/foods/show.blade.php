@extends('layouts.main')

@section('container')
<div class="row justify-content-center">
    <div class="col-md-5 mt-5">
        <main class="form-signin">
            <form action="/login" method="post">
                @csrf
                <h1 class="h3 mb-3 fw-normal">Pesan Sekarang</h1>

                <div class="form-floating">
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="Your Name" value="{{ old('name') }}">
                    <label for="name">Your Name</label>
                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                </div>
                <div class="form-floating">
                    <input type="text" class="form-control @error('no_pesanan') is-invalid @enderror" id="no_pesanan" name="no_pesanan" placeholder="Nomor Pesanan" value="{{ old('no_pesanan') }}">
                    <label for="no_pesanan">Nomor pesanan</label>
                        @error('no_pesanan')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                </div>
                <div class="form-floating">
                    <input type="text" class="form-control @error('no_meja') is-invalid @enderror" id="no_meja" name="no_meja" placeholder="Nomor Meja" value="{{ old('no_meja') }}">
                    <label for="no_meja">Nomor Meja</label>
                        @error('no_meja')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                </div>
                <div class="form-floating">
                    <input type="text" class="form-control @error('total') is-invalid @enderror" id="total" name="total" placeholder="Total" value="{{ old('total') }}">
                    <label for="total">Total</label>
                        @error('total')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                </div>
                <div class="form-floating">
                    <input type="text" class="form-control @error('status') is-invalid @enderror" id="status" name="status" placeholder="Status" value="{{ old('status') }}">
                    <label for="status">Status</label>
                        @error('status')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                </div>
                <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Pesan</button>
            </form>
        </main>
    </div>
</div>
@endsection