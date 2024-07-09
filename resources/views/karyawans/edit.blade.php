@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 class="h4 mb-4">Edit Karyawan</h2>
        <form action="{{ route('karyawans.update', $karyawan->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" class="form-control" id="nama" name="nama" value="{{ $karyawan->nama }}" required>
            </div>
            <div class="form-group">
                <label for="jabatan">Jabatan:</label>
                <input type="text" class="form-control" id="jabatan" name="jabatan" value="{{ $karyawan->jabatan }}" required>
            </div>
            <button type="submit" class="btn btn-success">Simpan</button>
            <a href="{{ route('karyawans.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
@endsection
