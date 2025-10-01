<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Plano;



class PlanosController extends Controller
{
     public function getPlanos (){
        $data = Plano::all();
        return view("admin.planos")
        ->with('planos',$data);
}
 public function createPlanos(Request $request){
        //dd($request->email);
        //Reglas de validadcion Users
        $request->validate([   
            "nombre_plano"=>'required|min:5',
            "descripcion"=>'required|min:10|',
            "version"=>'required|min:8|'
        ]);

        //Guardar
        $user = new Plano();
        $user -> proyecto_id = "3";
        $user -> nombre_plano=$request->nombre_plano;
        $user -> descripcion=$request->descripcion;
        $user -> version=$request->version;
        $user -> save();
        return redirect()
            ->back()
            ->with('success',"Plano insertado correctamente");
    }
}