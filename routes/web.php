<?php

use App\Http\Controllers\ReservationsController;
use App\Models\User;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Route;

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

Route::get('', function() {
    $users = User::findOrFail(1)->get();

    foreach($users as $user) {
        echo $user->name . "<br>";
    }

});

//Route::get('/', function () {
//    $posts = User::where('id', '>', 0)
//        ->orderBy('id', 'asc')->take(2)->get();
//    return dd($posts);
//});
//Route::get('/', function() {
//
//    $users = User::all();
//
//    foreach($users as $user)
//    {
//        echo $user->name . PHP_EOL;
//    }
//    return view('welcome');
//});
//Route::get('/', function () {
//    return view('welcome');
//});
//
//Route::get('/read', function () {
//
//    $results = DB::select("select * from users");
//
//    foreach($results as $user) {echo $user->name . PHP_EOL;}
//
//});
//
//Route::get('/update', function () {
//    $affected = DB::update('update users set name = "Žuvi" where id = ?', [1]);
//
//    if($affected) return "SUCCESS!";
//
//    return "NOT AFFECTED!";
//});
//
//Route::get('/delete', function () {
//    $deleted = DB::delete('delete from users where id = ?', [5]);
//
//    if($deleted) return "SUCCESS!";
//
//    return "NOT DELETED!";
//});
//
////Route::resource('/reservations', ReservationsController::class);
//
//Route::get('/rođoBlaž',
//    function () {
//
////          Ovo funkcionira! :D
////        DB::insert("insert into reservations(data, result, expired) values(?, ?, ?)",
////            ['Hello from routes! :D', '1', '0']);
//
//        //Genijalno! Više nikad ne pravi račun manualno rođo!
//        try {
//            DB::insert("insert into users(name, email, phone, password) values(?,?,?,?)",
//                ['Blaž Čulina', 'blaz.culina1911@gmail.com', '+385976767404', bcrypt('testtest')]);
//            return dd("A wild pokemon (Blaž) appears in the database! :D" . PHP_EOL . PHP_EOL . PHP_EOL . "Fora mi je baš dobra, Martina pusti me na miru. :(");
//
//        } catch (QueryException $exception)
//        {
//            dd("Meščini rođo da si već upisan, al provjeri ti to! :D"  . PHP_EOL . PHP_EOL . PHP_EOL . "Martina fora mi je i dalje dobra! :(((");
//        }
//    });
//
//Route::get('/dashboard', function () {
//    return view('dashboard');
//})->middleware(['auth'])->name('dashboard');
//
require __DIR__.'/auth.php';
