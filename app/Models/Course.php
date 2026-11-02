<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Course extends Model
{
    protected $fillable = [
        'code',
        'title',
        'description',
        'credit_units',
        'lecturer_id',
    ];

    // the lecturer (a user with role lecturer) who teaches this course
    public function lecturer(): BelongsTo
    {
        return $this->belongsTo(User::class, 'lecturer_id');
    }

    public function registrations(): HasMany
    {
        return $this->hasMany(CourseRegistration::class);
    }

    // the students registered for this course (many to many)
    public function students(): BelongsToMany
    {
        return $this->belongsToMany(Student::class, 'course_registrations')
            ->withPivot('academic_year', 'status')
            ->withTimestamps();
    }
}
