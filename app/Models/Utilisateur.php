<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Utilisateur extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'prenom', 'nom', 'email',
    ];

    //relation : un utilisateur peut avoir plusieurs commandes
    //cette fonction permet de récupérer automatiquement les commandes d'un objet client
    public function tache()
    {
        return $this->hasMany(Tache::class);

    }

}
