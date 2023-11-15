<?php

use yii\bootstrap5\Html;
use yii\bootstrap5\ActiveForm;

/** @var \app\models\InventarioForm $model */

?>

<h1>Modificar Inventario</h1>


<?php $form = ActiveForm::begin() ?>

<?= $form->field($model, 'nombre') ?>

<?= $form->field($model, 'cantidad') ?>


<div>
    <button type="submit" class="btn btn-primary">Enviar</button>
</div>

<?php $form->end()?>