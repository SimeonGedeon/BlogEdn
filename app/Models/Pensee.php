<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pensee extends Model
{
    protected $fillable = [
        'user_id',
        'titre',
        'verset',
        'contenu',
        'exhortation',
        'hashtags',
        'image',
        'est_publie',
        'create_at'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    protected $casts = [
        'created_at' => 'datetime',
    ];
}
