@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">List of my bills</h1>
    </div>

    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show col-lg-8" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="container py-3">
        <div class="row">
            @if ($bills->count())
                @foreach ($bills as $bill)
                    <div class="col-md-4">
                        <div class="card mb-3 py-2">
                            <div class="row g-0">
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Bill Type : {{ $bill->bill_type }}</h5>
                                        <p class="card-text">List of my bills : {{ $bill->amount }}</p>
                                        <p class="card-text"><small class="text-body-secondary">Due Date :
                                                {{ $bill->due_date }}</small>
                                        </p>
                                        <a href="/dashboard/bills/{{ $bill->id }}/edit" class="btn btn-warning"><span
                                                data-feather="edit"></span>
                                            Change wallet name</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <p class="text-bold text-warning">Don't have a bill yet</p>
            @endif
        </div>
    </div>
@endsection
