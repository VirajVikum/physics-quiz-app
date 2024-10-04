<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuestionLevel extends Model
{
    use HasFactory;

    protected $fillable = [
        'level'
    ];

    public function questions()
    {
        return $this->hasMany(Question::class);
    }
}
