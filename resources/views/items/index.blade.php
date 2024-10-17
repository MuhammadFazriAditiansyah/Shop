@extends('layouts.app')

@section('title', 'Item List')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>List Barang</h2>
        <a href="{{ route('items.create') }}" class="btn btn-primary">Tambah Barang Baru</a>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            {{ $message }}
        </div>
    @endif

    <table style="text-align: center" class="table table-bordered">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Harga</th>
                <th>Jumlah</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($items as $item)
            <tr>
                <td>{{ $item->name }}</td>
                <td>{{ $item->price }}</td>
                <td>{{ $item->quantity }}</td>
                <td class="d-flex">
                    <a href="{{ route('items.show', $item->id) }}" style="padding:10px; width:80px; color:white;"  class="btn btn-info btn-sm me-2">Lihat</a>
                    <a href="{{ route('items.edit', $item->id) }}" style="padding:10px; width:80px; color:white;" class="btn btn-warning btn-sm me-2">Edit</a>
                    <form action="{{ route('items.destroy', $item->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button style="padding:10px; width:80px" type="submit" class="btn btn-danger btn-sm">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection