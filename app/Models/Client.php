<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Client extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $fillable = [
        'nom_clt',
        'prenom_clt',
        'tel_clt',
        'email_clt',
        'dateN_clt',
        'url_clt',
        'adress_clt',
        'mot_de_pass_clt'
    ];

    public function commande(): HasMany {
        return $this->hasMany(Commande::class);
    }

    public function messageForum(): HasMany {
        return $this->hasMany(MessageForum::class);
    }

    public function messagePers(): HasMany {
        return $this->hasMany(MessagePers::class);
    }

    public function commentaires(): HasMany {
        return $this->hasMany(Commentaire::class);
    }


}
