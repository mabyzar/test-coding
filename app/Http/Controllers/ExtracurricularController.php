<?php

namespace App\Http\Controllers;

use App\Models\Extracurricular;
use App\Models\Student;
use Illuminate\Http\Request;

class ExtracurricularController extends Controller
{
    public function index()
    {
        $extracurriculars = Extracurricular::with('student')->get();

        return view('extracurriculars.index', compact('extracurriculars'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'student_id' => 'required|exists:students,id',
            'name' => 'required',
            'year_started' => 'required|integer|min:2000|max:' . date('Y'),
        ]);

        Extracurricular::create($request->all());

        return redirect()->route('extracurriculars.index')->with('success', 'Ekstrakurikuler berhasil ditambahkan.');
    }

    public function create()
    {
        $students = Student::all();
        return view('extracurriculars.create', compact('students'));
    }


    public function show(Extracurricular $extracurricular)
    {
        return view('extracurriculars.show', compact('extracurricular'));
    }

    public function edit(Extracurricular $extracurricular)
    {
        $students = Student::all();
        return view('extracurriculars.edit', compact('extracurricular', 'students'));
    }

    public function update(Request $request, Extracurricular $extracurricular)
    {
        $request->validate([
            'student_id' => 'required|exists:students,id',
            'name' => 'required',
            'year_started' => 'required|integer|min:2000|max:' . date('Y'),
        ]);

        $extracurricular->update($request->all());

        return redirect()->route('extracurriculars.index')->with('success', 'Ekstrakurikuler berhasil diperbarui.');
    }

    public function destroy(Extracurricular $extracurricular)
    {
        $extracurricular->delete();
        return redirect()->route('extracurriculars.index')->with('success', 'Ekstrakurikuler berhasil dihapus.');
    }
}
