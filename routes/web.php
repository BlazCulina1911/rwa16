<?php

use App\Http\Controllers\ReservationsController;
use App\Models\Reservation;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Auth;
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

//URL::forceRootUrl('http://studenti.sum.ba/projekti/rwa/2022/gX');

Route::get('', function ()
{
    return view('homepage');
});
Route::get('about', function () {
   return view('about');
});
Route::get('profile', function () {
    return view('profile');
});
Route::get('contact', function () {
    return view('contact');
});

Route::get('reservations', function () {
    if (auth()->check() && auth()->user()->isAdmin == 1)
    {
        return view('reservations.reservation');
    }

    else return \Illuminate\Support\Facades\Redirect::back();
});

Route::get('reservations/create/{date}', function($date) {

    $allowedDates = Reservation::displayDates();

    $flag = 0;
    foreach($allowedDates as $check)
    {
        if ($check->toDateString() == $date)
        {
            $flag = 1;
        }
    }
    if ($flag) {

        $parsed = \Carbon\Carbon::parse($date, 'Europe/Zagreb');

        return view('reservations.pickedDate')->with(compact('parsed'));

    }   else return abort(404, 'nice try :)');
});

Route::get('reservations/create/{date}/{time}', function($date, $time) {

    $allowedDates = Reservation::displayDates();
    $allowedTimes = Reservation::availableAt(\Carbon\Carbon::parse($date, 'Europe/Zagreb'));
    $datesPassed = 0;
    $timesPassed = 0;
    $flag = 0;
    foreach($allowedDates as $check)
    {
        if ($check->toDateString() == $date)
        {
            $datesPassed = 1;
        }
    }

    foreach ($allowedTimes as $check) {
        if ($check->format('H:i') == $time)
        {
            $timesPassed = 1;
        }
    }
    if ($datesPassed == 1 && $timesPassed == 1) $flag =1;
    if ($flag) {

        $parsed = \Carbon\Carbon::parse($date . $time, 'Europe/Zagreb');

        return view('reservations.pickedTime')->with(compact('parsed'));

    }   else return abort(404, 'nice try :)');
});

Route::resource('reservations', ReservationsController::class);
Route::get('reservations/show', function () {
    return view();
});

Route::get('test', function () {


  if (auth()->check() && auth()->user()->isAdmin == 1)
    {
        return view('dashboard');
    }
  else return Redirect::back()->withErrors(['msg' => 'Nemate pristup dashboardu!']);
})->name('dashboard');;

//Zajebnacija :D

Route::get('/rođoBlaž',
    function () {

//          Ovo funkcionira! :D
//        DB::insert("insert into reservations(data, result, expired) values(?, ?, ?)",
//            ['Hello from routes! :D', '1', '0']);

        //Genijalno! Više nikad ne pravi račun manualno rođo!
        try {
            DB::insert("insert into users(name, email, phone, password, isAdmin) values(?,?,?,?, ?)",
                ['Blaž Čulina', 'blaz.culina1911@gmail.com', '+385976767404', bcrypt('testtest'), 1]);
            return dd("A wild pokemon (Blaž) appears in the database! :D" . PHP_EOL . PHP_EOL . PHP_EOL . "Fora mi je baš dobra, Martina pusti me na miru. :(");

        } catch (QueryException $exception)
        {
            dd("Meščini rođo da si već upisan, al provjeri ti to! :D"  . PHP_EOL . PHP_EOL . PHP_EOL . "Martina fora mi je i dalje dobra! :(((");
        }
    });
//Route::get('/dashboard', function () {
//    if(Auth::user->isAdmin) {
//        return view('dashboard');
//    }
//    else return back();
//})->middleware(['auth'])->name('dashboard');

//Route::get('/p/{id}/u', function ($id) {
//   return Reservation::find($id)->user->name;
//});
//Route::get('/u/{id}', function($id) {
//    $user = User::findOrFail($id);
//
//    foreach($user->reservations as $reservation)
//    {
//        echo "ID testa: " . $reservation->id . "<br>";
//        echo "Testiran na datum: " . $reservation->created_at . "<br>";
//
//        if ($reservation->result == 1) echo "Rezultat: POZITIVAN!<br>";
//        else if (!$reservation->result == 0) echo "Rezultat: NEGATIVAN!<br>";
//        else echo "Rezultat na čekanju!<br>";
//
//        echo "<br><hr>";
//    }
//    return "<br>USPJEH!";
//});

//Route::get('', function () {
//   return User::destroy(3);
//});
//
//Route::get('', function ()
//{
//   $user = User::find(2);
//
//   $user->delete();
//});
//
//Route::get('/', function () {
//    return User::where('id', 1)->where('email', 'zuvi91@splitsplitsplitsplit.hr')->update(['name' => 'Jurgento']);
//});
//Route::get('/', function () {
//    $user = User::find(2);
//
//    $user->name = "Blaž";
//    $user->save();
//});
//Route::get('/find', function() {
////    $users = User::findOrFail(1)->get();
////
////    foreach($users as $user) {
////        echo $user->name . "<br>";
////    }
//});
//
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


require __DIR__.'/auth.php';
