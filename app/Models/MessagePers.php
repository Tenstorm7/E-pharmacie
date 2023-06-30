<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MessagePers extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $fillable = ['conten_smsp'];

    public function user(): BelongsTo{
        return $this->belongsTo(User::class);
    }

    public function reponsePers(): HasMany {
        return $this->hasMany(ReponsePers::class);
    }

}
