@extends('layouts.app')
  
@section('title', 'Create Product')
  
@section('contents')
    <h1 class="mb-0">Tambah Produk</h1>
    <hr />
    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="nama_produk" class="form-control" placeholder="nama_produk">
            </div>
            <div class="col">
                <input type="text" name="harga" class="form-control" placeholder="harga">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="kode_produk" class="form-control" placeholder="kode_produk">
            </div>
            <div class="col">
                <textarea class="form-control" name="deskripsi" placeholder="deskripsi"></textarea>
            </div>
        </div>
 
        <div class="row">
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection