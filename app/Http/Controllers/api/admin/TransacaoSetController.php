<?php

namespace App\Http\Controllers\api\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Transacao;
use App\Models\Saldo;
use App\Models\Registro;

class TransacaoSetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Transacao::create($request->all());

        $id_user = $request->transacao_users_id;
        $operacao = $request->transacao_operacao;
        $tipo = $request->transacao_tipo;
        $valor_transacao = $request->transacao_valor;

        $saldo = Saldo::where('saldo_users_id', '=', $id_user)->first();

        if ($saldo) {

            if ($operacao == 'adicionar') {
                $valor = $saldo->saldo_valor + $valor_transacao;
            } elseif ($operacao == 'Remover') {
                $valor = $saldo->saldo_valor - $valor_transacao;
            }

            $novo_saldo['saldo_valor'] = $valor;

            Saldo::where('saldo_users_id', $id_user)->update($novo_saldo);

            if ($tipo == 'saque taxa') {
                
                $this->receber_taxa($valor_transacao);

                $this->transacao_recolida($id_user);
                
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $conta = DB::table('pg_agua')
            ->join('users', function ($join) {
                $join->on('pg_agua.pg_agua_users_id', '=', 'users.id');
            })
            ->select('pg_agua.pg_agua_data', 'pg_agua_valor_total', 'users.nome', 'users.id')
            ->where('pg_agua_status', '=', 'pago')
            ->where('pg_agua_users_id', '=', $id)
            ->whereMonth('pg_agua.created_at', '=', (string) date('m'))
            ->get();

        return response()->json($conta);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function receber_taxa($valor_transferido)
    {
        $saldo = Saldo::where('saldo_users_id', '=', 0)->first();

        $valor = $saldo->saldo_valor + $valor_transferido;

        $novo_saldo['saldo_valor'] = $valor;

        Saldo::where('saldo_users_id', '=', 0)->update($novo_saldo);
    }

    public function transacao_recolida($id_user)
    {
        $novo_status['registro_taxa_status'] = 'recolido';

        Registro::where('registro_users_id', '=', $id_user)
        ->where('registro_taxa_status', '=', 'pendente')
        ->update($novo_status);
    }
}
