<?php

namespace app\models\domain\repository;

use PDO;
use Yii;
use app\models\domain\entity\Inventario;

class InventarioDAO{

    public function getAll(): array
    {
        // 
        $cmd = Yii::$app->db->createCommand("
            SELECT *
            FROM inventario
            ORDER BY id
        ");
        return $cmd->queryAll();

    }

    
    public function getById(string $id): array
    {
        $id = (int) $id;
        $cmd = Yii::$app->db->createCommand("
            SELECT *
            FROM inventario
            WHERE id = :id
        ");

        $cmd->bindValue(':id', $id, PDO::PARAM_INT);

        return $cmd->queryOne();

    }

    public function create(Inventario $inventario) : int
    {
        $cmd = Yii::$app->db->createCommand("
            INSERT INTO inventario ( nombre,cantidad) 
            VALUES( :nombre,:cantidad);
        ");

        $cmd->bindValues([
            ':nombre' => $inventario->nombre,
            ':cantidad' => intval($inventario->cantidad)
        ]);

        return $cmd->execute();
    }

    public function update(Inventario $inventario) : int
    {
        $cmd = Yii::$app->db->createCommand("
            UPDATE inventario SET
            nombre= :nombre,
            cantidad = :cantidad
            WHERE id = :id            
        ");

        $cmd->bindValues([
            ':id' => $inventario->id,
            ':nombre' => $inventario->nombre,
            ':cantidad' => $inventario -> cantidad,
        ]);

        return $cmd->execute();
    }

    public function delete(Inventario $inventario) : int
    {
        
        $cmd = Yii::$app->db->createCommand("
            DELETE FROM inventario
            WHERE id = :id            
        ");

        $cmd->bindValues([
            ':id' => $inventario->id,
        ]);

        return $cmd->execute();
    }
    


}
