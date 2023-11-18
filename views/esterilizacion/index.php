<?php

use yii\helpers\Url;
use yii\bootstrap5\Html;

/** @var array $esterilizacion */
?>

<h1>Lista de esterilizaciones</h1>

<div>
<a href="index.php?r=esterilizacion/create" class="btn btn-primary">Nuevo Registro de Esterilizacion</a>
</div>

<table class="table">
    <thead>
        <th>ID Esterilizacion</th>
        <th>Tatuaje</th>
        <th>fecha</th>
        <th>datatype</th>
        <th>Dueño</th>
        <th>Animal</th>
        <th>Crear, Editar, Borrar</th>
        <th> <p>Inventario UsadoCrear   Modificar</th>
        <th></th>
    </thead>
    <tbody>
        <?php foreach($esterilizacion as $row): ?>
        <tr>
            <td> <?= $row['id'] ?> </td>
            <td> <?= $row['tatuaje'] ?> </td>
            <td> <?= $row['fecha_esterilizacion'] ?> </td>
            <td> <?= $row['datatype'] ?> </td>
            <td> <?= $row['id_dueno'] ?> </td>
            <td> <?= $row['id_animal'] ?> </td>
            <td> 
                <a href="index.php?r=esterilizacion/view&id=<?= $row['id'] ?>"  ><i class="fa-solid fa-eye"></i></a>
                <a href="index.php?r=esterilizacion/update&id=<?= $row['id'] ?>"  ><i class="fa-solid fa-pencil"></i></a>

                <?= Html::a('<i class="fa-solid fa-trash-can"></i>', ['esterilizacion/delete', 'id' => $row['id']], ['data-confirm' => 'Desea eliminar el producto?']) ?>


            </td>

                
            <td>
            <a href="index.php?r=esterilizacion/estein&id=<?= $row['id'] ?>"  ><i class="fa-solid fa-business-time"></i></a>
        </td>

        
                
            
        </tr>
        <?php endforeach ?>
    </tbody>
</table>