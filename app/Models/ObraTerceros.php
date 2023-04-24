<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ObraTerceros extends Model
{
    //use HasFactory;

    protected $table = 'tbp_ObraTerceros';

    protected $primaryKey = 'Item_ot';

    protected $fillable = [
    'Item_csn',
    'ArchivoCertificadoServicio_ot',
    'ArchivoBoletaPagoCertificadoServicio_ot',
    'ArchivoBoletaPagoSenalizacion_ot',
    'ArchivoCertificadoCompromiso_ot',
    'ArchivoBoletaPagoCompromiso_ot',
    'ArchivoOficioSolicitudInicio_ot',
    'ArchivoBoletaPagoSolicitudInicio_ot',
    'Propietario_ot',
    'LongitudAguaPotable_ot',
    'LongitudAlcantarillado_ot',
    'ConexionesDomiciliariasAguaPotable_ot',
    'ConexionesDomiciliariasAlcantarillado_ot',
    'PresupuestoEjecutado_ot',
    ];

    public $timestamps = false;
}
