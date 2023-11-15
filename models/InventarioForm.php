<?php

namespace app\models;

use yii\base\Model;
use app\models\domain\entity\Inventario;

class InventarioForm extends Model
{
    public $id;
    public $nombre;
    public $cantidad;


    public function rules()
    {
        return [
            ['nombre', 'required'],
            ['nombre', 'string', 'min' => 3],
            ['cantidad', 'integer'],
            ['id', 'safe'],
        ];
    }

    public function create() : bool{
        $this->id = uniqid();
        
        $inventario = new Inventario();
        $inventario->load($this->attributes);        
        return $inventario->create() > 0;
    }
    //para crear
    public function update() : bool{
        $inventario = Inventario::getById($this->id);
        $inventario->nombre = $this->nombre;
        $inventario->cantidad = $this->cantidad;

        return $inventario->update() > 0;
    }
    
}