<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coordonnee extends Model
{
    use HasFactory;
    protected $fillable=[
        'contact',
        'fonction',
        'tel',
        'coordonne_mail',
        'commentaire',
    ];
}
