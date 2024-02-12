@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Add Wallet to Transfer</h1>
    </div>

    <div class="col-lg-8">
        <form method="post" action="/dashboard/topup-and-withdrawal/top-up" class="mb-5" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="wallet_id" class="form-label">Input Full Wallet Kode</label>
                <input type="text" class="form-control @error('wallet_id') is-invalid @enderror" id="wallet_id"
                    wallet_id="wallet_id" required autofocus value="{{ old('wallet_id') }}">
                @error('wallet_id')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Top Up</button>
        </form>
    </div>
@endsection
