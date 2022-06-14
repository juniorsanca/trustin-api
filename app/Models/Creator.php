<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Creator extends Model
{
    use HasFactory;

       /**
     * Get the reviews of the product.
     */
    public function reviews()
    {
        return $this->hasMany('App\Review');
    }
}
