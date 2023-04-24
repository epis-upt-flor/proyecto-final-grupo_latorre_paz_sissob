<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ObraTerceros;

class ObraTercerosController extends Controller
{
    //

   // protected $table

   public function index(Request $request)
   {
    $obraterceros = ObraTerceros::get();
    return $obraterceros;
   }



   public function guardarObraTerceros(Request $request)
   {
       $validated = $request->validate([

        "Item_ot" => "required",
        "Item_csn" => "required",
        "ArchivoCertificadoServicio_ot" => "required",
        "ArchivoBoletaPagoCertificadoServicio_ot" => "required",
        "ArchivoBoletaPagoSenalizacion_ot" => "required",
        "ArchivoCertificadoCompromiso_ot" => "required",
        "ArchivoBoletaPagoCompromiso_ot" => "required",
        "ArchivoOficioSolicitudInicio_ot" => "required",
        "ArchivoBoletaPagoSolicitudInicio_ot" => "required",
        "Propietario_ot" => "required",
        "LongitudAguaPotable_ot" => "required",
        "LongitudAlcantarillado_ot" => "required",
        "ConexionesDomiciliariasAguaPotable_ot" => "required",
        "ConexionesDomiciliariasAlcantarillado_ot" => "required",
        "PresupuestoEjecutado_ot" => "required",
       ]);

       $IdObraTerceros = $request->Item_usu;
       $ObraTerceros = ObraTerceros::firstOrNew(['Item_ot' => $IdObraTerceros]);
       $ObraTerceros->fill($request->all());


       $ObraTerceros->save();

       $response = [
           "status" => 200,
           "ObraTerceros" => $ObraTerceros,
           "message" => 'registrado corretamente'
       ];

       return $response;


   }

   public function borrarObraTerceros(Request $request)
   {
       $id = $request->input('Item_csn');
       $ObraTerceros_borrar = ObraTerceros::get()->where('Item_csn', $id)->first();
       $ObraTerceros_borrar->delete();

       return [
           "status" => 200,
           "ObraTerceros" => $ObraTerceros_borrar,
           "message" => "$ObraTerceros_borrar->Item_csn borrado correctamente"
       ];
   }
   public function buscarObraTerceros(Request $request)
   {
       $palabra_clave = $request->input('Item_csn');
       $ObraTerceros = ObraTerceros::get()->where('Item_csn', $palabra_clave)->first();
       return [
           "status" => 200,
           "ObraTerceros" => $ObraTerceros,
           "message" => "obteniendo datos"
       ];
   }
}
