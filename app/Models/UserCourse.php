<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserCourse extends Model
{
    protected $fillable = [
        'chapter',
        'challenge',
        'course_id',
        'user_id',
    ];
    use HasFactory;
    
    public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id');
    }
}
