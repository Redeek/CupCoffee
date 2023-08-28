<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dowoz extends Model
{
    use HasFactory;
    protected $table = 'dowozs';
    
    protected $fillable = [
        'miasto',
        'ulica'
    ];
}
