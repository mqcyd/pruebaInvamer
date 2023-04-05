<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\usuarios;


class usuariosController extends Controller
{
    public function getEmpleados(){
        $allEmpleados = usuarios::all();
        $data = array(
            'empleados'=> $allEmpleados
        );
        return response()->json($data);
    }

    public function getEmpleadosEstado1(){
        $allempleadosEstado1 = usuarios::where('estado',1)->get();
        $data = array(
            'empleadosEstado1' => $allempleadosEstado1
        );
        return response()->json($data);
    }

    public function getEmpleadosEstado0(){
        $allempleadosEstado0 = usuarios::where('estado',0)->get() ;
        $data = array(
            'empleadosEstado0' => $allempleadosEstado0
        );
        return response()->json($data);
    }

    public function crearUsuario(Request $request){

       $json = $request->input('json', null);
        $params = json_decode($json);
        $params_array = json_decode($json, true);

        if (!empty($params) && !empty($params_array)){
            $params_array = array_map('trim', $params_array);
            $validate = \Validator::make($params_array,[
                'Sede' => 'required',
                'Cesantías' => 'required',
                'Proceso' => 'required',
                'Gerencia' => 'required',
                'Banner' => 'required',
                'Fecha_ingreso' => 'required',
                'Clave' => 'required',
                'Estado' => 'required',
                'Disponibilidad' => 'required',
            ]);
            if ($validate->fails()){
                $data = array(
                    'status' =>'errorDatosRequeridos',
                    'code' => 400,
                    'message' => 'Los datos ingresados son invalidos'
                );
                
            }else{
                $usuarioCreate = new usuarios;
                $usuarioCreate->Sede = $params_array['Sede'];
                $usuarioCreate->Cesantías = $params_array['Cesantías'];
                $usuarioCreate->Proceso = $params_array['Proceso'];
                $usuarioCreate->Gerencia = $params_array['Gerencia'];
                $usuarioCreate->Banner = $params_array['Banner'];
                $usuarioCreate->Fecha_ingreso = $params_array['Fecha_ingreso'];
                $usuarioCreate->Clave = $params_array['Clave'];
                $usuarioCreate->Estado = $params_array['Estado'];
                $usuarioCreate->Disponibilidad = $params_array['Disponibilidad'];

                if ($usuarioCreate->save()){
                    $data = array(
                        'status'=>'success',
                        'code'=>200,
                        'message'=>'El usuario ha sido creado exitosamente',
                    );
                }
                else{
                    $data = array(
                        'status'=>'errorGuardado',
                        'code'=>400,
                        'message'=>'El usuario no ha sido creado ',
                    );
                }
            }
        }
        return response()->json($data, $data['code']);
    }

}