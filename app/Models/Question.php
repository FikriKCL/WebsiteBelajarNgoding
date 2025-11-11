<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Learning extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_question',
        'id_answer',
        'description',
        'type',
    ];

    public function answer()
    {
        return $this->belongsTo(Answer::class, 'id_answer');
    }

}
