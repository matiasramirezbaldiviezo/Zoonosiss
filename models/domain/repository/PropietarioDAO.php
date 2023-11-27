<?php

namespace app\models\domain\repository;

use PDO;
use Yii;
use app\models\domain\entity\Propietario;

class PropietarioDAO{

    public function getAll(): array
    {

        $cmd = Yii::$app->db->createCommand("
            SELECT *
            FROM acompanante_propietario
            ORDER BY id_dueno
        ");
        return $cmd->queryAll();

    }

    public function getById(string $id_dueno): array
    {
        
        $cmd = Yii::$app->db->createCommand("
            SELECT *
            FROM acompanante_propietario
            WHERE id_dueno = :id_dueno
        ");

        $cmd->bindValue(':id_dueno', $id_dueno, PDO::PARAM_INT);

        return $cmd->queryOne();

    }


    public function create(Propietario $propietario) : int
    {
        $cmd = Yii::$app->db->createCommand("
            INSERT INTO acompanante_propietario (celular, direccion, tipo_dueno, nombre, apellidos, telefono) 
            VALUES(:celular, :direccion, :tipo_dueno, :nombre, :apellidos, :telefono);
        ");

        $cmd->bindValues([
            ':celular' => $propietario->celular,
            ':direccion'=> $propietario -> direccion,
            ':tipo_dueno' => $propietario -> tipo_dueno,
            ':nombre' => $propietario -> nombre,
            ':apellidos' => $propietario -> apellidos,
            ':telefono' => $propietario -> telefono
        ]);

        return $cmd->execute();
    }

    public function update(Propietario $propietario) : int
    {
        $cmd = Yii::$app->db->createCommand("
            UPDATE acompanante_propietario SET
            celular = :celular,
            direccion = :direccion,
            tipo_dueno = :tipo_dueno,
            nombre = :nombre,
            apellidos = :apellidos,
            telefono = :telefono
            WHERE id_dueno = :id_dueno            
        ");

        $cmd->bindValues([
            ':id_dueno' => $propietario->id_dueno,
            ':celular' => $propietario->celular,
            ':direccion'=> $propietario -> direccion,
            ':tipo_dueno' => $propietario -> tipo_dueno,
            ':nombre' => $propietario -> nombre,
            ':apellidos' => $propietario -> apellidos,
            ':telefono' => $propietario -> telefono
        ]);

        return $cmd->execute();
    }

    public function delete(Propietario $propietario) : int
    {
        
        $cmd = Yii::$app->db->createCommand("
            DELETE FROM acompanante_propietario
            WHERE id_dueno = :id_dueno          
        ");

        $cmd->bindValues([
            ':id_dueno' => $propietario->id_dueno,
        ]);

        return $cmd->execute();
    }

}