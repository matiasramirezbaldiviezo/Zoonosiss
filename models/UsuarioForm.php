<?php

namespace app\models;

use yii\base\Model;
use app\models\domain\entity\Usuario;

class UsuarioForm extends Model
{
    public $id;
    public $nombre;
    public $rol;


    public function rules()
    {
        return [
            ['nombre', 'required'],
            ['nombre', 'string', 'min' => 3],
            ['id', 'safe'],
            ['rol', 'required'],
        ];
    }

    public function create() : bool{
        $this->id = uniqid();
        
        $usuario = new Usuario();
        $usuario->load($this->attributes);        
        return $usuario->create() > 0;
    }
    
}