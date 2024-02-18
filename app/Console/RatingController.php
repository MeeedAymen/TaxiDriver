<?php

namespace App\Http\Controllers;

use App\Models\rating;
use Illuminate\Http\Request;

class RatingController extends Controller
{
    public function store(Request $request){
        $formFields = $request->validate([
            'rate' => 'required',
            'comment' => 'required'
        ]);
        rating::create($formFields);
        return redirect('/admin');
    }

    public function update(rating $rating,Request $request){
        $formFields = $request->validate([
            'rate' => 'required',
            'comment' => 'required'
        ]);
        $rating->update($formFields);
        return redirect('/admin');
    }
    public function delete(rating $rating){
        $rating->delete();
        return back()->with('message','rating Was deleted');
    } 

    public function show(){
        return view('',['ratings'=>rating::all()]);
    }
}
