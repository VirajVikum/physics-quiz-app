<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuestionCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'category',
        'sub_categories',
        'delete_status'
    ];

    public function questions()
    {
        return $this->hasMany(Question::class);
    }
}
