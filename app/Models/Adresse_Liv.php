<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Adresse_Liv extends Model
{
    use HasFactory;
     protected $guarded = [];
     protected $fillable = [
        'ville_adres',
        'qtier_adres',
        'rue_adres'
    ];

     public function commande(): BelongsTo {
        return $this->belongsTo(Commande::class);
     }


}
