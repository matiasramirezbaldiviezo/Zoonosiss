<?php

namespace app\models\domain\repository;

use PDO;
use Yii;
use app\models\domain\entity\Animal;

class AnimalDAO{

    public function getAll(): array
    {

        $cmd = Yii::$app->db->createCommand("
            SELECT *
            FROM paciente_animal
            ORDER BY id_animal
        ");
        return $cmd->queryAll();

    }

    public function getById(string $id): array
    {
        
        $cmd = Yii::$app->db->createCommand("
            SELECT *
            FROM paciente_animal
            WHERE id_animal = :id_animal
        ");

        $cmd->bindValue(':id_animal', $id, PDO::PARAM_INT);

        return $cmd->queryOne();

    }


    public function create(Animal $animal) : int
    {
        $cmd = Yii::$app->db->createCommand("
            INSERT INTO animal (id, nombre_animal, genero, zona_direccion, tipo_dueno, edad, especie) 
            VALUES(:id, :nombre_animal, :genero, :zona_direccion, :tipo_dueno, :edad, :especie);
        ");

        $cmd->bindValues([
            ':id' => $animal->id,
            ':nombre' => $animal->nombre,
            ':genero' => $animal -> genero,
            'zona_direccion'=> $animal -> direccion,
            'tipo_dueno' => $animal -> tipo_dueno,
            'edad' => $animal -> edad,
            'especie' => $animal -> especie
        ]);

        return $cmd->execute();
    }

    public function update(Animal $animal) : int
    {
        $cmd = Yii::$app->db->createCommand("
            UPDATE paciente_animal SET
            nombre_animal = :nombre,
            genero = :genero,
            zonda_direccion = :zona_direccion,
            tipo_dueno = :tipo_dueno,
            edad = :edad,
            especie = :especie,
            WHERE id = :id            
        ");

        $cmd->bindValues([
            ':id' => $animal->id,
            ':nombre' => $animal->nombre,
            ':genero' => $animal -> genero,
            'zona_direccion'=> $animal -> direccion,
            'tipo_dueno' => $animal -> tipo_dueno,
            'edad' => $animal -> edad,
            'especie' => $animal -> especie
        ]);

        return $cmd->execute();
    }

    public function delete(Animal $animal) : int
    {
        
        $cmd = Yii::$app->db->createCommand("
            DELETE FROM paciente_animal
            WHERE id = :id            
        ");

        $cmd->bindValues([
            ':id' => $animal->id_,
        ]);

        return $cmd->execute();
    }

}
