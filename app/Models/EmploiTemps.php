<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmploiTemps extends Model
{
    use HasFactory;
    protected $fillable = [
        "filiere",
        "dateDebut",
        "dateFin",
        "path",
        "status",
    ];
}