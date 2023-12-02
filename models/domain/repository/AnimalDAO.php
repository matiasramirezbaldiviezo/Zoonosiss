<?php

namespace app\models\domain\repository;

use PDO;
use Yii;
use app\models\domain\entity\Animal;

class AnimalDAO
{
    public function getAll(): array
    {
        $cmd = Yii::$app->db->createCommand("
            SELECT *
            FROM paciente_animal
            ORDER BY id_animal
        ");
        return $cmd->queryAll();
    }

    public function getById(string $id_animal): array
    {
        $cmd = Yii::$app->db->createCommand("
            SELECT *
            FROM paciente_animal
            WHERE id_animal = :id
        ");

        $cmd->bindValue(':id', $id_animal, PDO::PARAM_INT);

        return $cmd->queryOne();
    }

    public function create(Animal $animal): int
    {
        $cmd = Yii::$app->db->createCommand("
            INSERT INTO paciente_animal (nombre_animal, genero, zona_direccion, 
                                        tipo_dueno, edad, especie, imagen, json) 
            VALUES (:nombre_animal, :genero, :zona_direccion,
            :tipo_dueno, :edad, :especie,
            :imagen , :json);
        ");

        $cmd->bindValues([
            ':nombre_animal' => $animal->nombre_animal,
            ':genero' => $animal->genero,
            ':zona_direccion' => $animal->zona_direccion,
            ':tipo_dueno' => $animal->tipo_dueno,
            ':edad' => $animal->edad,
            ':especie' => $animal->especie,
            ':imagen' => $animal->imagen, // Nueva propiedad para la imagen
            ':json' => $animal-> json,
        ]);

        return $cmd->execute();
    }

    public function update(Animal $animal): int
    {
    
            $cmd = Yii::$app->db->createCommand("
                UPDATE paciente_animal SET
                nombre_animal = :nombre_animal,
                genero = :genero,
                zona_direccion = :zona_direccion,
                tipo_dueno = :tipo_dueno,
                edad = :edad,
                especie = :especie,
                imagen = :imagen,
                json = :json
                WHERE id_animal = :id
            ");

            $cmd->bindValue(':id', $animal->id_animal);
            $cmd->bindValue(':nombre_animal', $animal->nombre_animal);
            $cmd->bindValue(':genero', $animal->genero);
            $cmd->bindValue(':zona_direccion', $animal->zona_direccion);
            $cmd->bindValue(':tipo_dueno', $animal->tipo_dueno);
            $cmd->bindValue(':edad', $animal->edad);
            $cmd->bindValue(':especie', $animal->especie);
            $cmd->bindValue(':imagen', $animal->imagen);
            $cmd->bindValue(':json', $animal->json);

            return $cmd->execute();
    
    }

    public function delete(Animal $animal): int
    {
        $cmd = Yii::$app->db->createCommand("
            DELETE FROM paciente_animal
            WHERE id_animal = :id
        ");

        $cmd->bindValues([
            ':id' => $animal->id_animal,
        ]);

        return $cmd->execute();
    }
}
