<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Paiement extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $fillable = ['info_paye'];

    public function commande(): BelongsTo{
        return $this->belongsTo(Client::class);
    }

    public function operateur(): BelongsTo{
        return $this->belongsTo(Personnel::class);
    }

}
