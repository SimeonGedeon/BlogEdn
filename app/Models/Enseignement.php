<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Enseignement extends Model
{
    use HasFactory;

    protected $fillable = [
        'titre',
        'contenu',
        'img',
        'hastag',
        'est_publie',
        'user_id',
        'categorie_id'
    ];

    public function getRouteKeyName()
    {
        return 'titre';
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function categorie()
    {
        return $this->belongsTo(Categorie::class);
    }
}
