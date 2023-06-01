<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Drug extends Model
{
    use HasFactory;
    protected  $fillable =[
        'pharmacy_id',
        'photo',
        'libele',
        'prix',
        'description',
    ];
}
