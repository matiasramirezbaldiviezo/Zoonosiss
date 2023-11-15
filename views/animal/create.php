<?php

use yii\bootstrap5\Html;
use yii\bootstrap5\ActiveForm;

/** @var \app\models\AnimalForm $model */

?>

<h1>Nuevo Animal</h1>


<?php $form = ActiveForm::begin(); ?>

<?= $form->field($model, 'genero')->dropDownList(['0' => 'Macho', '1' => 'Hembra']) ?>

<?= $form->field($model, 'zona_direccion')->textInput() ?>

<?= $form->field($model, 'tipo_dueno')->dropDownList(['1' => 'Particular', '2' => 'Refugio', '3' => 'Representante']) ?>

<?= $form->field($model, 'edad')->textInput() ?>

<?= $form->field($model, 'especie')->textInput() ?>

<?= Html::submitButton('Guardar', ['class' => 'btn btn-primary']) ?>

<?php ActiveForm::end(); ?>




<div>
    <button type="submit" class="btn btn-primary">Enviar</button>
</div>

<?php $form->end()?>