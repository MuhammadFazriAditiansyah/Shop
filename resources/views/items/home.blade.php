@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div class="text-center mb-4">
    <h1>Welcome to Kasir App</h1>
    <p class="lead">Manage your items efficiently</p>
    <a href="{{ route('items.index') }}" class="btn btn-primary btn-lg">View Items</a>
</div>

<div class="row">
    <div class="col-md-4">
        <div class="card mb-4">
            <div class="card-body">
                <h5 class="card-title">Total Items</h5>
                <p class="card-text">{{ \App\Models\Item::count() }}</p>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card mb-4">
            <div class="card-body">
                <h5 class="card-title">Total Quantity</h5>
                <p class="card-text">{{ \App\Models\Item::sum('quantity') }}</p>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card mb-4">
            <div class="card-body">
                <h5 class="card-title">Total Revenue</h5>
                <p class="card-text">{{ \App\Models\Item::sum('price') }}</p>
            </div>
        </div>
    </div>
</div>
@endsection
