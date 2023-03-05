<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Information extends Model
{
    use HasFactory;
    protected $fillable=[
        'nom',
        'entite',
        'categorie',
        'secteur',
    ];
    public function etat(){
        return $this->hasOne(Etat::class);
    }
    public function coordonne(){
        return $this->hasOne(Coordonnee::class);
    }
    public function produit(){
        return $this->hasOne(Produit::class);
    }
    public function suivi(){
        return $this->hasOne(Suivi::class);
    }
}
