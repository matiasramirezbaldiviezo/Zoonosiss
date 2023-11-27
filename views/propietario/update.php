<?php

use yii\bootstrap5\Html;
use yii\bootstrap5\ActiveForm;

/** @var \app\models\PropietarioForm $propietario */

?>

<h1>Modificar registro</h1>


<?php $form = ActiveForm::begin() ?>

<?= $form->field($model, 'nombre') -> textInput()?>

<?= $form->field($model, 'apellidos') -> textInput()?>

<?= $form->field($model, 'celular')-> textInput()?>

<?= $form->field($model, 'telefono')-> textInput()?>

<?= $form->field($model, 'direccion')->textInput() ?>

<?= $form->field($model, 'tipo_dueno')->dropDownList(['1' => 'Particular', '2' => 'Refugio', '3' => 'Representante']) ?>

<div>
    <button type="submit" class="btn btn-primary">Enviar</button>
</div>

<?php $form->end()?>