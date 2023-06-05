<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Facture extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $fillable = ['num_fact'];

    public function commande(): BelongsTo {
        return $this->belongsTo(Commentaire::class);
    }

}
