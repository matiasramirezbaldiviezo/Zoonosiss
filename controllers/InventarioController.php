<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\InventarioForm;
use app\models\domain\entity\Inventario;

class InventarioController extends Controller{

    public function actionIndex(){
        
        $inventario = Inventario::getAll();

        return $this->render('index', [
            'inventario' => $inventario
        ]);
    }

    public function actionView($id){
        $inventario = Inventario::getById($id);

        return $this->render('view', [
            'model' => $inventario,
        ]);
    }


    public function actionCreate(){
        $form = new InventarioForm();

        if(Yii::$app->request->isPost){
            if($form->load(Yii::$app->request->post()) 
            && $form->validate()
            && $form->create()){
                Yii::$app->session->addFlash('success', 'Inventario guardado');
                return $this->redirect(['index']);

            }          
        }

        return $this->render('create', [
            'model' => $form,
        ]);
    }


    public function actionUpdate($id)
    {
        $inventario = Inventario::getById($id);

        $form = new InventarioForm();
        $form->id = $inventario->id;
        $form->nombre = $inventario->nombre;
        $form->cantidad = $inventario->cantidad;

        if (Yii::$app->request->isPost) {
            if (
                $form->load(Yii::$app->request->post())
                && $form->validate()
                && $form->update()
            ) {
                Yii::$app->session->addFlash('success', 'Producto actualizado');
                return $this->redirect(['index']);
            }
        }

        return $this->render('update', [
            'model' => $form,
        ]);
    }

    public function actionDelete($id)
    {
        $inventario = Inventario::getById($id);
        $inventario->delete();
        return $this->redirect(['index']);
    }

    
    
}
