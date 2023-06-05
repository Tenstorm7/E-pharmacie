<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Statut extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $fillable = ['titre_statut'];


    public function personnel(): BelongsTo {
        return $this->belongsTo(Personnel::class);
    }
}
