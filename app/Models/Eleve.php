<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Eleve extends Model
{
    use HasFactory;

    protected $fillable = [
        "nom",
        "prenom",
        "matricule",
        "ecole_id"
    ];

    public function ecole()
    {
        return this->belongsTo(ecole::class);
    }
}
