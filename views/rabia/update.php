<?php

use yii\bootstrap5\Html;
use yii\bootstrap5\ActiveForm;

/** @var \app\models\RabiaForm $model */

// Decodificar el JSON almacenado en el campo 'json' en un array asociativo
$jsonData = json_decode($model->json, true);
?>

<h1>Modificar registro</h1>

<?php $form = ActiveForm::begin() ?>

<?= $form->field($model, 'municipio')->textInput() ?>

<?= $form->field($model, 'area')->dropDownList(['0' => 'Urbano', '1' => 'Rural']) ?>

<?= $form->field($model, 'id_dueno')->textInput() ?>

<?= $form->field($model, 'id_animal')->textInput() ?>

<br></br>
<h2>Condición del animal</h2>
<?= $form->field($model, 'sedes')->textInput(['value' => $jsonData['sedes'] ?? '']) ?>

<?= $form->field($model, 'distrito')->textInput(['value' => $jsonData['distrito'] ?? '']) ?>

<?= $form->field($model, 'especie')->textInput(['value' => $jsonData['especie'] ?? '']) ?>

<?= $form->field($model, 'tipo_animal')->textInput(['value' => $jsonData['tipo_animal'] ?? '']) ?>

<br></br>
<h2>Datos de vacunación</h2>

<?= $form->field($model, 'vacuna_antirrabica')->textInput(['value' => $jsonData['vacuna_antirrabica'] ?? '']) ?>

<?= $form->field($model, 'presento_carnet')->dropDownList(['0' => 'No', '1' => 'Sí'], ['value' => $jsonData['presento_carnet'] ?? '']) ?>

<?= $form->field($model, 'fecha_ult_vacuna')->textInput(['value' => $jsonData['fecha_ult_vacuna'] ?? '']) ?>

<?= $form->field($model, 'marca_vacuna')->textInput(['value' => $jsonData['marca_vacuna'] ?? '']) ?>

<br></br>
<h2>Síntomas Clínicos de Rabia del Animal</h2>

<?= $form->field($model, 'sintomas_clinicos')->textInput(['value' => $jsonData['sintomas_clinicos'] ?? '']) ?>

<?= $form->field($model, 'especificar')->textInput(['value' => $jsonData['especificar'] ?? '']) ?>

<?= $form->field($model, 'diagnostico_presuntivo')->textInput(['value' => $jsonData['diagnostico_presuntivo'] ?? '']) ?>

<br></br>
<h2>Antecedentes de Mordeduras</h2>

<?= $form->field($model, 'antecedentes_mordeduras')->textInput(['value' => $jsonData['antecedentes_mordeduras'] ?? '']) ?>

<?= $form->field($model, 'n_de_personas_mordidas')->textInput(['value' => $jsonData['n_de_personas_mordidas'] ?? '']) ?>

<?= $form->field($model, 'n_especie_animales_mordidos')->textInput(['value' => $jsonData['n_especie_animales_mordidos'] ?? '']) ?>

<?= $form->field($model, 'circunstancias_mordidos')->textInput(['value' => $jsonData['circunstancias_mordidos'] ?? '']) ?>

<br></br>
<h2>Diagnóstico de laboratorio</h2>

<?= $form->field($model, 'tecnica')->textInput(['value' => $jsonData['tecnica'] ?? '']) ?>

<?= $form->field($model, 'tipo_muestra')->textInput(['value' => $jsonData['tipo_muestra'] ?? '']) ?>

<?= $form->field($model, 'fecha_muestra')->textInput(['value' => $jsonData['fecha_muestra'] ?? '']) ?>

<?= $form->field($model, 'fecha_envio')->textInput(['value' => $jsonData['fecha_envio'] ?? '']) ?>

<?= $form->field($model, 'fecha_recepcion')->textInput(['value' => $jsonData['fecha_recepcion'] ?? '']) ?>

<br></br>
<h2>Remitente</h2>

<?= $form->field($model, 'nombre_remitente')->textInput(['value' => $jsonData['nombre_remitente'] ?? '']) ?>

<?= $form->field($model, 'cargo')->textInput(['value' => $jsonData['cargo'] ?? '']) ?>

<?= $form->field($model, 'telefono')->textInput(['value' => $jsonData['telefono'] ?? '']) ?>

<?= $form->field($model, 'n_fax')->textInput(['value' => $jsonData['n_fax'] ?? '']) ?>

<?= $form->field($model, 'celular')->textInput(['value' => $jsonData['celular'] ?? '']) ?>

<?= $form->field($model, 'observaciones')->textInput(['value' => $jsonData['observaciones'] ?? '']) ?>

<?= $form->field($model, 'nombre_responsable')->textInput(['value' => $jsonData['nombre_responsable'] ?? '']) ?>

<div>
    <button type="submit" class="btn btn-primary">Enviar</button>
</div>

<?php ActiveForm::end() ?>