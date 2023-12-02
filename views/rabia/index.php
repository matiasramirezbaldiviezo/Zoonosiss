<?php

use yii\helpers\Url;
use yii\bootstrap5\Html;

/** @var array $rabia */
?>

<h1>Lista de Seguimiento Epidemiológico</h1>

<div>
<a href="index.php?r=rabia/create" class="btn btn-primary">Nuevo registro de rabia</a>
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
        <th>Municipio</th>
        <th>Area</th>
        <th>Fecha(Año-Mes-Día)</th>
        <th>Dueño</th>
        <th>Animal</th>
        <th></th>
    </thead>
    <tbody>
        <?php foreach($rabia as $row): ?>
        <tr>
            <td> <?= $row['id_doc_rabia'] ?> </td>
            <td> <?= $row['municipio'] ?> </td>
            <td> <?= $row['area'] ?> </td>
            <td> <?= $row['fecha_registro_rabia'] ?> </td>
            <td> <?= $row['id_dueno'] ?> </td>
            <td> <?= $row['id_animal'] ?> </td>
            <td> 
                <a href="index.php?r=rabia/view&id_doc_rabia=<?= $row['id_doc_rabia'] ?>"  ><i class="fa-solid fa-eye"></i></a>
                <a href="index.php?r=rabia/update&id_doc_rabia=<?= $row['id_doc_rabia'] ?>"  ><i class="fa-solid fa-pencil"></i></a>

                <?= Html::a('<i class="fa-solid fa-trash-can"></i>', ['rabia/delete', 'id_doc_rabia' => $row['id_doc_rabia']], ['data-confirm' => '¿Desea eliminar el registro?']) ?>

            </td>
        </tr>
        <?php endforeach ?>
    </tbody>
</table>