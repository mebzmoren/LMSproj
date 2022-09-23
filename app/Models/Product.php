<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name', 'year', 'author', 'place', 'volume', 'time', 'date', 'publisher'
    ];
    use HasFactory;
}
