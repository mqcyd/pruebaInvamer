<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\administrativos;

class administrativosController extends Controller{

    public function login(Request $request){
        $json = $request->input ('json', null);
        $params = json_decode($json);
        $params_array = json_decode($json, true);

        if (!empty($params) && !empty($params_array)){
            $params_array = array_map('trim', $params_array);
            $validate = \Validator::make($params_array,[
                'Usuario' => 'required',
                'Contraseña' => 'required',
                
            ]);
            if ($validate->fails()){
                $data = array(
                    'status' =>'errorDatosRequeridos',
                    'code' => 400,
                    'message' => 'Los datos ingresados no se encontraron'
                );
                
            }
        }
    }
            


    public function crearAdministrativo(Request $request){

        $json = $request->input('json', null);
         $params = json_decode($json);
         $params_array = json_decode($json, true);
 
         if (!empty($params) && !empty($params_array)){
             $params_array = array_map('trim', $params_array);
             $validate = \Validator::make($params_array,[
                 'Nombres' => 'required',
                 'Apellidos' => 'required',
                 'Usuario' => 'required',
                 'Contraseña' => 'required',
                 'Estado' => 'required',
             ]);
             if ($validate->fails()){
                 $data = array(
                     'status' =>'errorDatosRequeridos',
                     'code' => 400,
                     'message' => 'Los datos ingresados son invalidos'
                 );
                 
             }else{
                 $administrativoCreate = new administrativos;
                 $administrativoCreate->Nombres = $params_array['Nombres'];
                 $administrativoCreate->Apellidos = $params_array['Apellidos'];
                 $administrativoCreate->Usuario= $params_array['Usuario'];
                 $administrativoCreate->Contraseña = $params_array['Contraseña'];
                 $administrativoCreate->Estado = $params_array['Estado'];
 
                 if ($administrativoCreate->save()){
                     $data = array(
                         'status'=>'success',
                         'code'=>200,
                         'message'=>'El administrador ha sido creado exitosamente',
                     );
                 }
                 else{
                     $data = array(
                         'status'=>'errorGuardado',
                         'code'=>400,
                         'message'=>'El administrador no ha sido creado ',
                     );
                 }
             }
         }
         return response()->json($data, $data['code']);
}
}
