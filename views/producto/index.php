<?php

use yii\helpers\Url;

/** @var array $productos */
?>

<h1>Lista de productos</h1>

<div>
<a href="index.php?r=producto/create" class="btn btn-primary">Nuevo Producto</a>
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