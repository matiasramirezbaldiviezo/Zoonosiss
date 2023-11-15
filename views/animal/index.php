<?php

use yii\helpers\Url;
use yii\bootstrap5\Html;

/** @var array $animal */
?>

<h1>Lista de animales</h1>

<div>
<a href="index.php?r=animal/create" class="btn btn-primary">Registrar animal/paciente</a>
</div>

<table class="table">
    <thead>
        <th>ID</th>
        <th>Nombre</th>
        <th>Genero</th>
        <th>Zona/Direccion</th>
        <th>Especie</th>
        <th></th>
    </thead>
    <tbody>
        <?php foreach($animal as $row): ?>
        <tr>
            <td> <?= $row['id_animal'] ?> </td>
            <td> <?= $row['nombre_animal'] ?> </td>
            <td> <?= $row['genero'] ?> </td>
            <td> <?= $row['zona_direccion'] ?> </td>
            <td> <?= $row['especie'] ?> </td>
            <td> 
                <a href="index.php?r=animal/view&id=<?= $row['id_animal'] ?>"  ><i class="fa-solid fa-eye"></i></a>
                <a href="index.php?r=animal/update&id=<?= $row['id_animal'] ?>"  ><i class="fa-solid fa-pencil"></i></a>

                <?= Html::a('<i class="fa-solid fa-trash-can"></i>', ['animal/delete', 'id_animal' => $row['id_animal']], ['data-confirm' => '¿Desea eliminar el registro?']) ?>

            </td>
        </tr>
        <?php endforeach ?>
    </tbody>
</table>