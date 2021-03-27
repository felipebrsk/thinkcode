<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    protected $fillable = [
        'apresentation_section',
        'apresentation_video',
        'apresentation_image',
        'section_1',
        'section_2',
        'section_3',
        'section_4',
        'section_5',
        'section_6',
        'section_7',
        'section_8',
        'section_9',
        'section_10',
        'video_1',
        'video_2',
        'video_3',
        'video_4',
        'video_5',
        'video_6',
        'video_7',
        'video_8',
        'image_1',
        'image_2',
        'image_3',
        'image_4',
        'image_5',
        'image_6',
        'image_7',
        'image_8',
        'course_id',

    ];
    use HasFactory;

    public function course()
    {
        return $this->belongsTo('App\Models\Course');
    }
}
