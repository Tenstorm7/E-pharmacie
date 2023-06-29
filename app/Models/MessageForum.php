<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MessageForum extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $fillable = ['conten_smsf'];

    public function user(): BelongsTo{
        return $this->belongsTo(User::class);
    }

   

    public function reponseForum(): HasMany {
        return $this->hasMany(ReponseForum::class);
    }


}
