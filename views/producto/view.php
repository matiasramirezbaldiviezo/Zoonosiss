<?php

/** @var \app\models\domain\entity\Producto $model */

?>

<h1>Lista de productos</h1>

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
    </tbody>
</table>