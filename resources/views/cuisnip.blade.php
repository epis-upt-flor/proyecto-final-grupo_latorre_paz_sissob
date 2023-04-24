<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<table>
    <thead>

        <th>CodigoCuiSnip_csn</th>
        <th>Item_Tipo</th>
        <th>NombreObraProyecto_csn</th>
        <th>FuenteFinanciamiento_oc</th>
        <th>Region_csn</th>
        <th>Item_dist</th>
        <th>Item_prov</th>
        <th>Item_usu</th>
        <th>ArchivoResolucionInspector_csn</th>
        <th>ArchivoResolucionAprobadoExpedienteTecnico_csn</th>
        <th>PresupuestoReformulado_csn</th>
        <th>ArchivoPresupuestoReformulado_csn</th>
        <th>FechaInicioProgramado_csn</th>
        <th>FechaTerminoProgramado_csn</th>
        <th>Item_Plazo</th>
        <th>NumeroPlazoEjecucion_csn</th>
        <th>FechaUltimaModificacion_csn</th>
        <th>Estado_csn</th>
        <th>NombreApellido_usu</th>
        <th>Cargo_usu</th>
    </thead>
    <tbody>
        @foreach ($registros as $item )
        <tr>
            <td>{{$item->CodigoCuiSnip_csn}}</td>
            <td>{{$item->Item_Tipo}}</td>
            <td>{{$item->NombreObraProyecto_csn}}</td>
            <td>{{$item->FuenteFinanciamiento_oc}}</td>
            <td>{{$item->Region_csn}}</td>
            <td>{{$item->Item_dist}}</td>
            <td>{{$item->Item_prov}}</td>
            <td>{{$item->Item_usu}}</td>
            <td>{{$item->ArchivoResolucionInspector_csn}}</td>
            <td>{{$item->ArchivoResolucionAprobadoExpedienteTecnico_csn}}</td>
            <td>{{$item->PresupuestoReformulado_csn}}</td>
            <td>{{$item->ArchivoPresupuestoReformulado_csn}}</td>
            <td>{{$item->FechaInicioProgramado_csn}}</td>
            <td>{{$item->FechaTerminoProgramado_csn}}</td>
            <td>{{$item->Item_Plazo}}</td>
            <td>{{$item->NumeroPlazoEjecucion_csn}}</td>
            <td>{{$item->FechaUltimaModificacion_csn}}</td>
            <td>{{$item->Estado_csn}}</td>
            <td>{{$item->NombreApellido_usu}}</td>
            <td>{{$item->Cargo_usu}}</td>
        </tr>

        @endforeach

    </tbody>
</table>

</body>
</html>
