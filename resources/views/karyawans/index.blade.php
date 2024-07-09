@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="h4">Daftar Karyawan</h2>
        <a href="{{ route('karyawans.create') }}" class="btn btn-success">Tambah Karyawan</a>
    </div>

    <!-- Form Pencarian -->
    <form action="{{ route('karyawans.index') }}" method="GET" class="mb-4">
        <div class="input-group">
            <input type="text" class="form-control" name="search" placeholder="Cari karyawan dengan ID atau Nama..." value="{{ $search }}">
            <div class="input-group-append">
                <button class="btn btn-primary" type="submit">Cari</button>
            </div>
        </div>
    </form>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Jabatan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($karyawans as $karyawan)
                <tr>
                    <td>{{ $karyawan->id }}</td>
                    <td>{{ $karyawan->nama }}</td>
                    <td>{{ $karyawan->jabatan }}</td>
                    <td>
                        <a href="{{ route('karyawans.show', $karyawan->id) }}" class="btn btn-info btn-sm">Show</a>
                        <a href="{{ route('karyawans.edit', $karyawan->id) }}" class="btn btn-primary btn-sm">Edit</a>
                        <form action="{{ route('karyawans.destroy', $karyawan->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" class="text-center">No results found</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    <!-- Pagination Links -->
    {{ $karyawans->appends(['search' => $search])->links() }}
@endsection
