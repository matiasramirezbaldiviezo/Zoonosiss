<?php

use yii\helpers\Url;

/** @var array $usuario */
?>

<h1>Lista de usuarios registrados</h1>

<div>
<a href="index.php?r=usuario/create" class="btn btn-primary">Nuevo Usuario</a>
</div>

<table class="table">
    <thead>
        <th>ID</th>
        <th>Nombre</th>
        <th>Rol</th>
        <th></th>
    </thead>
    <tbody>
        <?php foreach($usuario as $row): ?>
        <tr>
            <td> <?= $row['id'] ?> </td>
            <td> <?= $row['nombre'] ?> </td>
            <td> <?= $row['rol'] ?> </td>
            <td> <a href="index.php?r=usuario/view&id=<?= $row['id'] ?>"  ><i class="fa-solid fa-eye"></i></a> </td>
        </tr>
        <?php endforeach ?>
    </tbody>
</table>