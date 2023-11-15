<?php

use yii\helpers\Url;

/** @var array $productos */
?>

<h1>Lista de productos</h1>

<div>
<a href="index.php?r=producto/create" class="btn btn-primary">Nuevo Producto</a>
</div>

<table class="table">
    <thead>
        <th>ID</th>
        <th>Nombre</th>
        <th></th>
    </thead>
    <tbody>
        <?php foreach($productos as $row): ?>
        <tr>
            <td> <?= $row['id'] ?> </td>
            <td> <?= $row['nombre'] ?> </td>
            <td> <a href="index.php?r=producto/view&id=<?= $row['id'] ?>"  ><i class="fa-solid fa-eye"></i></a> </td>
        </tr>
        <?php endforeach ?>
    </tbody>
</table>