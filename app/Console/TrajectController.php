<?php

namespace App\Http\Controllers;

use App\Models\traject;
use Illuminate\Http\Request;

class TrajectController extends Controller
{
    public function store(Request $request){
        $formFields = $request->validate([
            'departure' => 'required',
            'destination' => 'required',
            'save' => 'required'
        ]);
        traject::create($formFields);
        return redirect('/admin');
    }

    public function update(traject $traject,Request $request){
        $formFields = $request->validate([
            'departure' => 'required',
            'destination' => 'required',
            'save' => 'required'
        ]);
        $traject->update($formFields);
        return redirect('/admin');
    }
    public function saveTheTrajact(traject $traject){
        $traject::where('id', $traject->id)->update(['save' => true]);
        return back();
    }
    public function delete(traject $traject){
        $traject->delete();
        return back()->with('message','traject Was deleted');
    } 

    public function show(){
        return view('',['traject'=>traject::all()]);
    }
}
