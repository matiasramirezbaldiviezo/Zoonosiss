<?php

/** @var \app\models\domain\entity\Esterilizacion $model */

?>

<h1>Lista de esterilizacion</h1>

<table class="table">
    <tbody>
        <tr>
            <td> ID </td>
            <td> <?= $model->id ?> </td>
        </tr>
        <tr>
            <td> Nombre </td>
            <td> <?= $model->tatuaje ?> </td>
        </tr>
        <tr>
            <td> fecha_esterilizacion </td>
            <td> <?= $model->fecha_esterilizacion ?> </td>
        </tr>
        <tr>
            <td> datatype </td>
            <td> <?= $model->datatype ?> </td>
        </tr>
        <tr>
            <td> id_dueno </td>
            <td> <?= $model->id_dueno ?> </td>
        </tr>

        <tr>
            <td> id_animal </td>
            <td> <?= $model->id_animal ?> </td>
        </tr>
    </tbody>
</table>
