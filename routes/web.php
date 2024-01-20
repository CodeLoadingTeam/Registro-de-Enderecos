<?php

use App\Http\Controllers\AddressController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Aqui é onde você pode registrar rotas da web para sua aplicação. Esses
| rotas são carregadas pelo RouteServiceProvider e todas elas serão
| ser atribuído ao grupo de middleware "web". Faça algo ótimo!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/inicio', function () {
    return view('home');
});

// Route::get('/endereco', function () {
//     return view('create-address');
// });

// Route::get('/endereco/editar', function () {
//     return view('edit-address');
// });

// Route::get('/endereco/remover', function () {
//     return view('remove-address');
// });

/* =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=- */

