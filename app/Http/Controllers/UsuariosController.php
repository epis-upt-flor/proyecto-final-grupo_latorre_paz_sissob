<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuarios;


class UsuariosController extends Controller
{
    //
    public function index(Request $request)
    {
        $usuarios = Usuarios::get();
        return $usuarios;
    }

    public function guardarUsuario(Request $request)
    {

        $validated = $request->validate([
            "Codigo_usu" => "required",
            "NombreApellido_usu" => "required",
            "Cargo_usu" => "required",
            "Contrasena_usu" => "required",
            "Estado_usu" => "required",
        ]);

        $IdUsuario = $request->Item_usu;
        $usuario = Usuarios::firstOrNew(['Item_usu' => $IdUsuario]);
        $usuario->fill($request->all());


        $usuario->save();

        $response = [
            "status" => 200,
            "usuario" => $usuario,
            "message" => 'registrado corretamente'
        ];

        return $response;




        //EJEMPLO DE REGISTRO
        // $validated = $request->validate([
        //     'Nombres' => 'required',
        //     'Apellidos' => 'required',
        //     'DNI' => 'required',
        //     'correo' => 'required',
        // ]);

        // $IdCliente = $request->IdCliente;
        // $cliente = Cliente::firstOrNew(['IdCliente' => $IdCliente]);
        // $cliente->fill($request->all());
        // $cliente->save();
    }

    public function borrarUsuario(Request $request)
    {
        $id = $request->input('Codigo_usu');
        $usuario_borrar = Usuarios::get()->where('Codigo_usu', $id)->first();
        $usuario_borrar->delete();

        return [
            "status" => 200,
            "usuario" => $usuario_borrar,
            "message" => "$usuario_borrar->NombreApellido_usu borrado correctamente"
        ];
    }
    public function buscarUsuario(Request $request)
    {
        $palabra_clave = $request->input('Codigo_usu');
        $usuario = Usuarios::get()->where('Codigo_usu', $palabra_clave)->first();
        return [
            "status" => 200,
            "usuario" => $usuario,
            "message" => "obteniendo datos"
        ];
    }

}
