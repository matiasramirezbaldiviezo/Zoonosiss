<?php

/** @var \app\models\domain\entity\Propietario $model */

?>

<h1>Propietario N° <?= $model->id_dueno ?></h1> 

<table class="table">
    <tbody>
        <tr>
            <td> ID </td>
            <td> <?= $model->id_dueno ?> </td>
        </tr>
        <tr>
            <td> Nombre </td>
            <td> <?= $model->nombre ?> </td>
        </tr>
        <tr>
            <td> Apellidos </td>
            <td> <?= $model->apellidos ?> </td>
        </tr>
        <tr>
            <td> Celular </td>
            <td> <?= $model->celular?> </td>
        </tr>
        <tr>
            <td> Telefono </td>
            <td> <?= $model-> telefono?> </td>
        </tr>
        <tr>
            <td> Direccion </td>
            <td> <?= $model-> direccion ?> </td>
        </tr>
        <tr>
            <td> Tipo de dueño </td>
            <td> <?= $model-> tipo_dueno ?> </td>
        </tr>

    </tbody>
</table>