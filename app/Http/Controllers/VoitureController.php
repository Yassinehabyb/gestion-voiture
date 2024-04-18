<?php

namespace App\Http\Controllers;

use App\Models\Voiture;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class VoitureController extends Controller
{
    function edit($id){
        $voiture=Voiture::find($id);
        return view('voiture.edit',['voiture'=>$voiture]);
    }
    function index(){
        $voiture=Voiture::all();
        return view('voiture.index',['voitures'=>$voiture]);
        
    }
    function show($id){
        return $id;
    }
    function update(Request $request,$id){
        try {
            $voiture=Voiture::find($id);
        $voiture->update($request->post());
        return redirect()->route('voitures.index')->with("success",'voiture modifie avec success');;
        } catch (\Exception $e) {
            return redirect()->route('voitures.index')->with("erreur","modification de voiture non effectue");
        }
        
    }
    function create(){
        return view('voiture.create');
    }
    function store(Request $request){
        try {
            Voiture::create($request->post());
            return redirect()->route('voitures.index')->with('success','voiture engestrair avec success');
        } catch (\Exception $e) {
            return redirect()->route('voitures.index')->with("erreur","voiture non engestraire:");
        }
    }
    function destroy($id){
        $voiture=Voiture::find($id);
        $voiture->destroy($id);
        return Redirect()->route('voitures.index');
    }
}
