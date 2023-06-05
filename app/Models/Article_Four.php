<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Article_Four extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $fillable = ['qte_artf'];

    public function commande_Four(): BelongsTo {
        return $this->belongsto(Commande_Four::class);
    }

    public function produits(): HasMany {
        return $this->hasMany(Produit::class);
    }
}
