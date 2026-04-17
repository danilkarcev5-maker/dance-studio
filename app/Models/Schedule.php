<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    protected $fillable = [
        'dance_type',
        'day',
        'time',
        'teacher',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'time' => 'datetime:H:i', // Формат времени
    ];

    // Связь с записями на занятия
    public function enrollments()
    {
        return $this->hasMany(Enrollment::class);
    }
}