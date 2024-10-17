@extends('layouts.app')

@section('title', 'Item Details')

@section('content')
    <h2>Detail Barang</h2>

    <div style="margin-top: 20px" class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $item->name }}</h5>
            <p class="card-text">Harga : {{ $item->price }}</p>
            <p class="card-text">Jumlah : {{ $item->quantity }}</p>
            <a href="{{ route('items.index') }}" class="btn btn-secondary">Kembali</a>
        </div>
    </div>
@endsection