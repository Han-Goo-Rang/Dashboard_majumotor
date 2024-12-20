@extends('layouts.app')
  
@section('title', 'Show Employee')
  
@section('contents')
    <h1 class="mb-0">Detail Employee</h1>
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Nama Karyawan</label>
            <input type="text" name="nama_karyawan" class="form-control" placeholder="nama_karyawan" value="{{ $employee->nama_karyawan }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">nomor_kode</label>
            <input type="text" name="nomor_kode" class="form-control" placeholder="nomor_kode" value="{{ $employee->nomor_kode }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Nomor Telepon Aktif</label>
            <input type="text" name="nomor_telepon" class="form-control" placeholder="nomor_telepon" value="{{ $employee->nomor_telepon }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Profesi Bidang</label>
            <input type="text" name="profesi" class="form-control" placeholder="profesi" value="{{ $employee->profesi }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">status</label>
            <textarea class="form-control" name="status" placeholder="status" readonly>{{ $employee->status }}</textarea>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Created At</label>
            <input type="text" name="created_at" class="form-control" placeholder="Created At" value="{{ $employee->created_at }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Updated At</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="{{ $employee->updated_at }}" readonly>
        </div>
    </div>
@endsection