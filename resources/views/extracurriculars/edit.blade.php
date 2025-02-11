@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="card">
        <div class="card-header">
            <h4>Edit Ekstrakurikuler</h4>
        </div>
        <div class="card-body">
            <form action="{{ route('extracurriculars.update', $extracurricular->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="student_id" class="form-label">Pilih Siswa</label>
                    <select name="student_id" id="student_id" class="form-control">
                        @foreach($students as $student)
                            <option value="{{ $student->id }}" {{ $extracurricular->student_id == $student->id ? 'selected' : '' }}>
                                {{ $student->first_name }} {{ $student->last_name }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label">Nama Ekstrakurikuler</label>
                    <input type="text" name="name" id="name" class="form-control" value="{{ $extracurricular->name }}" required>
                </div>
                <div class="mb-3">
                    <label for="year_started" class="form-label">Tahun Mulai</label>
                    <input type="number" name="year_started" id="year_started" class="form-control" value="{{ $extracurricular->year_started }}" min="2000" max="{{ date('Y') }}" required>
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
                <a href="{{ route('extracurriculars.index') }}" class="btn btn-secondary">Kembali</a>
            </form>
        </div>
    </div>
</div>
@endsection
