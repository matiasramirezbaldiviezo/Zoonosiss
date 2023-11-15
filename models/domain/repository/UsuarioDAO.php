<?php

namespace app\models\domain\repository;

use app\models\domain\entity\Usuario;

class UsuarioDAO{

    public function getAll(): array
    {
        // 
        return [
            ['id' => 1, 'nombre' => 'Mauricio Rosas', 'rol' => 'administrador'],
            
        ];

    }

    public function getById(string $id): array
    {
        // 
        return ['id' => 1, 'nombre' => 'Mauricio Rosas', 'rol' => 'administrador'];

    }


    public function create(Usuario $usuario) : int
    {
        
        return 1;
    }

}