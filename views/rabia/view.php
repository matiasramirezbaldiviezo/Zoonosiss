<?php

/** @var \app\models\domain\entity\Rabia $model */
//Decodificar el Json enviado
$jsonData = json_decode($model->json, true);

?>

<h1>Registro N° <?= $model->id_doc_rabia ?></h1> 

<table class="table">
    <tbody>
        <tr>
            <td> ID </td>
            <td> <?= $model->id_doc_rabia ?> </td>
        </tr>
        <tr>
            <td> Municipio </td>
            <td> <?= $model->municipio ?> </td>
        </tr>
        <tr>
            <td> Area </td>
            <td> <?= $model->area ?> </td>
        </tr>
        <tr>
            <td> Fecha </td>
            <td> <?= $model->fecha_registro_rabia?> </td>
        </tr>
        <tr>
            <td> ID Dueño </td>
            <td> <?= $model-> id_dueno ?> </td>
        </tr>
        <tr>
            <td> ID Animal </td>
            <td> <?= $model-> id_animal ?> </td>
        </tr>
        <tr>
            <td><b>Condición del animal</b></td>
        </tr>
        <tr>
            <td> Sedes </td>
            <td> <?= $jsonData['sedes'] ?? '' ?> </td>
        </tr>
        <tr>
            <td> Distrito </td>
            <td> <?= $jsonData['distrito'] ?? '' ?> </td>
        </tr>
        <tr>
            <td> Especie </td>
            <td> <?= $jsonData['especie'] ?? '' ?> </td>
        </tr>
        <tr>
            <td> Tipo de Animal </td>
            <td> <?= $jsonData['tipo_animal'] ?? '' ?> </td>
        </tr>
        <tr>
            <td><b>Datos de Vacunación</b></td>
        </tr>
        <tr>
            <td> Vacuna Antirrábica </td>
            <td> <?= $jsonData['vacuna_antirrabica'] ?? '' ?> </td>
        </tr>
        <tr>
            <td> Carnet de Vacunación </td>
            <td> <?= $jsonData['presento_carnet'] ?? '' ?> </td>
        </tr>
        <tr>
            <td> Fecha Última Vacuna </td>
            <td> <?= $jsonData['fecha_ult_vacuna'] ?? '' ?> </td>
        </tr>
        <tr>
            <td> Marca de la Vacuna </td>
            <td> <?= $jsonData['marca_vacuna'] ?? '' ?> </td>
        </tr>
        <tr>
            <td><b>Síntomas Clínicos de Rabia del Animal</b></td>
        </tr>
        <tr>
            <td> Síntomas Clínicos </td>
            <td> <?= $jsonData['sintomas_clinicos'] ?? '' ?> </td>
        </tr>
        <tr>
            <td> Especificar </td>
            <td> <?= $jsonData['especificar'] ?? '' ?> </td>
        </tr>
        <tr>
            <td> Diagnóstico Presuntivo </td>
            <td> <?= $jsonData['diagnostico_presuntivo'] ?? '' ?> </td>
        </tr>
        <tr>
            <td><b>Antecedentes de Mordeduras</b></td>
        </tr>
        <tr>
            <td> Antecedentes de Mordeduras </td>
            <td> <?= $jsonData['antecedentes_mordeduras'] ?? '' ?> </td>
        </tr>
        <tr>
            <td> Número de Personas Mordidas </td>
            <td> <?= $jsonData['n_de_personas_mordidas'] ?? '' ?> </td>
        </tr>
        <tr>
            <td> Número de Especies de Animales Mordidos </td>
            <td> <?= $jsonData['n_especie_animales_mordidos'] ?? '' ?> </td>
        </tr>
        <tr>
            <td> Circunstancias de los Animales Mordidos </td>
            <td> <?= $jsonData['circunstancias_mordidos'] ?? '' ?> </td>
        </tr>
        <tr>
            <td><b>Diagnóstico de Laboratorio</b></td>
        </tr>
        <tr>
            <td> Técnica </td>
            <td> <?= $jsonData['tecnica'] ?? '' ?> </td>
        </tr>
        <tr>
            <td> Tipo de Muestra </td>
            <td> <?= $jsonData['tipo_muestra'] ?? '' ?> </td>
        </tr>
        <tr>
            <td> Fecha de Muestra </td>
            <td> <?= $jsonData['fecha_muestra'] ?? '' ?> </td>
        </tr>
        <tr>
            <td> Fecha de Envío </td>
            <td> <?= $jsonData['fecha_envio'] ?? '' ?> </td>
        </tr>
        <tr>
            <td> Fecha de Recepción </td>
            <td> <?= $jsonData['fecha_recepcion'] ?? '' ?> </td>
        </tr>
        <tr>
            <td><b>Remitente</b></td>
        </tr>
        <tr>
            <td> Nombre del Remitente </td>
            <td> <?= $jsonData['nombre_remitente'] ?? '' ?> </td>
        </tr>
        <tr>
            <td> Cargo </td>
            <td> <?= $jsonData['cargo'] ?? '' ?> </td>
        </tr>
        <tr>
            <td> Teléfono </td>
            <td> <?= $jsonData['telefono'] ?? '' ?> </td>
        </tr>
        <tr>
            <td> Número de Fax </td>
            <td> <?= $jsonData['n_fax'] ?? '' ?> </td>
        </tr>
        <tr>
            <td> Celular </td>
            <td> <?= $jsonData['celular'] ?? '' ?> </td>
        </tr>
        <tr>
            <td> Observaciones </td>
            <td> <?= $jsonData['observaciones'] ?? '' ?> </td>
        </tr>
        <tr>
            <td> Nombre del Responsable </td>
            <td> <?= $jsonData['nombre_responsable'] ?? '' ?> </td>
        </tr>
    </tbody>
</table>