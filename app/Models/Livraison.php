<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Livraison extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $fillable = ['status_liv', 'fraie_liv'];

    public function commande(): BelongsTo{
        return $this->belongsTo(Commande::class);
    }

    public function personnel(): BelongsTo{
        return $this->belongsTo(Personnel::class);
    }
}
