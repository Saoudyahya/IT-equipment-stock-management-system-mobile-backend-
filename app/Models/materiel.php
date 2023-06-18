<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class materiel extends Model
{
    use HasFactory;

    protected $table = 'materiel';

    protected $fillable = [
        'ser',
        'type',
        'mark',
        'model',
        'code_2m',
    ];
    public $timestamps = false;
}
