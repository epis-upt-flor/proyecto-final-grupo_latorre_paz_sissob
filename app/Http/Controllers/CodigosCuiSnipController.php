<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CodigosCuiSnip;
use App\Models\Usuarios;
use Illuminate\Support\Facades\DB;

class CodigosCuiSnipController extends Controller
{
    public function listar(Request $request)
    {
        $getcuis = $this::index($request);
        $registros = $getcuis->cuiSnip;
        return view('cuisnip', compact('registros'));
    }

    public function index(Request $request)
    {
        $codigo = $request->input('CodigoCuiSnip_csn');

        // $cuisnip = CodigosCuiSnip::
        //         ->join('tb_CodigosCuiSnip', 'users.id', '=', 'contacts.user_id')
        //         ->get();
        $cuisnip = DB::table('tb_CodigosCuiSnip')
                ->join('tbp_Usuario',
                    'tbp_Usuario.Item_usu','=', 'tb_CodigosCuiSnip.Item_usu')
                // ->where('CodigoCuiSnip_csn', $codigo)
                ->get()->transform(
                    function ($row){
                        return (object) [
                            "CodigoCuiSnip_csn" => $row->CodigoCuiSnip_csn,
                            "Item_Tipo" => $row->Item_Tipo,
                            "NombreObraProyecto_csn" => $row->NombreObraProyecto_csn,
                            "FuenteFinanciamiento_oc" => $row->FuenteFinanciamiento_oc,
                            "Region_csn" => $row->Region_csn,
                            "Item_dist" => $row->Item_dist,
                            "Item_prov" => $row->Item_prov,
                            "Item_usu" => $row->Item_usu,
                            "ArchivoResolucionInspector_csn" => $row->ArchivoResolucionInspector_csn,
                            "ArchivoResolucionAprobadoExpedienteTecnico_csn" => $row->ArchivoResolucionAprobadoExpedienteTecnico_csn,
                            "PresupuestoReformulado_csn" => $row->PresupuestoReformulado_csn,
                            "ArchivoPresupuestoReformulado_csn" => $row->ArchivoPresupuestoReformulado_csn,
                            "FechaInicioProgramado_csn" => $row->FechaInicioProgramado_csn,
                            "FechaTerminoProgramado_csn" => $row->FechaTerminoProgramado_csn,
                            "Item_Plazo" => $row->Item_Plazo,
                            "NumeroPlazoEjecucion_csn" => $row->NumeroPlazoEjecucion_csn,
                            "FechaUltimaModificacion_csn" => $row->FechaUltimaModificacion_csn,
                            "Estado_csn" => $row->Estado_csn,
                            "NombreApellido_usu" => $row->NombreApellido_usu,
                            "Cargo_usu" => $row->Cargo_usu,
                            // "ResidenteObra_oad" => $row->ResidenteObra_oad,
                            // "ArchivoResolucionResidente_oad" => $row->ArchivoResolucionResidente_oad,
                            // "PresupuestoAprobadoExpedienteTecnico_csn" => $row->PresupuestoAprobadoExpedienteTecnico_csn,
                        ];
                    }

                );



                // ->transform( function ($row) use($connect, $fecha) {
                //     $fec_ultima = DB::connection($connect->bd)
                //     ->table('CVE_MEDICOS_HORARIOS as P')
                //     ->select(DB::raw("TOP 1 FORMAT (FEC_HORARIO, 'dd-MM-yyyy')  as FEC_HORARIO"))
                //     ->where('FEC_HORARIO', '>', $fecha)
                //     ->where('COD_MEDICO', '=', $row->COD_MEDICO)
                //     ->get()->first()->FEC_HORARIO;
                //     return [
                //         "COD_AUXILIAR" => $row->COD_AUXILIAR,
                //         "DES_AUXILIAR" => $row->DES_AUXILIAR,
                //         "DES_ESPECIALIDAD" => $row->DES_ESPECIALIDAD,
                //         "COD_ESPECIALIDAD" => (int) $row->COD_ESPECIALIDAD,
                //         "fecha" => $fecha,
                //         "IMAGEN" => 'default',
                //         "COD_MEDICO" => (int) $row->COD_MEDICO,
                //         "ULTIMA" => $fec_ultima
                //     ];
                // });
        return (object) [
            'status' => 200,
            "cuiSnip" => $cuisnip,
            "message" => 'obtenido correctamente'
        ];


        //Item_usu
    }
}
