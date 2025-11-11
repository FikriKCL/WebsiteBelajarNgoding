<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Learning extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_answer',
        'option_text',
        'is_correct',
        'created_at',
        'deleted_at',
        'updated_at',
    ];

    public function answer()
    {
        return $this->belongsTo(Answer::class, 'id_answer');
    }

}
