@extends('layouts.app')

@section('title', 'Dashboard Admin')

@section('content')
<div class="container mt-10">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow-sm border-0">
                <div class="card-header bg-primary text-white text-center">
                    <h5 class="mb-0">Profil Admin</h5>
                </div>
                <div class="card-body">
                    @if(Auth::guard('admin')->check())
                        <table class="table table-borderless">
                            <tr>
                                <th>Nama</th>
                                <td>: {{ Auth::guard('admin')->user()->first_name }} {{ Auth::guard('admin')->user()->last_name }}</td>
                            </tr>
                            <tr>
                                <th>Email</th>
                                <td>: {{ Auth::guard('admin')->user()->email }}</td>
                            </tr>
                            <tr>
                                <th>Tanggal Lahir</th>
                                <td>: {{ Auth::guard('admin')->user()->birth_date }}</td>
                            </tr>
                            <tr>
                                <th>Jenis Kelamin</th>
                                <td>: {{ Auth::guard('admin')->user()->gender }}</td>
                            </tr>
                        </table>
                        
                        <div class="text-center mt-3">
                            <a href="{{ route('admin.edit') }}" class="btn btn-primary">
                                <i class="bi bi-pencil-square"></i> Edit Profil
                            </a>
                        </div>
                    @else
                        <p class="text-danger text-center">Anda belum login.</p>
                        <div class="text-center">
                            <a href="{{ route('login') }}" class="btn btn-success">
                                <i class="bi bi-box-arrow-in-right"></i> Login di sini
                            </a>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
