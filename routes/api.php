<?php

//
Route::apiResource('user', 'api\UserController');

Route::apiResource('registro', 'api\RegistroController');

Route::apiResource('pgagua', 'api\PgAguaController');


//padrao
Route::apiResource('login', 'api\padrao\LoginController');

Route::apiResource('getsaldopadrao', 'api\padrao\SaldoGetController');


//admim//

Route::apiResource('setconfiguracaoadmin', 'api\admin\ConfiguracaoSetController');

Route::apiResource('loginadmin', 'api\admin\LoginController');

Route::apiResource('pgaguaadmin', 'api\admin\PgAguaController');

Route::apiResource('getpgaguaadmin', 'api\admin\PgAguaGetController');

Route::apiResource('setpgaguaadmin', 'api\admin\PgAguaSetController');

Route::apiResource('gettaxaadmin', 'api\admin\TaxaGetController');

Route::apiResource('settaxaadmin', 'api\admin\TaxaSetController');

Route::apiResource('getsaldoadmin', 'api\admin\SaldoGetController');

Route::apiResource('setsaldoadmin', 'api\admin\SaldoSetController');

Route::apiResource('gettransacaoadmin', 'api\admin\TransacaoGetController');

Route::apiResource('settransacaoadmin', 'api\admin\TransacaoSetController');

Route::apiResource('setuseradmin', 'api\admin\UserSetController');

