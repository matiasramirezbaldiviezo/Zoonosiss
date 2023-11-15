<?php

namespace app\models;

use yii\base\Model;
use app\models\domain\entity\Producto;

class ProductoForm extends Model
{
    public $id;
    public $nombre;


    public function rules()
    {
        return [
            ['nombre', 'required'],
            ['nombre', 'string', 'min' => 3],
            ['id', 'safe'],
        ];
    }

    public function create() : bool{
        $this->id = uniqid();
        
        $producto = new Producto();
        $producto->load($this->attributes);        
        return $producto->create() > 0;
    }
    
}
