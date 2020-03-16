<?php

namespace App\Http\Controllers\api\padrao;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Saldo;
use App\Models\Registro;
use App\Models\Configuracao;

class SaldoGetController extends Controller
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
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      
        $saldo = Saldo::where('saldos.saldo_users_id', '=', $id)->select('saldo_valor')->first();

        $registro = Registro::where('registro_users_id', '=', $id)
            ->where('registro_taxa_status', '=', 'pendente')
            ->sum('registro_taxa');

        $configuracao = Configuracao::where('configuracao_acao', '=', 'pagamento_agua')
        ->where('configuracao_acao', '=', 'pagamento_agua')
        ->select('configuracao_status')->first();

        $resposta = array(
            'saldo' => $saldo->saldo_valor,
            'registro' => $registro,
            'pagamento' => $configuracao->configuracao_status
        );

        return response()->json($resposta);
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
}
