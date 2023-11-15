<?php

namespace app\models\domain\entity;

use app\models\domain\repository\DAOFactory;

class Producto{

    public string $id = '';
    public string $nombre= '';

    public function load(array $attributes) : static
    {
        foreach($attributes as $key => $value){
            $this->{$key} = $value;
        }
        return $this;
    }

    public static function getById(string $id): static 
    {
        $data = DAOFactory::getProductoDAO()->getById($id);
        $model = new Producto();
        $model->load($data);
        return $model;
    }  
    
    public static function getAll(): array{
        return DAOFactory::getProductoDAO()->getAll();
    }

    public function create() : int {
        return DAOFactory::getProductoDAO()->create($this);
    }    
}