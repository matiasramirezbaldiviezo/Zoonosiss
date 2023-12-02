<?php

namespace app\models;

use yii\base\Model;
use app\models\domain\entity\Rabia;

class RabiaForm extends Model
{
    public $id_doc_rabia;
    public $municipio;
    public $area;
    public $json;
    public $id_dueno;
    public $id_animal;
    //Variables json
    public $sedes;
    public $distrito;
    public $especie;
    public $tipo_animal;
    public $vacuna_antirrabica;
    public $presento_carnet;
    public $fecha_ult_vacuna;
    public $marca_vacuna;
    public $sintomas_clinicos;
    public $especificar;
    public $diagnostico_presuntivo;
    public $antecedentes_mordeduras;
    public $n_de_personas_mordidas;
    public $n_especie_animales_mordidos;
    public $circunstancias_mordidos;
    public $tecnica;
    public $tipo_muestra;
    public $fecha_muestra;
    public $fecha_envio;
    public $fecha_recepcion;
    public $nombre_remitente;
    public $cargo;
    public $telefono;
    public $n_fax;
    public $celular;
    public $observaciones;
    public $nombre_responsable;


    public function rules()
{
    return [
        [['municipio', 'area', 'id_dueno', 'id_animal'], 'required'],
        [['municipio','area'], 'string'],
        [['sedes', 'distrito', 'especie',
        'tipo_animal', 'vacuna_antirrabica',
        'presento_carnet', 'fecha_ult_vacuna',
        'marca_vacuna', 'sintomas_clinicos',
        'especificar', 'diagnostico_presuntivo',
        'antecedentes_mordeduras',
        'n_de_personas_mordidas',
        'n_especie_animales_mordidos',
        'circunstancias_mordidos',
        'tecnica', 'tipo_muestra',
        'fecha_muestra', 'fecha_envio',
        'fecha_recepcion', 'nombre_remitente',
        'cargo', 'telefono', 'n_fax', 'celular', 
        'observaciones', 'nombre_responsable'], 'safe'],
    ];
}


    public function create() : bool{
        $this->id_doc_rabia = uniqid();
        
        $rabia = new Rabia();
        //Se debe cargar uno por uno cada atributo QUE VA EN LA BDD
        $rabia->id_doc_rabia = $this->id_doc_rabia;
        $rabia->municipio = $this->municipio;
        $rabia->area = $this->area;
        $rabia->id_dueno = $this->id_dueno;
        $rabia->id_animal = $this->id_animal;
        //Luego se carga uno por uno cada atributo del json dentro del array, con llave valor
        $arrayJson = [ 
            'sedes' => $this -> sedes,
            'distrito' => $this -> distrito,
            'especie' => $this -> especie,
            'tipo_animal' => $this -> tipo_animal,
            'vacuna_antirrabica' => $this -> vacuna_antirrabica,
            'presento_carnet'=>$this -> presento_carnet,
            'fecha_ult_vacuna'=> $this->fecha_ult_vacuna,
            'marca_vacuna'=>$this->marca_vacuna,
            'sintomas_clinicos'=> $this->sintomas_clinicos,
            'especificar' => $this->especificar,
            'diagnostico_presuntivo' => $this->diagnostico_presuntivo,
            'antecedentes_mordeduras' => $this-> antecedentes_mordeduras,
            'n_de_personas_mordidas' => $this->n_de_personas_mordidas,
            'n_especie_animales_mordidos' => $this->n_especie_animales_mordidos,
            'circunstancias_mordidos' => $this->circunstancias_mordidos,
            'tecnica' => $this->tecnica,
            'tipo_muestra' => $this->tipo_muestra,
            'fecha_muestra' => $this->fecha_muestra,
            'fecha_envio' => $this->fecha_envio,
            'fecha_recepcion' => $this->fecha_recepcion,
            'nombre_remitente' => $this->nombre_remitente,
            'cargo' => $this->cargo,
            'telefono' => $this->telefono,
            'n_fax' => $this->n_fax,
            'celular' => $this->celular,
            'observaciones' => $this->observaciones,
            'nombre_responsable' => $this->nombre_responsable
        ];
        
        //Por ultimo se envia el array al campo 'json' de la bdd
        //Solo se interactua con RabiaForm y la vista Create
        $rabia->json = json_encode($arrayJson);
        //$rabia->load($this->attributes);
        return $rabia->create() > 0; 
    }
    
    public function update() : bool{
        $rabia = Rabia::getById($this->id_doc_rabia);
        $rabia->municipio = $this->municipio;
        $rabia->area = $this->area;
        $rabia->json = $this->json;
        $rabia->id_dueno = $this->id_dueno;
        $rabia->id_animal = $this -> id_animal;

        return $rabia->update() > 0;
    }
}