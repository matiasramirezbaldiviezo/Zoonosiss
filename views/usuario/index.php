<?php

use yii\helpers\Url;

/** @var array $usuario */
?>

<h1>Lista de usuarios registrados</h1>

<div>
<a href="index.php?r=usuario/create" class="btn btn-primary">Nuevo Usuario</a>
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