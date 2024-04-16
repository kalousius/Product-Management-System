<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        // Add other fillable attributes as needed
    ];

    // Define any relationships here
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}