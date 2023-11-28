<?php

use yii\helpers\Url;
use yii\bootstrap5\Html;

/** @var array $propietario */
?>

<h1>Lista de propietarios registrados</h1>

<div>
<a href="index.php?r=propietario/create" class="btn btn-primary">Registrar nuevo propietario</a>
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
        <th>Apellidos</th>
        <th>Celular</th>
        <th>Direccion</th>
        <th></th>
    </thead>
    <tbody>
        <?php foreach($propietario as $row): ?>
        <tr>
            <td> <?= $row['id_dueno'] ?> </td>
            <td> <?= $row['nombre'] ?> </td>
            <td> <?= $row['apellidos'] ?> </td>
            <td> <?= $row['celular'] ?> </td>
            <td> <?= $row['direccion'] ?> </td>
            <td> 
                <a href="index.php?r=propietario/view&id_dueno=<?= $row['id_dueno'] ?>"  ><i class="fa-solid fa-eye"></i></a>
                <a href="index.php?r=propietario/update&id_dueno=<?= $row['id_dueno'] ?>"  ><i class="fa-solid fa-pencil"></i></a>

                <?= Html::a('<i class="fa-solid fa-trash-can"></i>', ['propietario/delete', 'id_dueno' => $row['id_dueno']], ['data-confirm' => '¿Desea eliminar el registro?']) ?>

            </td>
        </tr>
        <?php endforeach ?>
    </tbody>
</table>