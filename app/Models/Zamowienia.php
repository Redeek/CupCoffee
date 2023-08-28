<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Zamowienia extends Model
{
   use HasFactory;
    protected $table = 'zamowienias';
    
    protected $fillable = [
        'imie',
        'nazwisko',
        'email',
        'nrtel',
        'ulica',
        'kodpczt',
        'miasto',
        'uwagi',
        'kawa',
        'ciastko',
        'sniadanie',
        'dodatki',
        'platnosc',
    ];
    
}
