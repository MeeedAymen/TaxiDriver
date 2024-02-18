<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function store(Request $request){
        $formFields = $request->validate([
            'date' => 'required',
            'status' => 'required'
        ]);
        Reservation::create($formFields);
        return redirect('/admin');
    }

    public function update(Reservation $Reservation,Request $request){
        $formFields = $request->validate([
            'date' => 'required',
            'status' => 'required'
        ]);
        $Reservation->update($formFields);
        return redirect('/admin');
    }
    public function delete(Reservation $Reservation){
        $Reservation->delete();
        return back()->with('message','Reservation Was deleted');
    } 

    public function show(){
        return view('',['Reservation'=>Reservation::all()]);
    }
}
