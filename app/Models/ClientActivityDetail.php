<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientActivityDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'client_id',
        'type',
        'level',
        'category',
        'sub_category',
        'marks',
    ];
}
