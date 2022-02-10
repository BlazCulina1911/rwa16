<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReservationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    //TODO napravit funkcije, te povezat ih s odvojenim routes/ datotekom "reservations.php"

    public function index()
    {
        return view('reservations.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('reservations.reservation');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
           'reserved_at' => ['required', 'unique:reservations']
        ]);
        $qr = substr(md5(mt_rand()), 0, 8);
            Reservation::create([
                'user_id' => Auth::user()->id,
                'qr' => $qr,
                'reserved_at' => Carbon::parse($request->date . " " . $request->time)
            ]);

        return redirect()->to('/reservations/'. $qr);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($qr)
    {
        $reservation = Reservation::whereQr($qr)->first() ?? abort(404, "Ovaj COVID test ne postoji!");
        $user = User::findOrFail($reservation->user_id); //TODO popravi relaciju! :(
        return view('reservations.show')->with(compact('reservation', 'user'));
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
