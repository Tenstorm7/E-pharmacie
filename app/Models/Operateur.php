<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Operateur extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $fillable = ['rsonS_op'];

    public function paiement(): HasMany{
        return $this->hasMany(Paiement::class);
    }

}
