<?php

namespace app\models\domain\entity;

use app\models\domain\repository\DAOFactory;

class Esterilizacion{

    public string $id = '';
    public string $tatuaje= '';
    public string $fecha_esterilizacion='';
    public string $datatype='';
    public string $id_dueno='';
    public string $id_animal='';
    public string $nombre='';

    public string $cantidad='';

    
    


    public function load(array $attributes) : static
    {
        foreach($attributes as $key => $value){
            $this->{$key} = $value;
        }
        return $this;
        

    }

    public function getProductos(): array
    { 

    return DAOFactory::getEsterilizacionDAO()->getProductosByEsterilizacion($this->id);

    }

    public function getProductosEste(): array
    { 

    return DAOFactory::getEsterilizacionDAO()->getProductosEsterilizacion($this->id);

    }

    public static function getById(string $id): static 
    {
        $data = DAOFactory::getEsterilizacionDAO()->getById($id);
        $model = new Esterilizacion();
        $model->load($data);
        return $model;
    }  
    

    
    
    public static function getAll(): array{
        return DAOFactory::getEsterilizacionDAO()->getAll();
    }

    public function create() : int {
        return DAOFactory::getEsterilizacionDAO()->create($this);
    }    

    public function update() : int {
        return DAOFactory::getEsterilizacionDAO()->update($this);
    }

    public function delete() : int {
        return DAOFactory::getEsterilizacionDAO()->delete($this);
    }  

    
}