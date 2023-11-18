<?php

use yii\helpers\Html;

/** @var \app\models\domain\entity\Esterilizacion $model */
/** @var array $productoseste */
/** @var int $id_esterilizacion */

?>

<h1>Lista de esterilizacion</h1>

<table class="table">
    <thead>
        <tr>
            <th>
                Id_Producto
            </th>
            <th>
                Producto
            </th>
            <th>
                Cantidad   /    Guardar 
            </th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($productoseste as $row): ?>
            <tr>
                <td>
                    <?= $row['id'] ?>
                </td>
                <td>
                    <?= $row['nombre'] ?>
                </td>
                <td>
                    <?php
                    echo Html::beginForm(['esterilizacion/guardararticulo', 'id' => $id_esterilizacion, 'id_inventario' => $row['id']], 'post', ['class' => 'form-inline']);
                    echo Html::textInput('cantidad', null, ['placeholder' => 'Ingrese la cantidad', 'class' => 'form-control']);
                    echo Html::submitButton('<i class="fa-solid fa-vial"></i>', ['class' => 'btn btn-link']);
                    echo Html::endForm();
                    ?>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
