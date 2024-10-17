@extends('layouts.app')

@section('title', 'Edit Item')

@section('content')
    <h2>Edit Barang</h2>

    <form action="{{ route('items.update', $item->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name" class="form-label">Nama</label>
            <input type="text" name="name" class="form-control" value="{{ $item->name }}" required>
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Harga</label>
            <input type="number" name="price" class="form-control" value="{{ $item->price }}" required>
        </div>
        <div class="mb-3">
            <label for="quantity" class="form-label">Jumlah</label>
            <input type="number" name="quantity" class="form-control" value="{{ $item->quantity }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection