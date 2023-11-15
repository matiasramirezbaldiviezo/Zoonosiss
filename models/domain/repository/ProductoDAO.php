<?php

namespace app\models\domain\repository;

use app\models\domain\entity\Producto;

class ProductoDAO{

    public function getAll(): array
    {
        // 
        return [
            ['id' => 1, 'nombre' => 'papa'],
            ['id' => 2, 'nombre' => 'arroz'],
            ['id' => 3, 'nombre' => 'tomate'],
            ['id' => 4, 'nombre' => 'agua'],
        ];

    }

    public function getById(string $id): array
    {
        // 
        return ['id' => 1, 'nombre' => 'papa'];

    }


    public function create(Producto $producto) : int
    {
        
        return 1;
    }

}
