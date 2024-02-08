@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Add Wallet to Transfer</h1>
    </div>

    <div class="col-lg-8">
        <h2>Top Up</h2>
        <form method="post" action="/dashboard/topup-and-withdrawal/top-up" class="mb-5" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="balance" class="form-label">Input Full Wallet Name</label>
                <input type="number" class="form-control @error('balance') is-invalid @enderror" id="balance"
                    name="balance" required autofocus value="{{ old('balance') }}">
                @error('balance')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Top Up</button>
        </form>
    </div>
@endsection
