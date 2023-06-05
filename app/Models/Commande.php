<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Commande extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $fillable = ['status_com'];

    public function article(): HasMany{
        return $this->hasMany(Article::class);
    }

    public function produit(): HasMany{
        return $this->hasMany(Produit::class);
    }

    public function client(): BelongsTo {
        return $this->belongsTo(Client::class);
    }

    public function paiement(): HasOne {
        return $this->hasOne(Paiement::class);
    }


}
