@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Welcome back, {{ auth()->user()->name }}</h1>
    </div>

    <div class="container py-3">
        <div class="row">
            <h2 class="pb-3">My Wallets</h2>
            @if ($wallets->count())
                @foreach ($wallets as $wallet)
                    <div class="col-md-4">
                        <div class="card mb-3 py-2">
                            <div class="row g-0">
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $wallet->name }}</h5>
                                        <p class="card-text">Balance : {{ $wallet->balance }}</p>
                                        <p class="card-text"><small
                                                class="text-body-secondary">{{ $wallet->created_at->diffForHumans() }}</small>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <p class="text-bold text-warning">Don't have a wallet yet</p>
            @endif
        </div>
    </div>
@endsection
