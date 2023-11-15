<?php

use yii\helpers\Url;
use yii\bootstrap5\Html;

/** @var array $inventario */
?>

<h1>Lista de Inventarios Registrados</h1>

<div>
<a href="index.php?r=inventario/create" class="btn btn-primary">Registrar nueva Inventario</a>
</div>

<table class="table">
    <thead>
        <th>ID</th>
        <th>Nombre</th>
        <th>Cantidad</th>
        <th></th>
    </thead>
    <tbody>
        <?php foreach($inventario as $row): ?>
        <tr>
            <td> <?= $row['id'] ?> </td>
            <td> <?= $row['nombre'] ?> </td>
            <td> <?= $row['cantidad'] ?> </td>
            <td> 
            <a href="index.php?r=inventario/view&id=<?= $row['id'] ?>"  ><i class="fa-solid fa-eye"></i></a> 
            <a href="index.php?r=inventario/update&id=<?= $row['id'] ?>"  ><i class="fa-solid fa-pencil"></i></a>
            <?= Html::a('<i class="fa-solid fa-trash-can"></i>', ['inventario/delete', 'id' => $row['id']], ['data-confirm' => 'Desea eliminar el producto?']) ?>


            </td>
        
        
        
        </tr>
        <?php endforeach ?>
    </tbody>
</table>