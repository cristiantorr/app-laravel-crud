<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ParticipantRequest;
use App\City;
use App\Participant;

class ParticipantController extends Controller
{

	/* Funciones formulario de registro*/

     public function updateCitiesView(){
    	$updateCities = City::pluck('name', 'id');
    	return view('register', compact('updateCities'));
    }

    public function registerForm(ParticipantRequest $request){
    	//$registerForm = Participant::create($request->all());
      $registerForm          = new Participant;

      $registerForm->name    = $request->name;
      $registerForm->age     = $request->age;
      $registerForm->email   = $request->email;
      $registerForm->city_id = $request->city;
      $registerForm->phone   = $request->phone;
      $registerForm->save();

      return redirect('usuarios/registro')->with('message', 'Se registro el participante '.$registerForm->name);
    }

    /* Funciones vista participantes*/

    public function participantView(){

      $participants = Participant::with('city')->paginate(10);
      return view('participant', compact('participants'));

    }

    public function participantUpdateView($id){
        //findOrFail lanza una excepción si no encuentra un resultado
      $updateCitiesData = City::pluck('name', 'id');
      $participantData = Participant::with('city')->findOrFail($id);

      return view('participantUpdate', compact('participantData', 'updateCitiesData'));

    }
     public function participantUpdate(Request $request){
      $participantUpdate          = Participant::find($request->id);
      $participantUpdate->name    = $request->name;
      $participantUpdate->age     = $request->age;
      $participantUpdate->email   = $request->email;
      $participantUpdate->city_id = $request->city;
      $participantUpdate->phone   = $request->phone;
      $participantUpdate->save();
      //return view('participant', compact('participantUpdate'));
      return redirect('usuarios/participanteActualizar/'.  $participantUpdate->id)->with('messageUpdate', 'Se actualizo ');
    }

    public function participantDelete($id){
      $participantDelete = Participant::findOrFail($id)->delete();
      return redirect('usuarios/participante')->with('messageDelete', 'Se elimino el participante');
    }
   
}
