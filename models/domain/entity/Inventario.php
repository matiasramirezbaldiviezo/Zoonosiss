<?php

namespace app\models\domain\entity;

use app\models\domain\repository\DAOFactory;

class Inventario{

    //falta arreglar esto
    public string $id = '';
    public string $nombre= '';
    public string $cantidad = '';



    public function load(array $attributes) : static
    {
        foreach($attributes as $key => $value){
            $this->{$key} = $value;
        }

        return $this;
    }

    public static function getById(string $id): static 
    {
        $data = DAOFactory::getInventarioDAO()->getById($id);
        $model = new Inventario();
        $model->load($data);
        return $model;
    }  
    
    public static function getAll(): array{
        return DAOFactory::getInventarioDAO()->getAll();
    }

    public function create() : int {
        return DAOFactory::getInventarioDAO()->create($this);
    }  
    
    public function update() : int {
        return DAOFactory::getInventarioDAO()->update($this);
    }

    public function delete() : int {
        return DAOFactory::getInventarioDAO()->delete($this);
    }  
}