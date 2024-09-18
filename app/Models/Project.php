<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

protected $fillable = [
    'project_photo',
    'category_id',
    'project_title',
    'sub_title',
];
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
}
