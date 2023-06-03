<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Fournisseur extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $fillable = ['nom_four', 'email_four', 'urlsit_four', 'tel_four'];

    public function commande_four(): HasMany {
        return $this->hasMany(Commande_Four::class);
    }
}
