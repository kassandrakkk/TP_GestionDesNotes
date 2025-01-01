<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    use HasFactory;

    // Si tu as d'autres colonnes dans la table, tu peux les définir ici
    protected $fillable = ['nom', 'email'];
}
