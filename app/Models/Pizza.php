<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pizza extends Model
{
    use HasFactory;
    protected $fillable = ['flavour', 'ingredients', 'price', 'is_available', 'is_vegan'];
}
