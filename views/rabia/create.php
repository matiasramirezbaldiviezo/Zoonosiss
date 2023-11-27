<?php

use yii\bootstrap5\Html;
use yii\bootstrap5\ActiveForm;

/** @var \app\models\RabiaForm $model */

?>

<h1>Nuevo Registro de Rabia</h1>

<?php $form = ActiveForm::begin() ?>

<?= $form->field($model, 'municipio') -> textInput()?>

<?= $form->field($model, 'area')->dropDownList(['Urbano' => 'Urbano', 'Rural' => 'Rural']) ?>

<?= $form->field($model, 'id_dueno')->textInput() ?>

<?= $form->field($model, 'id_animal')->textInput() ?>

<br></br>
<h2>Condición del animal</h2>

<?= $form->field($model, 'sedes') -> textInput()?>

<?= $form->field($model, 'distrito') -> textInput()?>

<?= $form->field($model, 'especie') -> textInput()?>

<?= $form->field($model, 'tipo_animal')->dropDownList([
    'Vagabundo' => 'Vagabundo',
    'Con dueño y no sale de casa' => 'Con dueño y no sale de casa',
    'Con dueño y sale de casa (Callejero)' => 'Con dueño y sale de casa (Callejero)',
    'Silvestre' => 'Silvestre',
    'Desconocido' => 'Desconocido',
]) ?>

<br></br>
<h2>Datos de vacunación</h2>

<?= $form->field($model, 'vacuna_antirrabica') -> dropDownList([
    'Si' => 'Si',
    'No' => 'No',
    'Desconocido' => 'Desconocido',
]) ?>

<?= $form->field($model, 'presento_carnet') -> dropDownList([
    'Si' => 'Si',
    'No' => 'No',
]) ?>

<?= $form->field($model, 'fecha_ult_vacuna') -> textInput()?>

<?= $form->field($model, 'marca_vacuna') -> dropDownList([
    'INLASA' => 'INLASA',
    'OTRAS' => 'OTRAS',
]) ?>

<br></br>
<h2>Síntomas Clínicos de Rabia del Animal</h2>

<?= $form->field($model, 'sintomas_clinicos') -> dropDownList([
    'Agresividad' => 'Agresividad',
    'Hidrofobia' => 'Hidrofobia',
    'Babeo' => 'Babeo',
    'Paralisis' => 'Paralisis',
    'No presenta sintomas' => 'No presenta sintomas',
    'Otros' => 'Otros'
]) ?>

<?= $form->field($model, 'especificar') -> textInput()?>

<?= $form->field($model, 'diagnostico_presuntivo') -> textInput()?>

<br></br>
<h2>Antecedentes de Mordeduras</h2>

<?= $form->field($model, 'antecedentes_mordeduras') -> dropDownList([
    'Mordedura a humanos' => 'Mordedura a humanos',
    'Lamedura' => 'Lamedura',
    'Mordedura a animales' => 'Mordedura a animales',
    'No se conoce' => 'No se conoce'
]) ?>

<?= $form->field($model, 'n_de_personas_mordidas') -> textInput()?>

<?= $form->field($model, 'n_especie_animales_mordidos') -> textInput()?>

<?= $form->field($model, 'circunstancias_mordidos') -> dropDownList([
    'Animal atacó sin agresión' => 'Animal atacó sin agresión',
    'Animal atacó con agresión' => 'Animal atacó con agresión'
]) ?>

<br></br>
<h2>Diagnóstico de laboratorio</h2>

<?= $form->field($model, 'tecnica') -> dropDownList([
    'IFD' => 'IFD',
    'Aislamiento Viral' => 'Aislamiento Viral',
    'Caracterización Antigénica' => 'Caracterización antigénica'
]) ?>

<?= $form->field($model, 'tipo_muestra') -> textInput()?>

<?= $form->field($model, 'fecha_muestra') -> textInput()?>

<?= $form->field($model, 'fecha_envio') -> textInput()?>

<?= $form->field($model, 'fecha_recepcion') -> textInput()?>

<br></br>
<h2>Remitente</h2>

<?= $form->field($model, 'nombre_remitente') -> textInput()?>

<?= $form->field($model, 'cargo') -> textInput()?>

<?= $form->field($model, 'telefono') -> textInput()?>

<?= $form->field($model, 'n_fax') -> textInput()?>

<?= $form->field($model, 'celular') -> textInput()?>

<?= $form->field($model, 'observaciones') -> textInput()?>

<?= $form->field($model, 'nombre_responsable') -> textInput()?>

<div>
    <button type="submit" class="btn btn-primary">Enviar</button>
</div>

<?php $form->end()?>