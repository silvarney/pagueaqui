<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Registro extends Model
{
    protected $fillable = [
        'registro_tipo', 'registro_nome', 'registro_taxa', 'registro_taxa_status', 'registro_data', 'registro_hora', 'registro_users_id',
    ];
}
