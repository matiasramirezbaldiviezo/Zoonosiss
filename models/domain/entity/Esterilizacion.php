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

    public string $id_estein='';
    public string $cantidad='';
    public string $id_inventario='';

    
    


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


    public function getRegistarProductos(): array
    { 

    return DAOFactory::getEsterilizacionDAO()->getProductosEsterilizacion($this->id, $this->id_inventario);

    }

    

    public static function getById(string $id): static 
    {
        $data = DAOFactory::getEsterilizacionDAO()->getById($id);
        $model = new Esterilizacion();
        $model->load($data);
        return $model;
    }  
    
    public static function getByIdProducto(string $id): static 
    {
        $data = DAOFactory::getEsterilizacionDAO()->getByIdProducto($id);
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
    public function createproducto($id_inventario, $cantidad) : int {
        return DAOFactory::getEsterilizacionDAO()->createproducto($this, $id_inventario, $cantidad);
    }
    
    public function update() : int {
        return DAOFactory::getEsterilizacionDAO()->update($this);
    }

    public function delete() : int {
        return DAOFactory::getEsterilizacionDAO()->delete($this);
    }  
    public function deleteproducto() : int {
        return DAOFactory::getEsterilizacionDAO()->deleteproducto($this);
    }  
    

    
}