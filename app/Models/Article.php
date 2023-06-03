<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Article extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $fillable = ['qte'];

    public function commande(): BelongsTo {
        return $this->belongsTo(Commande::class);
    }

    public function produits(): HasMany {
        return $this->hasMany(Produit::class);
    }
}
