<?php

namespace app\models\domain\entity;

use app\models\domain\repository\DAOFactory;

class rabia
{
    public string $id_doc_rabia = '';
    public string $municipio = '';
    public string $area = '';
    public string $fecha_registro_rabia = '';
    public string $json = '';
    public string $id_dueno = '';
    public string $id_animal = '';

    public function load(array $attributes): static
    {
        foreach ($attributes as $key => $value) {
            $this->{$key} = $value;
        }
        return $this;
    }

    public static function getById(string $id_doc_rabia): static
    {
        $data = DAOFactory::getRabiaDAO()->getById($id_doc_rabia);
        $model = new Rabia();
        $model->load($data);
        return $model;
    }

    public static function getAll(): array
    {
        return DAOFactory::getRabiaDAO()->getAll();
    }

    public function create(): int
    {
        return DAOFactory::getRabiaDAO()->create($this);
    }

    public function update(): int
    {
        return DAOFactory::getRabiaDAO()->update($this);
    }

    public function delete(): int
    {
        return DAOFactory::getRabiaDAO()->delete($this);
    }
}