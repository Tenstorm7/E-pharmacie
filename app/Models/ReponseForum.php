<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ReponseForum extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $fillable = [
        'reponseforum'
    ];

    public function messageforum(): BelongsTo
    {
        return $this->belongsTo(MessageForum::class);

    }


}
