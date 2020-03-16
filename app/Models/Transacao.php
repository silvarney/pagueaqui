<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transacao extends Model
{
    protected $table = 'transacoes';

    protected $fillable = [
        'transacao_valor', 'transacao_tipo', 'transacao_operacao', 'transacao_data', 'transacao_hora', 'transacao_status', 'transacao_users_id',
    ];
}
