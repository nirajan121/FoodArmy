<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    use HasFactory;
    protected $fillable = [
        'food_item',
        'best_untill',
        'user_name',
        'user_id',
        'address',
        'contact',
        'status',
    ];
}
