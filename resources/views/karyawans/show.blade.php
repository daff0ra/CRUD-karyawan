@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 class="h4 mb-4">Detail Karyawan</h2>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">ID: {{ $karyawan->id }}</h5>
                <p class="card-text">Nama: {{ $karyawan->nama }}</p>
                <p class="card-text">Jabatan: {{ $karyawan->jabatan }}</p>
                <a href="{{ route('karyawans.index') }}" class="btn btn-primary">Kembali</a>
            </div>
        </div>
    </div>
@endsection
