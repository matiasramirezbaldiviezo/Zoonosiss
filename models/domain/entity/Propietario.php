<?php

namespace app\models\domain\entity;

use app\models\domain\repository\DAOFactory;

class propietario
{
    public string $id_dueno = '';
    public string $celular = '';
    public string $direccion = '';
    public string $tipo_dueno = '';
    public string $nombre = '';
    public string $apellidos = '';
    public string $telefono = '';

    public function load(array $attributes): static
    {
        foreach ($attributes as $key => $value) {
                $this->{$key} = $value;
        }
        return $this;
    }

    public static function getById(string $id_dueno): static
    {
        $data = DAOFactory::getPropietarioDAO()->getById($id_dueno);
        $model = new Propietario();
        $model->load($data);
        return $model;
    }

    public static function getAll(): array
    {
        return DAOFactory::getPropietarioDAO()->getAll();
    }

    public function create(): int
    {
        return DAOFactory::getPropietarioDAO()->create($this);
    }

    public function update(): int
    {
        return DAOFactory::getPropietarioDAO()->update($this);
    }

    public function delete(): int
    {
        return DAOFactory::getPropietarioDAO()->delete($this);
    }
}