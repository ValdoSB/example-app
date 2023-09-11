<?php

namespace App\Http\Controllers;

use App\Models\Contacto;
use Illuminate\Http\Request;

class SitioController extends Controller
{
    public function formContacto($tipo = null){
        return view('contacto', compact('tipo'));//->with(['tipo' => $tipo]);
    }

    public function saveContacto(Request $request){
        //dd($request->correoForm);
        //Validaciones
        $request->validate([
            'nombreForm' => ['required', 'min:3', 'max:15'],
            'correoForm' => 'required|email',
        ]);
        
        $contacto = new Contacto();
        $contacto->nombreForm = $request->nombreForm;
        $contacto->correoForm = $request->correoForm;
        $contacto->save();

        return redirect('/contacto');
    }
}
