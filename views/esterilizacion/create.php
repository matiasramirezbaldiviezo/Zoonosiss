<?php

use yii\bootstrap5\Html;
use yii\bootstrap5\ActiveForm;

/** @var \app\models\EsterilizacionesForm $model */

?>

<h1>Nueva Esterilizacion</h1>


<?php $form = ActiveForm::begin() ?>
<?= $form->field($model, 'tatuaje') ?>
<?= $form->field($model, 'datatype') ?>
<?= $form->field($model, 'id_dueno') ?>
<?= $form->field($model, 'id_animal') ?>

<div>
    <button type="submit" class="btn btn-primary">Enviar</button>
</div>

<?php $form->end()?>