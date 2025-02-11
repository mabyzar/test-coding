<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index', ['admin' => Auth::guard('admin')->user()]);
    }

    public function edit()
    {
        return view('admin.edit', ['admin' => Auth::guard('admin')->user()]);
    }

    public function update(Request $request)
    {
        $admin = Auth::guard('admin')->user();
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'birth_date' => 'required|date',
            'gender' => 'required',
            'password' => 'nullable|min:6',
        ]);

        $admin->update($request->except('password') + [
            'password' => $request->password ? Hash::make($request->password) : $admin->password,
        ]);

        return redirect()->route('admin.index')->with('success', 'Profil berhasil diperbarui.');
    }
}

