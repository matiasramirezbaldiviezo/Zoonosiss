<?php

use yii\bootstrap5\Html;
use yii\bootstrap5\ActiveForm;

/** @var \app\models\UsuarioForm $model */

?>

<h1>Nuevo producto</h1>


<?php $form = ActiveForm::begin() ?>

<?= $form->field($model, 'nombre') ?>

<div>
    <button type="submit" class="btn btn-primary">Enviar</button>
</div>

<?php $form->end()?>