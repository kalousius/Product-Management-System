<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;
     public $timestamps = false; // Disabling automatic timestamp management
    protected $fillable = [
        'name',
        'description',
        'price',
        'qty',
        'category'
        
        
    ];
}