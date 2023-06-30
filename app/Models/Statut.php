<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Statut extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $fillable = ['titre_statut'];


    public function user(): HasOne{
        return $this->hasOne(User::class);
    }
}
