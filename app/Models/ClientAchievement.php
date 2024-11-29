<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientAchievement extends Model
{
    use HasFactory;

    protected $fillable = [
        'client_id',
        'level',
        'category',
        'sub_category',
        'marks',
        'grade',
    ];
}
