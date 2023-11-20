<?php

use yii\helpers\Url;

use yii\bootstrap5\Html;
/** @var \app\models\domain\entity\Esterilizacion $model */
/** @var array $productos */


?>

<h1>Esterilizacion</h1>

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

    </tbody>
</table>

<div>
    <?php $id_este = $model->id; ?>

    <a href="index.php?r=esterilizacion/xx&id=<?=$id_este ?>" class="btn btn-primary">Agrega</a>
</div>

<table class="table">
    <thead>
        <tr>
            <th>
                Producto
            </th>
            <th>
                Cantidad
            </th>
            <th>
                Eliminar
            </th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($productos as $row): ?>
        <tr>
            <td>
                <?= $row['nombre'] ?>
            </td>
            <td>
            <?= $row['cantidad'] ?>
            </td>
            <td>
            <?= Html::a('<i class="fa-solid fa-trash-can"></i>', ['esterilizacion/deleteproducto', 'id_estein' => $row['id_estein'],'id'=>$id_este], ['data-confirm' => 'Desea eliminar el producto de la esterilizacion?']) ?>

            
            </td>
            
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>