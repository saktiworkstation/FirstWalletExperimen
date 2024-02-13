@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Add Wallet to Transfer</h1>
    </div>

    @if (session()->has('success'))
        <div class="alert alert-warning alert-dismissible fade show col-lg-8" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="col-lg-8">
        <form method="post" action="/dashboard/beneficiaries/add-wallet" class="mb-5" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="wallet_id" class="form-label">Input Full Wallet Kode</label>
                <input type="text" class="form-control @error('wallet_id') is-invalid @enderror" id="wallet_id"
                    name="wallet_id" required autofocus value="{{ old('wallet_id') }}">
                @error('wallet_id')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Add Wallet</button>
        </form>
    </div>
@endsection
