<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model 
{
    protected $fillable = [
        'name',
        'chapters',
        'challenges',
        'total_average',
        'category_id',
        'picture',
    ];
    use HasFactory;

    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }

    public function users()
    {
        return $this->belongsToMany('App\Models\User', 'user_courses', 'course_id', 'user_id');
    }
}
