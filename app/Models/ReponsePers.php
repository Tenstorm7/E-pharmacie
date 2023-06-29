<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ReponsePers extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $fillable = [
        'reponsepers'
    ];

    public function messagepers(): BelongsTo
    {
        return $this->belongsTo(MessagePers::class);

    }

}
