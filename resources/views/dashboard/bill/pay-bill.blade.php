@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Pay bills : {{ $bill->BillType->type }}</h1>
    </div>

    @if (session()->has('success'))
        <div class="alert alert-warning alert-dismissible fade show col-lg-8" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="col-lg-8">
        <h2>Top Up</h2>
        <form method="post" action="/dashboard/bills/{{ $bill->id }}" class="mb-5" enctype="multipart/form-data">
            @method('put')
            @csrf
            <div class="mb-3">
                <label for="id" class="form-label">Selest a Wallet</label>
                <select class="form-select" name="id" id="id">
                    @foreach ($wallets as $wallet)
                        @if (old('id') == $wallet->id)
                            <option value="{{ $wallet->id }}" selected>{{ $wallet->name }} | Balance :
                                ${{ $wallet->balance }}</option>
                        @else
                            <option value="{{ $wallet->id }}">{{ $wallet->name }} | Balance :
                                ${{ $wallet->balance }}</option>
                        @endif
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="balance" class="form-label">Top up amount</label>
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
