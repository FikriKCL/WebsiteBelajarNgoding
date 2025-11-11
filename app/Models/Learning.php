<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Learning extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_user',
        'id_lesson',
        'time_learn_start',
        'time_learn_end',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    public function lesson()
    {
        return $this->belongsTo(Lesson::class, 'id_lesson');
    }
}
