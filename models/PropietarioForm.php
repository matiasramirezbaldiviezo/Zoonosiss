<?php

namespace app\models;

use yii\base\Model;
use app\models\domain\entity\Propietario;

class PropietarioForm extends Model
{
    public $id_dueno;
    public $celular;
    public $direccion;
    public $tipo_dueno ;
    public $nombre;
    public $apellidos;
    public $telefono;

    public function rules()
{
    return [
        [['direccion', 'tipo_dueno', 'nombre', 'apellidos', ], 'required'],
        [['direccion', 'nombre', 'apellidos'], 'string'],
        [['celular', 'tipo_dueno', 'telefono'], 'integer'],
    ];
}


    public function create() : bool{
        $this->id_dueno = uniqid();
        
        $propietario = new Propietario();
        $propietario->load($this->attributes);        
        return $propietario->create() > 0;
    }
    
    public function update() : bool{
        $propietario = Propietario::getById($this->id_dueno);
        $propietario->celular = $this->celular;
        $propietario -> direccion = $this -> direccion;
        $propietario -> tipo_dueno = $this -> tipo_dueno;
        $propietario -> nombre = $this -> nombre;
        $propietario -> apellidos = $this -> apellidos;
        $propietario -> telefono = $this -> telefono;
        return $propietario->update() > 0;
    }
}