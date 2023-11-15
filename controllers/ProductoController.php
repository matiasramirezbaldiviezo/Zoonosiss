<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\ProductoForm;
use app\models\domain\entity\Producto;

class ProductoController extends Controller{

    public function actionIndex(){
        
        $productos = Producto::getAll();

        return $this->render('index', [
            'productos' => $productos
        ]);
    }
    

    public function actionView($id){
        $producto = Producto::getById($id);

        return $this->render('view', [
            'model' => $producto,
        ]);
    }


    public function actionCreate(){
        $form = new ProductoForm();

        if(Yii::$app->request->isPost){
            if($form->load(Yii::$app->request->post()) 
            && $form->validate()
            && $form->create()){
                Yii::$app->session->addFlash('success', 'Producto guardado');
                return $this->redirect(['index']);

            }          
        }

        return $this->render('create', [
            'model' => $form,
        ]);
    }

}
