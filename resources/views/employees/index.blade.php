@extends('layouts.app')

@section('title', 'Home Karyawan')

@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">List Karyawan</h1>
        <a href="{{ route('employees.create') }}" class="btn btn-primary">Tambah Data Karyawan</a>
    </div>
    <hr />
    @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
    <table class="table table-hover">
        <thead class="table-primary">
            <tr>
                <th>no.</th>
                <th>nama_karyawan</th>
                <th>nomor_kode</th>
                <th>nomor_telepon</th>
                <th>profesi</th>
                <th>status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>+
            @if($employee->count() > 0)
                @foreach($employee as $rs)
                    <tr>
                        <td class="align-middle">{{ $loop->iteration }}</td>
                        <td class="align-middle">{{ $rs->nama_karyawan }}</td>
                        <td class="align-middle">{{ $rs->nomor_kode }}</td>
                        <td class="align-middle">{{ $rs->nomor_telepon }}</td>
                        <td class="align-middle">{{ $rs->profesi }}</td>
                        <td class="align-middle">{{ $rs->status }}</td>
                        <td class="align-middle">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{ route('employees.show', $rs->id) }}" type="button" class="btn btn-secondary">Detail</a>
                                <a href="{{ route('employees.edit', $rs->id)}}" type="button" class="btn btn-warning">Edit</a>
                                <form action="{{ route('employees.destroy', $rs->id) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Delete?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger m-0">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td class="text-center" colspan="5">Employee not found</td>
                </tr>
            @endif
        </tbody>
    </table>
@endsection
