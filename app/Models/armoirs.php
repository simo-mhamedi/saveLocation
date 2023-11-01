<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class armoirs extends Model
{
    use HasFactory;
    protected $fillable = [
        'latitude',
        'secteur',
        'longitude'
        ,'user_id',
        'conformite'
        ,'observation',
        'arrondissement'
        ,'type','source',
        "isGenerated",
        'image'
    ];
}
