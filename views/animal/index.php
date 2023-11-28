<?php

use yii\helpers\Url;
use yii\bootstrap5\Html;

/** @var array $animal */
?>

<h1>Lista de animales</h1>

<div>
    <a href="<?= Url::to(['animal/create']) ?>" class="btn btn-primary">Registrar animal/paciente</a>
</div>

<br>
<input class="form-control" id="myInput" type="text" placeholder="Buscar...">

<?php
$script = <<< JS
$(document).ready(function(){
    $("#myInput").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#myTable tr").filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });
});
JS;

$this->registerJs($script);
?>

<table class="table">
    <thead>
        <th>ID</th>
        <th>Nombre</th>
        <th>Genero</th>
        <th>Zona/Direccion</th>
        <th>Especie</th>
        <th></th>
    </thead>
    <tbody id="myTable">
        <?php foreach ($animal as $row) : ?>
            <tr>
                <td> <?= $row['id_animal'] ?> </td>
                <td> <?= $row['nombre_animal'] ?> </td>
                <td> <?= $row['genero'] ?> </td>
                <td> <?= $row['zona_direccion'] ?> </td>
                <td> <?= $row['especie'] ?> </td>
                <td>
                    <a href="<?= Url::to(['animal/view', 'id_animal' => $row['id_animal']]) ?>"><i class="fa-solid fa-eye"></i></a>
                    <a href="<?= Url::to(['animal/update', 'id_animal' => $row['id_animal']]) ?>"><i class="fa-solid fa-pencil"></i></a>
                    <?= Html::a('<i class="fa-solid fa-trash-can"></i>', ['animal/delete', 'id_animal' => $row['id_animal']], ['data-confirm' => '¿Desea eliminar el registro?']) ?>
                </td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>


