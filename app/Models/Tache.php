<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tache extends Model
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

    //relation : un client peut avoir plusieurs commandes
    //cette fonction permet de récupérer automatiquement les commandes d'un objet client
    public function utilisateur()
    {
        return $this->BelongsTo(Utilisateur::class);

    }
    public function fichier()
    {
        return $this->hasMany(Fichier::class);

    }
    public function etape()
    {
        return $this->hasMany(Etape::class);

    }
}
