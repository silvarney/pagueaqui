<?php

namespace App\Http\Controllers\api\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Saldo;

class SaldoGetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $saldo = DB::table('saldos')
            ->join('users', function ($join) {
                $join->on('saldos.saldo_users_id', '=', 'users.id');
            })
            ->select('users.id', 'users.nome', 'saldos.saldo_valor')
            ->orderBy('users.nome', 'desc')
            ->get();

        

        return response()->json($saldo);
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
            
        $saldo = DB::table('saldos')
            ->join('users', function ($join) {
                $join->on('saldos.saldo_users_id', '=', 'users.id');
            })
            ->where('saldos.saldo_users_id', '=', $id)
            ->select('users.id', 'users.nome', 'saldos.saldo_valor')
            ->orderBy('users.nome', 'desc')
            ->first();

        

        return response()->json($saldo);
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
