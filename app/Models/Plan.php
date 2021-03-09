<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    protected $fillable = [
        'username',
        'user_id',
        'slug',
        'stripe_plan',
        'amount',
        'description'
    ];

    use HasFactory;

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function users()
    {
        return $this->belongsTo('App\Models\User');
    }
}
