<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compte extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_compte';
    
    protected $fillable = [
        'nom',
        'prenom',
        'email',
        'mot_de_passe',
        'type_de_compte',
        'status',
        'date_et_heure_de_creation_du_compte',
    ];

    protected $hidden = [
        'mot_de_passe',
    ];

    protected $casts = [
        'date_et_heure_de_creation_du_compte' => 'datetime',
    ];
}

