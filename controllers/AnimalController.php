<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\AnimalForm;
use app\models\domain\entity\Animal;

class AnimalController extends Controller
{

    public function actionIndex()
    {
        $animal = Animal::getAll();

        return $this->render('index', [
            'animal' => $animal
        ]);
    }

    public function actionView($id)
    {
        $animal = Animal::getById($id);

        return $this->render('view', [
            'model' => $animal,
        ]);
    }

    public function actionCreate()
    {
        $form = new AnimalForm();

        if (Yii::$app->request->isPost) {
            if (
                $form->load(Yii::$app->request->post())
                && $form->validate()
                && $form->create()
            ) {
                Yii::$app->session->addFlash('success', 'Animal guardado');
                return $this->redirect(['index']);
            }
        }

        return $this->render('create', [
            'model' => $form,
        ]);
    }

    public function actionUpdate($id)
    {
        $animal = Animal::getById($id);

        $form = new AnimalForm();
        $form->id = $animal->id;
        $form->animal = $animal->nombre;
        $form ->animal = $animal->genero;
        $form ->animal = $animal->direccion;
        $form ->animal = $animal->tipo_dueno;
        $form ->animal = $animal->edad;
        $form ->animal = $animal->especie;

        if (Yii::$app->request->isPost) {
            if (
                $form->load(Yii::$app->request->post())
                && $form->validate()
                && $form->update()
            ) {
                Yii::$app->session->addFlash('success', 'Animal actualizado');
                return $this->redirect(['index']);
            }
        }

        return $this->render('update', [
            'model' => $form,
        ]);
    }


    public function actionDelete($id)
    {
        $animal = Animal::getById($id);
        $animal->delete();
        return $this->redirect(['index']);
    }
}
