@extends('layout.main')

@section('title', 'Tambah Pembayaran')

@section('content')
<div class="container">
    <h2>Tambah Pembayaran</h2>
    <form action="{{ route('pembayaran.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="pesanan_id" class="form-label">Pesanan</label>
            <select name="pesanan_id" id="pesanan_id" class="form-control">
                <option value="">Pilih Pesanan</option>
                @foreach ($pesanan as $item)
                    <option value="{{ $item->id }}">{{ $item->pembeli->nama }} - {{ $item->barang->nama }}</option>
                @endforeach
            </select>
            @error('pesanan_id')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="jumlah" class="form-label">Jumlah</label>
            <input type="number" name="jumlah" id="jumlah" class="form-control" value="{{ old('jumlah') }}">
            @error('jumlah')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="harga" class="form-label">Harga</label>
            <input type="text" name="harga" id="harga" class="form-control" value="{{ old('harga') }}">
            @error('harga')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection
