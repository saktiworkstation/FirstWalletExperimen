@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Bill Purchase</h1>
    </div>

    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show col-lg-8" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="container py-3">
        <div class="row">
            @foreach ($billTypes as $billType)
                <div class="col-md-4">
                    <div class="card mb-3 py-2">
                        <div class="row g-0">
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Bill Type : {{ $billType->type }}</h5>
                                    <a href="/dashboard/services/bill-purchase/single/{{ $billType->type }}"
                                        class="btn btn-warning"><span data-feather="edit"></span>
                                        Heading to the bill</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
