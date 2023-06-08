<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Conseil extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $fillable = ['theme', 'contenue'];


    public function personnel(): BelongsTo {
        return $this->belongsTo(Personnel::class);
    }
}
