<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EcopontoModel extends Model
{
    use HasFactory;

    protected $table = 'ecopontos';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nome',
        'rua',
        'bairro',
        'cidade',
        'estado',
        'cep',
        'funcionamento',
        'telefone',
        'longitude',
        'latitude',

    ];
}
