<?php

namespace app\models\domain\entity;

use app\models\domain\repository\DAOFactory;

class animal
{
    public string $id_animal = '';
    public string $nombre_animal = '';
    public string $genero = '';
    public string $zona_direccion = '';
    public string $tipo_dueno = '';
    public string $edad = '';
    public string $especie = '';
    public string $imagen = '';
    public string $json = '';



    public function load(array $attributes): static
    {
        foreach ($attributes as $key => $value) {
            $this->{$key} = $value;
        }


        return $this;
    }

    public static function getById(string $id_animal): static
    {
        $data = DAOFactory::getAnimalDAO()->getById($id_animal);
        $model = new Animal();
        $model->load($data);
        
        return $model;
    }

    public static function getAll(): array
    {
        return DAOFactory::getAnimalDAO()->getAll();
    }

    public function create(): int
    {
        return DAOFactory::getAnimalDAO()->create($this);
    }

    public function update(): int
    {
        return DAOFactory::getAnimalDAO()->update($this);
    }

    public function delete(): int
    {
        return DAOFactory::getAnimalDAO()->delete($this);
    }
}