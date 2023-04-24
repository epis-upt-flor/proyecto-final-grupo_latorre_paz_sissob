<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CodigosCuiSnip extends Model
{
    use HasFactory;

    protected $table = "tb_CodigosCuiSnip";

    protected $primaryKey = "Item_csn";

    protected $fillable = [

        "CodigoCuiSnip_csn",
        "Item_Tipo",
        "NombreObraProyecto_csn",
        "FuenteFinanciamiento_oc",
        "Region_csn",
        "Item_dist",
        "Item_prov",
        "Item_usu",
        "ArchivoResolucionInspector_csn",
        "ResidenteObra_oad",
        "ArchivoResolucionResidente_oad",
        "PresupuestoAprobadoExpedienteTecnico_csn",
        "ArchivoResolucionAprobadoExpedienteTecnico_csn",
        "PresupuestoReformulado_csn",
        "ArchivoPresupuestoReformulado_csn",
        "FechaInicioProgramado_csn",
        "FechaTerminoProgramado_csn",
        "Item_Plazo",
        "NumeroPlazoEjecucion_csn",
        "FechaUltimaModificacion_csn",
        "Estado_csn",

    ];

    public $timestamps = false;
}
