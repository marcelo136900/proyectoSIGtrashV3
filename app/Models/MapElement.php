<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MapElement extends Model
{
    use HasFactory;

    protected $fillable = ['tipo', 'datos'];
}
