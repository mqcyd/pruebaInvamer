<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request; 
use App\Models\administrativos;

class LoginController extends Controller{
    public function login(Request $request){
        $usuario = $request->get('usuario');
        $clave = $request->get('clave');
        $user = administrativos::where('Usuario',$usuario)->where('Contraseña',$clave)->first();
        if ($user==null){
            return 'El usuario o clave invalidos';
        }
        return $user;
        
    }
}