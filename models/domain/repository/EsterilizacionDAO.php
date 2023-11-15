<?php

namespace app\models\domain\repository;

use PDO;
use Yii;
use app\models\domain\entity\Esterilizacion;

class EsterilizacionDAO{

    public function getAll(): array
    {

        $cmd = Yii::$app->db->createCommand("
            SELECT *
            FROM documento_esterilizacion
            ORDER BY id
        ");
        return $cmd->queryAll();

    }

    public function getById(string $id): array
    {
        $cmd = Yii::$app->db->createCommand("
            SELECT *
            FROM documento_esterilizacion
            WHERE id = :id
        ");

        $cmd->bindValue(':id', $id, PDO::PARAM_INT);

        return $cmd->queryOne();

    }

    public function getProductosByEsterilizacion(string $esterilizacionId): array
    {
        $cmd = Yii::$app->db->createCommand("
        SELECT estein.id_estein, estein.cantidad, inventario.nombre
        FROM  estein
        JOIN inventario ON inventario.id = estein.id_inventario
        WHERE estein.id_esterilizaciones = :id
        ");

        $cmd->bindValue(':id', $esterilizacionId, PDO::PARAM_INT);

        return $cmd->queryAll();



    }

    public function getProductosEsterilizacion(string $productoesterilizacionId): array
    {
        $cmd = Yii::$app->db->createCommand("
        SELECT id,nombre
        FROM inventario
        ORDER BY id
        ");


        return $cmd->queryAll();

    }

    public function createproducto(Esterilizacion $esterilizacion) : int
    {
        $cmd = Yii::$app->db->createCommand("
            INSERT INTO estein (id_esterilizaciones,id_inventario,cantidad) 
            VALUES(:id_esterilizacion, :id, :cantidad);
        ");



        $cmd->bindValues([
            ':id' => $esterilizacion->id,
            ':cantidad' => $esterilizacion->cantidad,

        ]);
        

        return $cmd->execute();
    }

    //Pendiente para preguntar
    public function create(Esterilizacion $esterilizacion) : int
    {
        $cmd = Yii::$app->db->createCommand("
            INSERT INTO documento_esterilizacion (tatuaje,datatype,id_dueno,id_animal) 
            VALUES(:tatuaje, :datatype, :id_dueno, :id_animal);
        ");



        $cmd->bindValues([
            ':tatuaje' => $esterilizacion->tatuaje,
            ':datatype' => $esterilizacion->datatype,
            ':id_dueno' => $esterilizacion->id_dueno,
            ':id_animal' => $esterilizacion->id_animal,

        ]);
        

        return $cmd->execute();
    }

    //por hacer

    public function update(Esterilizacion $esterilizacion) : int
    {
        $cmd = Yii::$app->db->createCommand("
            UPDATE documento_esterilizacion SET
            tatuaje = :tatuaje,
            datatype = :datatype,
            id_dueno = :id_dueno,
            id_animal = :id_animal
            WHERE id = :id            
        ");


        $cmd->bindValues([
            ':id' => $esterilizacion->id,
            ':tatuaje' => $esterilizacion->tatuaje,
            ':datatype' => $esterilizacion->datatype,
            ':id_dueno' => $esterilizacion->id_dueno,
            ':id_animal' => $esterilizacion->id_animal,
        ]);

        return $cmd->execute();
    }

    
    public function delete(Esterilizacion $esterilizacion) : int
    {
        
        $cmd = Yii::$app->db->createCommand("
            DELETE FROM documento_esterilizacion
            WHERE id = :id            
        ");

        $cmd->bindValues([
            ':id' => $esterilizacion->id,
        ]);

        return $cmd->execute();
    }

   

    

}