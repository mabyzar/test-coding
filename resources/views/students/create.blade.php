@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="card">
        <div class="card-header">
            <h4>Tambah Siswa</h4>
        </div>
        <div class="card-body">
            <form action="{{ route('students.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="first_name" class="form-label">Nama Depan</label>
                        <input type="text" name="first_name" id="first_name" class="form-control" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="last_name" class="form-label">Nama Belakang</label>
                        <input type="text" name="last_name" id="last_name" class="form-control" required>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="phone_number" class="form-label">Nomor HP</label>
                    <input type="text" name="phone_number" id="phone_number" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="student_number" class="form-label">Nomor Induk Siswa</label>
                    <input type="text" name="student_number" id="student_number" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="address" class="form-label">Alamat</label>
                    <textarea name="address" id="address" class="form-control" rows="3" required></textarea>
                </div>

                <div class="mb-3">
                    <label class="form-label">Jenis Kelamin</label>
                    <div class="form-check">
                        <input type="radio" name="gender" value="Laki-laki" id="male" class="form-check-input" required>
                        <label for="male" class="form-check-label">Laki-laki</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" name="gender" value="Perempuan" id="female" class="form-check-input">
                        <label for="female" class="form-check-label">Perempuan</label>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="photo" class="form-label">Foto</label>
                    <input type="file" name="photo" id="photo" class="form-control" accept="image/*">
                </div>

                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="{{ route('students.index') }}" class="btn btn-secondary">Kembali</a>
            </form>
        </div>
    </div>
</div>
@endsection
