@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="card">
        <div class="card-header">
            <h4>Detail Ekstrakurikuler</h4>
        </div>
        <div class="card-body">
            <p><strong>Nama Siswa:</strong> {{ $extracurricular->student->first_name }} {{ $extracurricular->student->last_name }}</p>
            <p><strong>Nama Ekstrakurikuler:</strong> {{ $extracurricular->name }}</p>
            <p><strong>Tahun Mulai:</strong> {{ $extracurricular->year_started }}</p>
            <a href="{{ route('extracurriculars.index') }}" class="btn btn-secondary">Kembali</a>
        </div>
    </div>
</div>
@endsection
