<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Student extends Model
{
    protected $fillable = [
        'user_id',
        'student_number',
        'first_name',
        'last_name',
        'phone',
        'programme',
        'year_of_study',
    ];

    // the login account of this student
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    // one student has many registration records
    public function registrations(): HasMany
    {
        return $this->hasMany(CourseRegistration::class);
    }

    // the courses this student is registered for (many to many)
    public function courses(): BelongsToMany
    {
        return $this->belongsToMany(Course::class, 'course_registrations')
            ->withPivot('academic_year', 'status')
            ->withTimestamps();
    }

    public function getFullNameAttribute(): string
    {
        return $this->first_name . ' ' . $this->last_name;
    }
}
