<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\EsterilizacionForm;
use app\models\domain\entity\Esterilizacion;

class EsterilizacionController extends Controller
{

    public function actionIndex()
    {
        $esterilizacion = Esterilizacion::getAll();

        return $this->render('index', [
            'esterilizacion' => $esterilizacion
        ]);
    }

    public function actionView($id)
    {
        $esterilizacion = Esterilizacion::getById($id);

        return $this->render('view', [
            'model' => $esterilizacion,
        ]);
    }

    public function actionCreate()
    {
        $form = new EsterilizacionForm();

        if (Yii::$app->request->isPost) {
            if (
                $form->load(Yii::$app->request->post())
                && $form->validate()
                && $form->create()
            ) {
                Yii::$app->session->addFlash('success', 'Esterilizacion guardada');
                return $this->redirect(['index']);
            }
        }

        return $this->render('create', [
            'model' => $form,
        ]);

    }

    public function actionUpdate($id)
    {
        $esterilizacion = Esterilizacion::getById($id);

        $form = new EsterilizacionForm();
        $form->id = $esterilizacion->id;
        $form->tatuaje = $esterilizacion->tatuaje;
        $form->datatype = $esterilizacion->datatype;
        $form->id_dueno = $esterilizacion->id_dueno;
        $form->id_animal= $esterilizacion->id_animal;
        
        if (Yii::$app->request->isPost) {
            if (
                $form->load(Yii::$app->request->post())
                && $form->validate()
                && $form->update()   
            )
        
            {
                Yii::$app->session->addFlash('success', 'Esterilizacion actualizada');
                return $this->redirect(['index']);
            }
        }
        

        return $this->render('update', [
            'model' => $form,
        ]);
    }


    public function actionDelete($id)
    {
        $esterilizacion = Esterilizacion::getById($id);
        $esterilizacion->delete();
        return $this->redirect(['index']);
        
    }

    public function actionDeleteproducto($id_estein)
    {
        
        $esterilizacion = Esterilizacion::getByIdProducto($id_estein);
        $id = $esterilizacion->id;
        $esterilizacion->deleteproducto($id_estein);
        Yii::$app->session->addFlash('success', 'Producto eliminado de  la Esterilizacion');
        return $this->redirect(['index']);
    }

    



    public function actionEstein($id)
    {
        $esterilizacion = Esterilizacion::getById($id);
        $productos = $esterilizacion->getProductos();


        return $this->render('productos', [
            'model' => $esterilizacion,
            'productos' => $productos,
        ]);
    }

    public function actionXx($id)
    {
        $esterilizacion = Esterilizacion::getById($id);
        $productoseste = $esterilizacion->getProductosEste();
        $id_esterilizacion = $id;

        return $this->render('addproducto', [
            'id_esterilizacion' => $id_esterilizacion,
            'model' => $esterilizacion,
            'productoseste' => $productoseste,
        ]);

        
    }
    public function actionGuardararticulo($id, $id_inventario)
    {
        $esterilizacion = Esterilizacion::getById($id);
        $cantidad = Yii::$app->request->post('cantidad');

    
        $esterilizacion->createproducto($id_inventario, $cantidad);
        Yii::$app->session->addFlash('success', 'Producto añadido a Esterilizacion');
        return $this->redirect(['index']);
        
    }
}