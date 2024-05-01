<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('items')->group(function () {
    Route::get('/all', [App\Http\Controllers\ItemController::class, 'all']);/*商品一覧画面*/
    Route::get('/add', [App\Http\Controllers\ItemController::class, 'add']);/*商品登録*/
    Route::post('/add', [App\Http\Controllers\ItemController::class, 'add']);/*商品登録*/
    Route::post('/destroy/{id}', [App\Http\Controllers\ItemController::class, 'destroy']);/**商品削除 */
    Route::get('/edit/{id}', [App\Http\Controllers\ItemController::class, 'edit']);/**編集画面*/
    Route::post('/edit/{id}', [App\Http\Controllers\ItemController::class, 'edit']);/**編集画面*/
    Route::post('/edit/{id}', [App\Http\Controllers\ItemController::class, 'edit']);/**エラー表示*/
    Route::get('/lip', [App\Http\Controllers\ItemController::class, 'lip']);/**リップ一覧画面 */
    Route::get('/eye', [App\Http\Controllers\ItemController::class, 'eye']);/**アイメイク一覧画面*/
    Route::get('/base', [App\Http\Controllers\ItemController::class, 'base']);/**ベース一覧画面*/
    Route::get('/skin', [App\Http\Controllers\ItemController::class, 'skin']);/**スキンケア一覧画面*/
    Route::get('/tool', [App\Http\Controllers\ItemController::class, 'tool']);/**ツール一覧画面*/

});
