<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    use HasFactory;

    // Si tu as d'autres colonnes dans la table, tu peux les définir ici
    protected $fillable = ['etudiant_id', 'note', 'session'];

    // Définir la relation avec le modèle Etudiant
    public function etudiant()
    {
        return $this->belongsTo(Etudiant::class);
    }
}
