<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


// 라우터 정의 - 문자열 리턴
// Route::get('/hi', function() {
//     return 'hi~';
// });

// Route::get('/myview', function() {
//     return view('myview');
// });

Route::get('/home', function() {
    return view('home');
});
Route::get('/method', function() {
    return 'GET method!!';
});
Route::post('/method', function() {
    return 'POST method!!';
});

Route::put('/method', function() {
    return 'PUT Method';
});

Route::delete('/method', function () {
    return 'DELETE Method';
});

Route::any('/method', function() {
    return 'ANY Method';
});

Route::match(['get','post'],'/method', function() {
    return 'MATCH Method';
});

Route::get('/query', function(Request $request) {
    return $request->id." ".$request->name;
});

Route::get('/segment/{i}',function($i) {
    return 'segment ID : '.$i;
});

Route::get('/segment2/{id?}', function($id = 'base') {
    return 'segment2 id : '.$id;
});

Route::get('/names/home',function() {
    return view('nameshome');
});

Route::get('/names' , function() {
    return 'name.index !!!';
})->name('names.index');


//항상 최하단에 적을것!
Route::fallback(function() {
    return '돌아가';
});

// 라우터 그룹
// ----------
// 공통 경로
Route::prefix('users')->group(function() {

Route::get('/login' , function() { 
    return 'Login!';
})->name('users.login');

Route::get('/logout' , function() { 
    return 'Login!';
});

Route::get('/resi' , function() { 
    return 'resi!';
});
});

// 서명라우터

use Illuminate\Support\Facades\URL;

Route::get('/makesign' , function(){
    // 일반링크
    // $baseurl = route('invitations',['invitation'=>5816, 'group'=>678]);
    $baseUrl = route('sign');

    // 서명된 url링크
    // $signUrl = URL::signedRoute('invitations' , ['invitation'=>5816, 'group'=>678]);
    $signUrl = URL::signedRoute('sign');

    // 유효기간 서명된 링크
    $limitSignUrl = URL::temporarySignedRoute('sign', now()->addSecond(100));

    return $baseUrl."<br>".$signUrl."<br>".$limitSignUrl;
    
});

// Route::get('/invitations/{invitation}/{group}', function() {
//     return "Sign!!";
// })->name('invitations')->middleware('signed');

Route::get('/sign', function() {
    return "Sign!!";
})->name('sign')->middleware('signed');

use App\Http\Controllers\TestController;
Route::get('/test', [TestController::class, 'index'])->name('tests.index');

use App\Http\Controllers\TasksController;
Route::resource('/tasks',TasksController::class);

use App\Http\Controllers\BladeController;
Route::get('/blade', [BladeController::class, 'index'])->name('blade.index');

use App\Http\Controllers\ListController;
Route::get('/list', [ListController::class, 'index'])->name('list.index');