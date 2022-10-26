<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ConnectionController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\NoticeController;

/*  랜딩페이지
Route::get('/', [BoardController::class, 'index']) -> name('boards.index');
Route::get('view', [BoardController::class, 'view']) -> name('boards.view');
Route::post('boards', [BoardController::class, 'store']) -> name('boards.store');

Route::get('view/{board}', [BoardController::class, 'show']) -> name('boards.show');
Route::delete('boards/{board}', [BoardController::class, 'delete']) -> name('boards.delete');
 */


 Route::get('/',[ConnectionController::class,'index']) ->name('Connection.index');
 /* 회원가입 */
/*  Route::get('/Account',[ConnectionController::class,'Account']) ->name('Connection.Account');
 Route::post('Account',[ConnectionController::class,'save']) -> name('Connection.save'); */

/* 문의사항 */
 Route::get('/Contact',[ContactController::class,'Contact']) ->name('Connection.Contact');
 Route::get('/Contact_create',[ContactController::class,'Contact_create']) ->name('Connection.Contact_create');
 Route::post('Contact_save',[ContactController::class,'save']) -> name('Connection.Contact_save');
 Route::get('/Contact/{contact}',[ContactController::class,'Contact_view']) ->name('Connection.Contact_view');
 Route::delete('Contact/{id}',[ContactController::class,'delete']) ->name('Connection.delete');

 Route::get('/Contact_search', [ContactController::class, 'search'])->name('Connection.search');


 /* 공지사항 */
 Route::get('/Notice',[NoticeController::class,'Notice']) ->name('Connection.Notice');
 Route::get('/Notice/view/{notice}',[NoticeController::class,'Notice_view']) ->name('Connection.Notice_view');
 
 /* 3사 페이지 */
 Route::get('/Content_KT',[ConnectionController::class,'Content_KT']) ->name('Connection.Content_KT');
 Route::get('/Content_SK',[ConnectionController::class,'Content_SK']) ->name('Connection.Content_SK');
 Route::get('/Content_LG',[ConnectionController::class,'Content_LG']) ->name('Connection.Content_LG');

