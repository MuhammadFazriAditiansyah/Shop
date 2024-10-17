@extends('layouts.app')

@section('title', 'Add New Item')

@section('content')
    <h2>Tambahkan Barang</h2>

    <form action="{{ route('items.store') }}" method="POST">
        @csrf
        <div class="mt-5">
            <label for="name" class="form-label">Nama Barang</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Harga</label>
            <input type="number" name="price" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="quantity" class="form-label">Jumlah</label>
            <input type="number" name="quantity" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Tambah</button>
    </form>
@endsection