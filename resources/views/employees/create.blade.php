@extends('layouts.app')
  
@section('title', 'Create Employee')
  
@section('contents')
    <h1 class="mb-0">Tambah Karyawan</h1>
    <hr />
    <form action="{{ route('employees.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="nama_karyawan" class="form-control" placeholder="nama_karyawan">
            </div>
            <div class="col">
                <input type="text" name="nomor_kode" class="form-control" placeholder="nomor_kode">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="nomor_telepon" class="form-control" placeholder="nomor_telepon">
            </div>
            <div class="col">
                <input type="text" name="profesi" class="form-control" placeholder="profesi">
            </div>
            <div class="col">
                <textarea class="form-control" name="status" placeholder="status"></textarea>
            </div>
        </div>
 
        <div class="row">
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection