@extends('layouts.app')
  
@section('title', 'Edit Employee')
  
@section('contents')
    <h1 class="mb-0">Edit Employee</h1>
    <hr />
    <form action="{{ route('employees.update', $employee->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
        <div class="col mb-3">
            <label class="form-label">Nama Karyawan</label>
            <input type="text" name="nama_karyawan" class="form-control" placeholder="nama_karyawan" value="{{ $employee->nama_karyawan }}" >
        </div>
        <div class="col mb-3">
            <label class="form-label">nomor_kode</label>
            <input type="text" name="nomor_kode" class="form-control" placeholder="nomor_kode" value="{{ $employee->nomor_kode }}" >
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Nomor Telepon Aktif</label>
            <input type="text" name="nomor_telepon" class="form-control" placeholder="nomor_telepon" value="{{ $employee->nomor_telepon }}" >
        </div>
        <div class="col mb-3">
            <label class="form-label">Profesi Bidang</label>
            <input type="text" name="profesi" class="form-control" placeholder="profesi" value="{{ $employee->profesi }}" >
        </div>
        <div class="col mb-3">
            <label class="form-label">status</label>
            <textarea class="form-control" name="status" placeholder="status" >{{ $employee->status }}</textarea>
        </div>
    </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
@endsection