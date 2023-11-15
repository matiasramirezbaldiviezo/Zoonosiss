<?php

/** @var \app\models\domain\entity\Animal $model */

?>

<h1>Animal <?= $model->id ?></h1> 

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