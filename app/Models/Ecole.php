<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ecole extends Model
{
    use HasFactory;

    protected $fillable = [
        "nom",
        "adresse"
    ];

    public function eleves()
    {
        return this->hasMany(eleve::class);
    }
}
