<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Famille extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $fillable = ['nom_fam','descri_fam'];

    public function categories (): HasMany
    {
        return $this->hasMany(Categorie::class);

    }

}
