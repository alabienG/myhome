<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Logement extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',
        'description',
        'prix',
        'ville',
        'pays',
        'quartier',
        'statut',
        'proprietaire'
    ];
}
