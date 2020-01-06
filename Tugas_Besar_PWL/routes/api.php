<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// 1 role
Route::get('role', 'Dao\daoRole@getAll');
Route::get('/role/{id}', 'Dao\daoRole@get');
Route::post('role', 'Dao\daoRole@add');
Route::put('/role/{id}', 'Dao\daoRole@update');
Route::delete('/role/{id}', 'Dao\daoRole@delete');

// 2 user
Route::get('user', 'Dao\daoUser@getAll');
Route::get('/user/{id}', 'Dao\daoUser@get');
Route::post('user', 'Dao\daoUser@add');
Route::put('/user/{id}', 'Dao\daoUser@update');
Route::delete('/user/{id}', 'Dao\daoUser@delete');

// 3 transaksi
Route::get('transaksi', 'Dao\daoTransaksi@getAll');
Route::get('/transaksi/{id}', 'Dao\daoTransaksi@get');
Route::post('transaksi', 'Dao\daoTransaksi@add');
Route::put('/transaksi/{id}', 'Dao\daoTransaksi@update');
Route::delete('/transaksi/{id}', 'Dao\daoTransaksi@delete');

// 4 tipe_transaksi
Route::get('tipe_transaksi', 'Dao\daoTipeTransaksi@getAll');
Route::get('/tipe_transaksi/{id}', 'Dao\daoTipeTransaksi@get');
Route::post('tipe_transaksi', 'Dao\daoTipeTransaksi@add');
Route::put('/tipe_transaksi/{id}', 'Dao\daoTipeTransaksi@update');
Route::delete('/tipe_transaksi/{id}', 'Dao\daoTipeTransaksi@delete');

// 5 transaksi_has_history_detail
Route::get('transaksi_has_history_detail', 'Dao\daoTransaksiHasHistoryDetail@getAll');
Route::get('/transaksi_has_history_detail/{id}', 'Dao\daoTransaksiHasHistoryDetail@get');
Route::post('transaksi_has_history_detail', 'Dao\daoTransaksiHasHistoryDetail@add');
Route::put('/transaksi_has_history_detail/{id}', 'Dao\daoTransaksiHasHistoryDetail@update');
Route::delete('/transaksi_has_history_detail/{id}', 'Dao\daoTransaksiHasHistoryDetail@delete');

// 6 history_detail
Route::get('history_detail', 'Dao\daoHistoryDetail@getAll');
Route::get('/history_detail/{id}', 'Dao\daoHistoryDetail@get');
Route::post('history_detail', 'Dao\daoHistoryDetail@add');
Route::put('/history_detail/{id}', 'Dao\daoHistoryDetail@update');
Route::delete('/history_detail/{id}', 'Dao\daoHistoryDetail@delete');

// 7 ticket
Route::get('ticket', 'Dao\daoTicket@getAll');
Route::get('/ticket/{id}', 'Dao\daoTicket@get');
Route::post('ticket', 'Dao\daoTicket@add');
Route::put('/ticket/{id}', 'Dao\daoTicket@update');
Route::delete('/ticket/{id}', 'Dao\daoTicket@delete');

// 8 location
Route::get('location', 'Dao\daoLocation@getAll');
Route::get('/location/{id}', 'Dao\daoLocation@get');
Route::post('location', 'Dao\daoLocation@add');
Route::put('/location/{id}', 'Dao\daoLocation@update');
Route::delete('/location/{id}', 'Dao\daoLocation@delete');

// 9 city
Route::get('city', 'Dao\daoCity@getAll');
Route::get('/city/{id}', 'Dao\daoCity@get');
Route::post('city', 'Dao\daoCity@add');
Route::put('/city/{id}', 'Dao\daoCity@update');
Route::delete('/role/{id}', 'Dao\daoCity@delete');

// 10 jadwal
Route::get('jadwal', 'Dao\daoJadwal@getAll');
Route::get('/jadwal/{id}', 'Dao\daoJadwal@get');
Route::post('jadwal', 'Dao\daoJadwal@add');
Route::put('/jadwal/{id}', 'Dao\daoJadwal@update');
Route::delete('/jadwal/{id}', 'Dao\daoJadwal@delete');

// 11 studio
Route::get('studio', 'Dao\daoStudio@getAll');
Route::get('/studio/{id}', 'Dao\daoStudio@get');
Route::post('studio', 'Dao\daoStudio@add');
Route::put('/studio/{id}', 'Dao\daoStudio@update');
Route::delete('/studio/{id}', 'Dao\daoStudio@delete');

// 12 film
Route::get('film', 'Dao\daoFilm@getAll');
Route::get('/film/{id}', 'Dao\daoFilm@get');
Route::post('film', 'Dao\daoFilm@add');
Route::put('/film/{id}', 'Dao\daoFilm@update');
Route::delete('/film/{id}', 'Dao\daoFilm@delete');

// 13 film_has_genre
Route::get('film_has_genre', 'Dao\daoFilmHasGenre@getAll');
Route::get('/film_has_genre/{id}', 'Dao\daoFilmHasGenre@get');
Route::post('film_has_genre', 'Dao\daoFilmHasGenre@add');
Route::put('/film_has_genre/{id}', 'Dao\daoFilmHasGenre@update');
Route::delete('/film_has_genre/{id}', 'Dao\daoFilmHasGenre@delete');

// 14 genre
Route::get('genre', 'Dao\daoGenre@getAll');
Route::get('/genre/{id}', 'Dao\daoGenre@get');
Route::post('genre', 'Dao\daoGenre@add');
Route::put('/genre/{id}', 'Dao\daoGenre@update');
Route::delete('/genre/{id}', 'Dao\daoGenre@delete');
