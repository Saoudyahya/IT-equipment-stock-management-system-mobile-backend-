<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class affectation extends Model
{
    use HasFactory;
    protected $table = 'affectation';

    protected $fillable = [
        'id_affectation',
        'localisation',
        'date',
        'batiment',
        'departement',
        'etage',
        'user',
        'materiel',
    ];
    public $timestamps = false;
}
