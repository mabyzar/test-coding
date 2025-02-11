<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    /** @use HasFactory<\Database\Factories\StudentFactory> */
    use HasFactory;
    protected $fillable = ['first_name', 'last_name', 'phone_number', 'student_number', 'address', 'gender', 'photo'];

    public function extracurriculars()
    {
        return $this->hasMany(Extracurricular::class);
    }
}
