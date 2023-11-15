<?php

/** @var \app\models\domain\entity\Usuario $model */

?>

<h1>Lista de usuarios registrados</h1>

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
            <td> Rol </td>
            <td> <?= $model->nombre ?> </td>
        </tr>
        
    </tbody>
</table>