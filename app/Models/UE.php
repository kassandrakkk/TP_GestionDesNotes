<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UE extends Model
{
    protected $table = 'unites_enseignements';
    public $timestamps = true;
    protected $fillable = [
        'code',
        'nom',
        'credits_ects',
        'semestre',
        
    ];

}
