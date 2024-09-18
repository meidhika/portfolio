<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    use HasFactory;
    protected $fillable =
    [
        'university',
        'register_year',
        'graduate_year',
        'faculty',
        'activity',
    ];
    protected $table = 'educations';
}
