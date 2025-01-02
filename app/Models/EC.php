<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EC extends Model
{
    protected $table = 'elements_constitutifs';
    protected $fillable = [
        'code',
        'nom',
        'coefficient',
        'ue_id',
    ];
    public $timestamps = true;

    public function ue()
    {
        return $this->belongsTo(UE::class, 'ue_id');
    }


}
