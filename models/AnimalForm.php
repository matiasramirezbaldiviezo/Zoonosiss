<?php

namespace app\models;

use yii\base\Model;
use app\models\domain\entity\Animal;
use yii\web\UploadedFile;

class AnimalForm extends Model
{
    public $id_animal;
    public $nombre_animal;
    public $genero;
    public $zona_direccion;
    public $tipo_dueno;
    public $edad;
    public $especie;
    public $imagen; // Nueva propiedad para la imagen

    //json
    public $json;
    public $confinamiento;
    public $comportamiento;
    public $visito_veterinario;
    public $vancuna_12meses;
    public $acceso_vacuna_rabia;
    public $desaparacitado;
    public $inyeccion_anticonceptiva;
    public $adquirir_mascota;
    public $veces_embarazo;
    public $camadas;
    public $complexion;
    public $condicion_piel;
    public $post_operatorio;



    public function rules()
    {
        return [
            [['nombre_animal', 'genero', 'zona_direccion', 'tipo_dueno', 'edad', 'especie'], 'required'],
            [['nombre_animal', 'genero', 'zona_direccion', 'especie', 'edad'], 'string'],
            [['tipo_dueno'], 'safe'],
            [['confinamiento','comportamiento','visito_veterinario',
            'vancuna_12meses','acceso_vacuna_rabia','desaparacitado',
            'inyeccion_anticonceptiva','adquirir_mascota','veces_embarazo',
            'camadas','complexion','condicion_piel','post_operatorio'], 'safe'],
            [['imagen'], 'file', 'skipOnEmpty' => true, 'extensions' => 'png, jpg, jpeg, gif'],
        ];
    }

    public function create(): bool
    {
        $this->id_animal = uniqid();
        $animal = new Animal();
        $animal->load($this->attributes);

        // Procesar la imagen si se ha cargado
        $uploadedImage = UploadedFile::getInstance($this, 'imagen');
        if ($uploadedImage !== null) {
            // Guardar la imagen en el servidor
            $imageName = 'animal_' . $this->id_animal . '.' . $uploadedImage->extension;
            $uploadedImage->saveAs('/home/mati/Descargas/roanl/git/web/img/' . $imageName);

            // Almacenar la información de la imagen en la base de datos
            $animal->imagen = $imageName;
        }

        $arrayJson = [ 
            'confinamiento' => $this -> confinamiento,
            'comportamiento' => $this -> comportamiento,
            'visito_veterinario' => $this -> visito_veterinario,
            'vancuna_12meses' => $this -> vancuna_12meses,
            'acceso_vacuna_rabia' => $this -> acceso_vacuna_rabia,
            'desaparacitado'=>$this -> desaparacitado,
            'inyeccion_anticonceptiva'=> $this->inyeccion_anticonceptiva,
            'adquirir_mascota'=>$this->adquirir_mascota,
            'veces_embarazo'=> $this->veces_embarazo,
            'camadas' => $this->camadas,
            'complexion' => $this->complexion,
            'condicion_piel' => $this-> condicion_piel,
            'post_operatorio' => $this->post_operatorio
            
        ];
        
        //Por ultimo se envia el array al campo 'json' de la bdd
        //Solo se interactua con RabiaForm y la vista Create
        $animal->json = json_encode($arrayJson);

        return $animal->create() > 0;
    }
    
    public function update() : bool{
        $animal = Animal::getById($this->id_animal);
        $animal->load($this->attributes);
        
        $uploadedImage = UploadedFile::getInstance($this, 'imagen');
        if ($uploadedImage !== null) {
            // Guardar la imagen en el servidor
            $imageName = 'animal_' . $this->id_animal . '.' . $uploadedImage->extension;
            $uploadedImage->saveAs('/home/mati/Descargas/roanl/git/web/img/' . $imageName);

            // Almacenar la información de la imagen en la base de datos
            $animal->imagen = $imageName;
        }
        $arrayJson = [ 
            'confinamiento' => $this -> confinamiento,
            'comportamiento' => $this -> comportamiento,
            'visito_veterinario' => $this -> visito_veterinario,
            'vancuna_12meses' => $this -> vancuna_12meses,
            'acceso_vacuna_rabia' => $this -> acceso_vacuna_rabia,
            'desaparacitado'=>$this -> desaparacitado,
            'inyeccion_anticonceptiva'=> $this->inyeccion_anticonceptiva,
            'adquirir_mascota'=>$this->adquirir_mascota,
            'veces_embarazo'=> $this->veces_embarazo,
            'camadas' => $this->camadas,
            'complexion' => $this->complexion,
            'condicion_piel' => $this-> condicion_piel,
            'post_operatorio' => $this->post_operatorio
            
        ];
        
        //Por ultimo se envia el array al campo 'json' de la bdd
        //Solo se interactua con RabiaForm y la vista Create
        $animal->json = json_encode($arrayJson);

        return $animal->update() > 0;
    }
}