<?php

/** @var \app\models\domain\entity\Inventario $model */

?>

<h1>Lista de inventario</h1>

<table class="table">
    <tbody>
        <tr>
            <td> ID </td>
            <td> <?= $model->id ?> </td>
        </tr>
        <tr>
            <td> Nombre </td>
            <td> <?= $model->nombre ?> </td>
        </tr>
        <tr>
            <td> CANTIDAA </td>
            <td> <?= $model->cantidad ?> </td>
        </tr>
    </tbody>
</table>