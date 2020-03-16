<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PgAgua extends Model
{
    protected $table = 'pg_agua';

    protected $fillable = [
        'pg_agua_cbarra', 'pg_agua_vencimento', 'pg_agua_valor', 'pg_agua_valor_total', 'pg_agua_data', 'pg_agua_hora', 'pg_agua_taxa', 'pg_agua_status', 'pg_agua_taxa_status', 'pg_agua_users_id',
    ];
}
