<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MessagePers extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $fillable = ['conten_smsp'];

    public function client(): BelongsTo{
        return $this->belongsTo(Client::class);
    }

    public function personnel(): BelongsTo{
        return $this->belongsTo(Personnel::class);
    }

}
