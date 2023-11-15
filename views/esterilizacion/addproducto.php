<?php

use yii\helpers\Url;

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
                Cantidad usada
            </th>
            <th>
                Accion
            </th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($productoseste as $row): ?>
        <tr>
            <td>
                <?= $row['id'] ?>
            </td>
            <td>
                <?= $row['nombre'] ?>
            </td>
            <td>
                <input type="text" name="cantidad" placeholder="Ingrese cantidad">
        </td>

        
            
            
                <td>
            <a href="<?= Url::to(['esterilizacion/guardararticulo', 'id' => $id_esterilizacion, 'producto_id' => $row['id']]) ?>"  ><i class="fa-solid fa-vial"></i></a>
                
        </td>
            
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
