<?php

namespace App\Http\Controllers\api\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\PgAgua;

class PgAguaGetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $conta = DB::table('pg_agua')
        ->join('users', function ($join) {
            $join->on('pg_agua.pg_agua_users_id', '=', 'users.id');
        })
        ->select('pg_agua.pg_agua_data', 'pg_agua_valor_total', 'users.nome', 'users.id')
        ->where('pg_agua_status', '=', 'pago')
        ->whereMonth ('pg_agua.created_at', '=', (string)date('m'))
        ->get();

        return response()->json($conta);
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
        $conta = DB::table('pg_agua')
        ->join('users', function ($join) {
            $join->on('pg_agua.pg_agua_users_id', '=', 'users.id');
        })
        ->select('pg_agua.pg_agua_data', 'pg_agua_valor_total', 'users.nome', 'users.id')
        ->where('pg_agua_status', '=', 'pago')
        ->where('pg_agua_users_id', '=', $id)
        ->whereMonth ('pg_agua.created_at', '=', (string)date('m'))
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
}
