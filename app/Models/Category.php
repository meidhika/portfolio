<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable=[
        'category_project',
    ];
    public function project()
    {
        return $this->hasMany(Project::class, 'category_id');
    }
}
