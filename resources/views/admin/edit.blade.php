@extends('layouts.app')

@section('title', 'Edit Profil')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow-sm border-0">
                <div class="card-header bg-primary text-white text-center">
                    <h5 class="mb-0">Edit Profil Admin</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.update') }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label class="form-label">Nama Depan</label>
                            <input type="text" name="first_name" class="form-control" value="{{ Auth::guard('admin')->user()->first_name }}" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Nama Belakang</label>
                            <input type="text" name="last_name" class="form-control" value="{{ Auth::guard('admin')->user()->last_name }}" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Tanggal Lahir</label>
                            <input type="date" name="birth_date" class="form-control" value="{{ Auth::guard('admin')->user()->birth_date }}" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Jenis Kelamin</label>
                            <select name="gender" class="form-select" required>
                                <option value="Laki-laki" {{ Auth::guard('admin')->user()->gender == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                                <option value="Perempuan" {{ Auth::guard('admin')->user()->gender == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Password (Kosongkan jika tidak ingin mengubah)</label>
                            <input type="password" name="password" class="form-control">
                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn btn-success">
                                <i class="bi bi-save"></i> Simpan Perubahan
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
