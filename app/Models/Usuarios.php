<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Usuarios extends Model
{
    // use HasFactory;


    protected $table = 'tbp_Usuario';


    protected $primaryKey = 'Item_usu';

    protected $fillable = [
        "Codigo_usu",
        "NombreApellido_usu",
        "Cargo_usu",
        "Contrasena_usu",
        "Estado_usu",
    ];

    public $timestamps = false;


}
