<?php

use yii\bootstrap5\Html;
use yii\bootstrap5\ActiveForm;

/** @var \app\models\AnimalForm $model */

?>

<h1>Nuevo Animal</h1>
<?php $form = ActiveForm::begin() ?>

<?= $form->field($model, 'nombre_animal')->textInput() ?>
<?= $form->field($model, 'genero')->dropDownList(['M' => 'Macho', 'F' => 'Hembra']) ?>
<?= $form->field($model, 'zona_direccion')->textInput() ?>
<?= $form->field($model, 'tipo_dueno')->dropDownList(['Particular' => 'Particular', 'Refugio' => 'Refugio', 'Representante' => 'Representante']) ?>
<?= $form->field($model, 'edad')->textInput() ?>
<?= $form->field($model, 'especie')->dropDownList(['Perro' => 'Perro', 'Gato' => 'Gato']) ?>
<?= $form->field($model, 'imagen')->fileInput() ?> <!-- Nuevo campo para cargar la imagen -->

<h1>Formulario</h1>

<?= $form->field($model, 'confinamiento')->dropDownList(
    ['Sale SIN supervicion' => 'Sale SIN supervicion',
    'Sale CON supervicion' => 'Sale CON supervicion',
    'Amarrado' => 'Amarrado',
    'No sale del patio' => 'No sale del patio']) ?>

<?= $form->field($model, 'comportamiento')->dropDownList(
    ['Sociable' => 'Sociable',
    'Agresivo' => 'Agresivo',
    'Temeroso' => 'Temeroso',
    'No sabe' => 'No sabe']) ?>

<?= $form->field($model, 'visito_veterinario')->dropDownList(
    ['Si' => 'Si',
    'No' => 'No',
    'No Sabe' => 'No Sabe']) ?>

<?= $form->field($model, 'vancuna_12meses')->dropDownList(
    ['Si' => 'Si',
    'No' => 'No',
    'No Sabe' => 'No Sabe']) ?>

<?= $form->field($model, 'acceso_vacuna_rabia')->dropDownList(
    ['Campaña gratuita del Gobierno' => 'Campaña gratuita del Gobierno',
    'Veterinario Local' => 'Veterinario Local']) ?>

<?= $form->field($model, 'desaparacitado')->dropDownList(
    ['Si' => 'Si',
    'No' => 'No',
    'No Sabe' => 'No Sabe']) ?>

<?= $form->field($model, 'inyeccion_anticonceptiva')->dropDownList(
    ['Si' => 'Si',
    'No' => 'No',
    'No Sabe' => 'No Sabe']) ?>

<?= $form->field($model, 'adquirir_mascota')->dropDownList(
    ['Rescate' => 'Rescate',
    'Adopcion' => 'Adopcion',
    'Comprada' => 'Comprada',
    'Regalo' => 'Regalo',
    'Nacio en casa' => 'Nacio en casa']) ?>

<?= $form->field($model, 'veces_embarazo')->dropDownList(
    ['No sabe' => 'No sabe',
    'Una vez' => 'Una vez',
    'Mas de tres' => 'Mas de tres',
    'Dos a tres' => 'Dos a tres',
    'Nunca' => 'Nunca'
    ]) ?>

<?= $form->field($model, 'camadas')->dropDownList(
    ['Se venden' => 'Se venden',
    'Se regalan' => 'Se regalan',
    'Se quedan en casa' => 'Se quedan en casa',
    'Nunca' => 'Nunca',
    'Se sacrifican' => 'Se sacrifican',
    'Muerte Natural' => 'Muerte Natural',
    'No sabe' => 'No sabe']) ?>

<?= $form->field($model, 'complexion')->dropDownList(
    [
    'Normal' => 'Normal',
    'Delgado' => 'Delgado',
    'Sobrepeso' => 'Sobrepeso']) ?>

<?= $form->field($model, 'condicion_piel')->dropDownList(
    ['Normal' => 'Normal',
    'Dermatitis' => 'Dermatitis',
    'Otro' => 'Otro',
    'Sarna' => 'Sarna']) ?>

<?= $form->field($model, 'post_operatorio')->dropDownList(
    ['Su hogar' => 'Su hogar',
    'Refugio/alberge' => 'Refugio/alberge',
    'Hogar Temporal' => 'Hogar Temporal',
    'Su comunidad/la calle' => 'Su comunidad/la calle',
    'Adopcion' => 'Adopcion']) ?>

<div>
    <button type="submit" class="btn btn-primary">Enviar</button>
</div>

<?php $form->end() ?>
