<?php

namespace app\models\domain\repository;

use app\models\domain\repository\ProductoDAO;
use app\models\domain\repository\EsterilizacionDAO;
use app\models\domain\repository\AnimalDAO;

class DAOFactory {

    // Productos

    public static function getProductoDAO() : ProductoDAO{
        return new ProductoDAO();
    }

    //Usuarios

    public static function getUsuarioDAO() : UsuarioDAO{
        return new UsuarioDAO();
    }

    //Animal
    public static $animalDAO = AnimalDAO::class;
    
    public static function getAnimalDAO() : AnimalDAO{
        return new self::$animalDAO;
    }

    // Esterilizacion

    public static $esterilizacionDAO = EsterilizacionDAO::class;

    public static function getEsterilizacionDAO() : EsterilizacionDAO{
        return new self::$esterilizacionDAO();
    }


    public static $inventarioDAO = InventarioDAO::class;

    public static function getInventarioDAO() : InventarioDAO{
        return new self::$inventarioDAO();
    }




}