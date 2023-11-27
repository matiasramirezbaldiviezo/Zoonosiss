<?php

namespace app\models\domain\repository;

use PDO;
use Yii;
use app\models\domain\entity\Rabia;

class RabiaDAO{

    public function getAll(): array
    {

        $cmd = Yii::$app->db->createCommand("
            SELECT *
            FROM documento_rabia
            ORDER BY id_doc_rabia
        ");
        return $cmd->queryAll();

    }

    public function getById(string $id_doc_rabia): array
    {
        
        $cmd = Yii::$app->db->createCommand("
            SELECT *
            FROM documento_rabia
            WHERE id_doc_rabia = :id_doc_rabia
        ");
        
        $cmd->bindValue(':id_doc_rabia', $id_doc_rabia, PDO::PARAM_INT);

        return $cmd->queryOne();
    }


    public function create(Rabia $rabia) : int
    {
        $cmd = Yii::$app->db->createCommand("
            INSERT INTO documento_rabia (municipio, area, json, id_dueno, id_animal) 
            VALUES(:municipio, :area, :json, :id_dueno, :id_animal);
        ");

        $cmd->bindValues([
            ':municipio' => $rabia->municipio,
            ':area'=>$rabia -> area,
            ':json'=> $rabia -> json,
            ':id_dueno' => $rabia -> id_dueno,
            ':id_animal' => $rabia -> id_animal,
        ]);

        return $cmd->execute();
    }

    public function update(Rabia $rabia) : int
    {
        $cmd = Yii::$app->db->createCommand("
            UPDATE documento_rabia SET
            municipio = :municipio,
            area = :area,
            json = :json,
            id_dueno = :id_dueno,
            id_animal = :id_animal
            WHERE id_doc_rabia = :id_doc_rabia     
        ");

        $cmd->bindValues([
            ':id_doc_rabia' => $rabia->id_doc_rabia,
            ':municipio' => $rabia -> municipio,
            ':area'=>$rabia -> area,
            //':fecha_registro_rabia' => $rabia -> fecha_registro_rabia,
            ':json'=> $rabia -> json,
            ':id_dueno' => $rabia -> id_dueno,
            ':id_animal' => $rabia -> id_animal,
        ]);

        return $cmd->execute();
    }

    public function delete(Rabia $rabia) : int
    {
        
        $cmd = Yii::$app->db->createCommand("
            DELETE FROM documento_rabia
            WHERE id_doc_rabia = :id_doc_rabia           
        ");

        $cmd->bindValues([
            ':id_doc_rabia' => $rabia->id_doc_rabia,
        ]);

        return $cmd->execute();
    }

}