<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\UsuarioForm;
use app\models\domain\entity\Usuario;

class UsuarioController extends Controller{

    public function actionIndex(){
        
        $usuario = Usuario::getAll();

        return $this->render('index', [
            'usuario' => $usuario
        ]);
    }

    public function actionView($id){
        $usuario = Usuario::getById($id);

        return $this->render('view', [
            'model' => $usuario,
        ]);
    }


    public function actionCreate(){
        $form = new UsuarioForm();

        if(Yii::$app->request->isPost){
            if($form->load(Yii::$app->request->post()) 
            && $form->validate()
            && $form->create()){
                Yii::$app->session->addFlash('success', 'Usuario guardado');
                return $this->redirect(['index']);

            }          
        }

        return $this->render('create', [
            'model' => $form,
        ]);
    }

}