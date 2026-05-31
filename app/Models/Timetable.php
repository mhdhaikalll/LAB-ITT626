<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Subject;
use App\Models\Hall;
use App\Models\Day;

class Timetable extends Model
{
    use HasFactory;

    protected $table = 'student_timetables';

    protected $fillable = [
        'user_id',
        'subject_id',
        'day_id',
        'hall_id',
        'lecture_group_id',
        'time_from',
        'time_to',
    ];

    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }

    public function day()
    {
        return $this->belongsTo(Day::class);
    }

    public function hall()
    {
        return $this->belongsTo(Hall::class);
    }
}
