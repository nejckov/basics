<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Uporabnik extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'uporabnik',
        'ime',
        'priimek',
        'naslov',
        'starost'
    ];
}
