@extends('layouts.app')

@section('title', 'Daftar Ekstrakurikuler')

@section('content')
<div class="container mt-10">
    <a href="{{ route('extracurriculars.create') }}" class="btn btn-primary mb-3">Tambah Ekstrakurikuler</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nama Ekstrakurikuler</th>
                <th>Nama Siswa</th>
                <th>Tahun Mulai</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($extracurriculars as $extra)
            <tr>
                <td>{{ $extra->name }}</td>
                <td>{{ $extra->student->first_name . ' ' . $extra->student->last_name }}</td>

                <td>{{ $extra->year_started }}</td>
                <td>
                    <a href="{{ route('extracurriculars.edit', $extra->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('extracurriculars.destroy', $extra->id) }}" method="POST" class="d-inline">
                        @csrf @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
