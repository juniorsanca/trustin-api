<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'creator_id',
        'review',
        'rating'
    ];
       /**
     * Get the creator that owns the review.
     */
    public function creator()
    {
        return $this->belongsTo(Creator::class);

    }

    /**
     * Get the user that made the review.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
