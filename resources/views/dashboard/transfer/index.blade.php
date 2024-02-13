@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Money Transfer</h1>
    </div>

    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show col-lg-8" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <a href="/dashboard/beneficiaries/add-wallet" class="btn btn-primary my-3">Add new Wallet to transfer</a>

    <div class="col-lg-8">
        <h2>Transfer</h2>
        <form method="post" action="/dashboard/topup-and-withdrawal/top-up" class="mb-5" enctype="multipart/form-data">
            @method('put')
            @csrf
            <div class="mb-3">
                <label for="walletTF" class="form-label">Selest a Wallet to Transfer</label>
                <select class="form-select" name="idTF" id="walletTF">
                    @foreach ($wallets as $wallet)
                        @if (old('id') == $wallet->id)
                            <option value="{{ $wallet->id }}" selected>{{ $wallet->Wallet->name }}</option>
                        @else
                            <option value="{{ $wallet->id }}">{{ $wallet->Wallet->name }}</option>
                        @endif
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="wallet" class="form-label">Selest a Wallet to Transfer</label>
                <select class="form-select" name="idW" id="wallet">
                    @foreach ($ownWallets as $wallet)
                        @if (old('id') == $wallet->id)
                            <option value="{{ $wallet->id }}" selected>{{ $wallet->name }}</option>
                        @else
                            <option value="{{ $wallet->id }}">{{ $wallet->name }}</option>
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
            <button type="submit" class="btn btn-primary">Transfer</button>
        </form>
    </div>
@endsection
