<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Creator extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'creator_id',
        'review',
    ];

     /**
     * Get the reviews the user has made.
     */
    public function reviews()
    {
        return $this->hasMany(Review::class);

        //return $this->hasMany('App\Review');
        //return Creator::where()
    }

}
