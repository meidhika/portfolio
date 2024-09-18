<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;
    protected $fillable =
    [
        'full_name',
        'birthday',
        'email',
        'phone_number',
        'website',
        'age',
        'degree',
        'job',
        'photo',
        'address',
        'description',
        'description2',
        'fb_link',
        'ig_link',
        'linkedin_link',
    ];
    protected $date ='deleted_at';
}
