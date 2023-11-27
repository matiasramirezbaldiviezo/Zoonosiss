    <?php

    use yii\helpers\Html;

    /** @var \app\models\domain\entity\Animal $model */
    // Decodificar el JSON almacenado en el campo 'json' en un array asociativo
$jsonData = json_decode($model->json, true);

    ?>

    <h1>Animal <?= $model->id_animal?></h1>

    <table class="table">
        <tbody>
            <tr>
                <td> ID </td>
                <td> <?= $model->id_animal ?> </td>
            </tr>
            <tr>
                <td> Nombre </td>
                <td> <?= $model->nombre_animal ?> </td>
            </tr>
            <tr>
                <td> Genero </td>
                <td> <?= $model->genero ?> </td>
            </tr>
            <tr>
                <td> Direccion </td>
                <td> <?= $model->zona_direccion?> </td>
            </tr>
            <tr>
                <td> Tipo de Dueño </td>
                <td> <?= $model->tipo_dueno ?> </td>
            </tr>
            <tr>
                <td> Edad </td>
                <td> <?= $model->edad ?> </td>
            </tr>
            <tr>
                <td> Especie </td>
                <td> <?= $model->especie ?> </td>
            </tr>
            <tr>
                <td> Imagen </td>
                <td>
                <?= Html::img("@web/img/{$model->imagen}",
                 ['class' => 'img-fluid',
                  'alt' => 'Imagen 1',
                  'style' => 'width: 200px; height: 200px;']) ?>
            </td>
            </tr>
            <tr>
            <td><b>Informacion Adicional del animal</b></td>
            </tr>
            <tr>
            <td> Confinamiento </td>
            <td> <?= $jsonData['confinamiento'] ?? '' ?> </td>
            </tr>
            <tr>
            <td> comportamiento </td>
            <td> <?= $jsonData['comportamiento'] ?? '' ?> </td>
            </tr>
            <tr>
            <td> visito_veterinario </td>
            <td> <?= $jsonData['visito_veterinario'] ?? '' ?> </td>
            </tr>
            <tr>
            <td> vancuna_12meses </td>
            <td> <?= $jsonData['vancuna_12meses'] ?? '' ?> </td>
            </tr>
            <tr>
            <td> acceso_vacuna_rabia </td>
            <td> <?= $jsonData['acceso_vacuna_rabia'] ?? '' ?> </td>
            </tr>
            <tr>
            <td> desaparacitado </td>
            <td> <?= $jsonData['desaparacitado'] ?? '' ?> </td>
            </tr>
            <tr>
            <td> inyeccion_anticonceptiva </td>
            <td> <?= $jsonData['inyeccion_anticonceptiva'] ?? '' ?> </td>
            </tr>
            <tr>
            <td> adquirir_mascota </td>
            <td> <?= $jsonData['adquirir_mascota'] ?? '' ?> </td>
            </tr>
            <tr>
            <td> veces_embarazo </td>
            <td> <?= $jsonData['veces_embarazo'] ?? '' ?> </td>
            </tr>
            <tr>
            <td> camadas </td>
            <td> <?= $jsonData['camadas'] ?? '' ?> </td>
            </tr>
            <tr>
            <td> complexion </td>
            <td> <?= $jsonData['complexion'] ?? '' ?> </td>
            </tr>

            <tr>
            <td> condicion_piel </td>
            <td> <?= $jsonData['condicion_piel'] ?? '' ?> </td>
            </tr>

            <tr>
            <td> post_operatorio </td>
            <td> <?= $jsonData['post_operatorio'] ?? '' ?> </td>
            </tr>
            
        </tbody>
    </table>
