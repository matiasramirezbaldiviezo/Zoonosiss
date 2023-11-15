<?php

namespace app\models\domain\entity;

use app\models\domain\repository\DAOFactory;

class Usuario{

    public string $id = '';
    public string $nombre= '';
    public string $rol = '';

    public function load(array $attributes) : static
    {
        foreach($attributes as $key => $value){
            $this->{$key} = $value;
        }

        return $this;
    }

    public static function getById(string $id): static 
    {
        $data = DAOFactory::getUsuarioDAO()->getById($id);
        $model = new Usuario();
        $model->load($data);
        return $model;
    }  
    
    public static function getAll(): array{
        return DAOFactory::getUsuarioDAO()->getAll();
    }

    public function create() : int {
        return DAOFactory::getUsuarioDAO()->create($this);
    }    
}